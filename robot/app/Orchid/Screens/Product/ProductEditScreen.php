<?php

namespace App\Orchid\Screens\Product;

use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductSpecification;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Select;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Attachment\Models\Attachment;

class ProductEditScreen extends Screen
{
    /**
     * @var Product
     */
    public $product;

    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(Product $product): iterable
    {
        $product->load(['features', 'specifications', 'galleries']);

        // Prepare features matrix data
        $featuresMatrix = $product->features->map(function ($feature) {
            return [
                'title' => $feature->title,
                'icon' => $feature->icon,
                'custom_icon' => $feature->custom_icon,
            ];
        })->toArray();

        // Prepare specifications matrix data
        $specsMatrix = $product->specifications->map(function ($spec) {
            return [
                'label' => $spec->label,
                'value' => $spec->value,
            ];
        })->toArray();

        return [
            'product' => $product,
            'features' => $featuresMatrix,
            'specifications' => $specsMatrix,
            'gallery_images' => $product->attachment('gallery')->get(),
            'video_attachment_local' => $product->attachment('video')->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->product->exists ? 'Edit Product: ' . $this->product->name : 'Create Product';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Create or edit a product with features, specifications, and gallery';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('check')
                ->method('save'),

            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->confirm('Are you sure you want to delete this product? This will also delete all features, specifications, and gallery images.')
                ->canSee($this->product->exists),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::tabs([
                'Basic Info' => Layout::rows([
                    Input::make('product.name')
                        ->title('Product Name')
                        ->placeholder('e.g., BellaBot')
                        ->required(),

                    Input::make('product.slug')
                        ->title('Slug')
                        ->placeholder('Auto-generated from name if left empty')
                        ->help('URL-friendly version of the name (e.g., bellabot)'),

                    Input::make('product.tagline')
                        ->title('Tagline')
                        ->placeholder('e.g., Your Adorable Restaurant Assistant'),

                    Input::make('product.category')
                        ->title('Category')
                        ->placeholder('e.g., Delivery Robot, Service Robot, Cleaning Robot'),

                    TextArea::make('product.hero_text')
                        ->title('Hero Text')
                        ->placeholder('Short description for the hero section')
                        ->rows(3),

                    Quill::make('product.description')
                        ->title('Full Description')
                        ->help('Detailed description shown in the features section'),

                    Group::make([
                        Switcher::make('product.is_published')
                            ->title('Published')
                            ->sendTrueOrFalse()
                            ->help('Product will only appear on frontend when published'),

                        Input::make('product.sort_order')
                            ->title('Sort Order')
                            ->type('number')
                            ->value(0)
                            ->help('Lower numbers appear first'),
                    ]),
                ]),

                'Images & Video' => Layout::rows([
                    Cropper::make('product.image')
                        ->title('Main Product Image')
                        ->width(600)
                        ->height(600)
                        ->targetRelativeUrl()
                        ->acceptedFiles('image/jpeg,image/png,image/webp,image/gif')
                        ->help('Square image, recommended 600x600px. Accepts: PNG, JPG, WebP, GIF'),

                    Cropper::make('product.hero_bg')
                        ->title('Hero Background Image')
                        ->width(1920)
                        ->height(1080)
                        ->targetRelativeUrl()
                        ->acceptedFiles('image/jpeg,image/png,image/webp,image/gif')
                        ->help('Full-width hero background, recommended 1920x1080px. Accepts: PNG, JPG, WebP, GIF'),

                    Cropper::make('product.feature_image')
                        ->title('Feature Section Image')
                        ->width(1200)
                        ->height(600)
                        ->targetRelativeUrl()
                        ->acceptedFiles('image/jpeg,image/png,image/webp,image/gif')
                        ->help('Image shown below features grid. Accepts: PNG, JPG, WebP, GIF'),

                    Cropper::make('product.specs_image')
                        ->title('Specifications Image')
                        ->width(600)
                        ->height(800)
                        ->targetRelativeUrl()
                        ->acceptedFiles('image/jpeg,image/png,image/webp,image/gif')
                        ->help('Image shown next to specifications table. Accepts: PNG, JPG, WebP, GIF'),

                    Upload::make('video_attachment_local')
                        ->title('Product Video (Optional)')
                        ->acceptedFiles('video/mp4,video/webm,video/ogg,video/*')
                        ->maxFiles(1)
                        ->help('Upload a product demo video (MP4, WebM recommended)'),
                ]),

                'Features' => Layout::rows([
                    Matrix::make('features')
                        ->title('Product Features')
                        ->columns([
                            'Feature Title' => 'title',
                            'FontAwesome Icon' => 'icon',
                            'Custom Icon (optional)' => 'custom_icon',
                        ])
                        ->fields([
                            'title' => Input::make()->placeholder('e.g., AI-powered navigation'),
                            'icon' => Select::make()->options(self::getFontAwesomeIcons())->empty('Select an icon...'),
                            'custom_icon' => Picture::make()->targetRelativeUrl()->acceptedFiles('image/*'),
                        ])
                        ->help('Select a FontAwesome icon from the dropdown, OR upload a custom icon image (PNG/JPG/SVG). If custom icon is uploaded, it will be used instead of the FontAwesome icon.'),
                ]),

                'Specifications' => Layout::rows([
                    Matrix::make('specifications')
                        ->title('Technical Specifications')
                        ->columns([
                            'Label' => 'label',
                            'Value' => 'value',
                        ])
                        ->fields([
                            'label' => Input::make()->placeholder('e.g., Height'),
                            'value' => Input::make()->placeholder('e.g., 1288 mm'),
                        ])
                        ->help('Add technical specification pairs (e.g., Height: 1288 mm, Weight: 48 kg)'),
                ]),

                'Gallery' => Layout::rows([
                    Upload::make('gallery_images')
                        ->title('Gallery Images')
                        ->acceptedFiles('image/*')
                        ->maxFiles(20)
                        ->help('Upload multiple gallery images. You can drag to reorder them.'),
                ]),

                'Features Showcase' => Layout::rows([
                    Group::make([
                        Input::make('product.feature_section_data.subtitle')
                            ->title('Section Subtitle')
                            ->placeholder('e.g., MEET ADAM'),

                        Input::make('product.feature_section_data.title')
                            ->title('Section Title')
                            ->placeholder('e.g., All-in-one beverage service'),
                    ]),

                    TextArea::make('product.feature_section_data.description')
                        ->title('Section Description')
                        ->rows(3)
                        ->placeholder('e.g., Experience unparalleled efficiency...'),

                    // Card 1
                    Group::make([
                        Input::make('product.feature_section_data.cards.0.title')
                            ->title('Card 1 Title')
                            ->placeholder('e.g., Masterful mixologist'),
                    ]),
                    Group::make([
                        Picture::make('product.feature_section_data.cards.0.image')
                            ->title('Card 1 Image')
                            ->targetRelativeUrl(),
                        TextArea::make('product.feature_section_data.cards.0.caption')
                            ->title('Card 1 Caption')
                            ->rows(2),
                    ]),

                    // Card 2
                    Group::make([
                        Input::make('product.feature_section_data.cards.1.title')
                            ->title('Card 2 Title')
                            ->placeholder('e.g., Coffee connoisseur'),
                    ]),
                    Group::make([
                        Picture::make('product.feature_section_data.cards.1.image')
                            ->title('Card 2 Image')
                            ->targetRelativeUrl(),
                        TextArea::make('product.feature_section_data.cards.1.caption')
                            ->title('Card 2 Caption')
                            ->rows(2),
                    ]),

                    // Card 3
                    Group::make([
                        Input::make('product.feature_section_data.cards.2.title')
                            ->title('Card 3 Title')
                            ->placeholder('e.g., Boba tea maestro'),
                    ]),
                    Group::make([
                        Picture::make('product.feature_section_data.cards.2.image')
                            ->title('Card 3 Image')
                            ->targetRelativeUrl(),
                        TextArea::make('product.feature_section_data.cards.2.caption')
                            ->title('Card 3 Caption')
                            ->rows(2),
                    ]),

                    // Card 4
                    Group::make([
                        Input::make('product.feature_section_data.cards.3.title')
                            ->title('Card 4 Title')
                            ->placeholder('Optional'),
                    ]),
                    Group::make([
                        Picture::make('product.feature_section_data.cards.3.image')
                            ->title('Card 4 Image')
                            ->targetRelativeUrl(),
                        TextArea::make('product.feature_section_data.cards.3.caption')
                            ->title('Card 4 Caption')
                            ->rows(2),
                    ]),
                ]),
            ]),
        ];
    }

    /**
     * Save the product.
     */
    public function save(Product $product, Request $request)
    {
        try {
            $data = $request->get('product');

            // Auto-generate slug if not provided
            if (empty($data['slug'])) {
                $data['slug'] = Str::slug($data['name']);
            }

            // Set default sort_order if not provided
            if (!isset($data['sort_order']) || $data['sort_order'] === '') {
                $data['sort_order'] = 0;
            }

            // Handle video attachment separately
            // Read from the local field 'video_attachment_local' which prevents dirty data issues.
            $videoAttachmentIds = $request->input('video_attachment_local', []);

            // Explicitly handle feature_section_data to ensure it's saved as array/json
            // This ensures that even if fillable/casts had issues, we catch it or handle it.
            $featureData = $data['feature_section_data'] ?? null;
            if (is_array($featureData)) {
                // Filter out completely empty cards if needed, or just save as is.
                // We'll save as is to maintain index positions if user filled non-sequentially.
            }
            // unset from data to prevent double assignment if needed, though fill() handles it if in fillable
            unset($data['feature_section_data']);

            // Save the product basic data
            $product->fill($data);

            // Assign JSON data manually
            if ($featureData !== null) {
                $product->feature_section_data = $featureData;
            }

            $product->save();

            // Sync video attachment
            // Sync video attachment
            // FORCE SYNC: Use sync() to strictly enforce the list. 
            // This ensures removed videos are actually detached, regardless of their previous group state.
            $product->attachment()->sync($videoAttachmentIds);

            if (!empty($videoAttachmentIds)) {
                // Ensure they are marked as video group for future reference
                Attachment::whereIn('id', $videoAttachmentIds)->update(['group' => 'video']);
            }

            // Handle features
            $featuresData = $request->input('features', []);

            // Delete existing features and recreate
            $product->features()->delete();
            if (is_array($featuresData)) {
                foreach ($featuresData as $index => $feature) {
                    if (!empty($feature['title'])) {
                        $product->features()->create([
                            'title' => $feature['title'],
                            'icon' => $feature['icon'] ?? 'fa-robot',
                            'custom_icon' => $feature['custom_icon'] ?? null,
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            // Handle specifications
            $specsData = $request->input('specifications', []);

            // Delete existing specs and recreate
            $product->specifications()->delete();
            if (is_array($specsData)) {
                foreach ($specsData as $index => $spec) {
                    if (!empty($spec['label']) && !empty($spec['value'])) {
                        $product->specifications()->create([
                            'label' => $spec['label'],
                            'value' => $spec['value'],
                            'sort_order' => $index,
                        ]);
                    }
                }
            }

            // Handle gallery images from Upload field
            $galleryImageIds = $request->input('gallery_images', []);

            // Delete existing galleries and recreate from uploaded images
            $product->galleries()->delete();
            if (is_array($galleryImageIds) && !empty($galleryImageIds)) {
                $attachments = Attachment::whereIn('id', $galleryImageIds)->get();
                foreach ($attachments as $index => $attachment) {
                    $product->galleries()->create([
                        'image' => $attachment->relativeUrl,
                        'alt_text' => $attachment->original_name ?? $product->name,
                        'sort_order' => $index,
                    ]);
                }
            }

            Toast::info('Product saved successfully.');

            return redirect()->route('platform.products.list');

        } catch (\Throwable $e) {
            Toast::error('Error saving product: ' . $e->getMessage());
            \Log::error($e);
            return back()->withInput();
        }
    }

    /**
     * Delete the product.
     */
    public function remove(Product $product)
    {
        $product->delete();

        Toast::info('Product deleted.');

        return redirect()->route('platform.products.list');
    }

    /**
     * Get comprehensive list of FontAwesome icons.
     */
    public static function getFontAwesomeIcons(): array
    {
        return [
            // === ROBOTICS & TECHNOLOGY ===
            'fa-robot' => '🤖 Robot',
            'fa-microchip' => '💾 Microchip',
            'fa-brain' => '🧠 Brain/AI',
            'fa-memory' => '💽 Memory',
            'fa-microphone' => '🎤 Microphone',
            'fa-microphone-alt' => '🎤 Microphone Alt',
            'fa-satellite' => '📡 Satellite',
            'fa-satellite-dish' => '📡 Satellite Dish',
            'fa-sim-card' => '💳 SIM Card',
            'fa-sd-card' => '💾 SD Card',
            'fa-usb' => '🔌 USB',
            'fa-ethernet' => '🔌 Ethernet',

            // === POWER & ENERGY ===
            'fa-bolt' => '⚡ Bolt/Power',
            'fa-battery-full' => '🔋 Battery Full',
            'fa-battery-three-quarters' => '🔋 Battery 75%',
            'fa-battery-half' => '🔋 Battery 50%',
            'fa-battery-quarter' => '🔋 Battery 25%',
            'fa-battery-empty' => '🔋 Battery Empty',
            'fa-plug' => '🔌 Plug',
            'fa-charging-station' => '🔌 Charging Station',
            'fa-car-battery' => '🔋 Car Battery',
            'fa-solar-panel' => '☀️ Solar Panel',
            'fa-wind' => '💨 Wind',
            'fa-fire' => '🔥 Fire',
            'fa-fire-alt' => '🔥 Fire Alt',

            // === TIME & SPEED ===
            'fa-clock' => '⏰ Clock',
            'fa-stopwatch' => '⏱️ Stopwatch',
            'fa-hourglass' => '⏳ Hourglass',
            'fa-hourglass-half' => '⏳ Hourglass Half',
            'fa-hourglass-start' => '⏳ Hourglass Start',
            'fa-hourglass-end' => '⏳ Hourglass End',
            'fa-tachometer-alt' => '📊 Speedometer',
            'fa-history' => '🕐 History',

            // === SETTINGS & CONTROLS ===
            'fa-cog' => '⚙️ Cog/Settings',
            'fa-cogs' => '⚙️ Cogs',
            'fa-sliders-h' => '🎚️ Sliders',
            'fa-toggle-on' => '🔘 Toggle On',
            'fa-toggle-off' => '🔘 Toggle Off',
            'fa-power-off' => '⏻ Power Off',
            'fa-adjust' => '◐ Adjust',

            // === CONNECTIVITY ===
            'fa-wifi' => '📶 WiFi',
            'fa-bluetooth-b' => '📱 Bluetooth',
            'fa-signal' => '📶 Signal',
            'fa-broadcast-tower' => '📡 Broadcast Tower',
            'fa-network-wired' => '🔗 Network Wired',
            'fa-project-diagram' => '📊 Network Diagram',
            'fa-share-alt' => '↗️ Share/Connect',
            'fa-link' => '🔗 Link',
            'fa-unlink' => '🔗 Unlink',

            // === VISION & SENSORS ===
            'fa-eye' => '👁️ Eye/Vision',
            'fa-eye-slash' => '👁️ Eye Slash',
            'fa-camera' => '📷 Camera',
            'fa-camera-retro' => '📷 Camera Retro',
            'fa-video' => '🎥 Video',
            'fa-video-slash' => '🎥 Video Slash',
            'fa-binoculars' => '🔭 Binoculars',
            'fa-search' => '🔍 Search',
            'fa-search-plus' => '🔍 Zoom In',
            'fa-search-minus' => '🔍 Zoom Out',
            'fa-qrcode' => '📱 QR Code',
            'fa-barcode' => '📊 Barcode',
            'fa-fingerprint' => '👆 Fingerprint',

            // === AUDIO ===
            'fa-volume-up' => '🔊 Volume Up',
            'fa-volume-down' => '🔉 Volume Down',
            'fa-volume-off' => '🔇 Volume Off',
            'fa-volume-mute' => '🔇 Volume Mute',
            'fa-headphones' => '🎧 Headphones',
            'fa-headphones-alt' => '🎧 Headphones Alt',
            'fa-headset' => '🎧 Headset',
            'fa-bell' => '🔔 Bell',
            'fa-bell-slash' => '🔕 Bell Slash',

            // === NAVIGATION & LOCATION ===
            'fa-map-marker-alt' => '📍 Location',
            'fa-map-marker' => '📍 Marker',
            'fa-map' => '🗺️ Map',
            'fa-map-signs' => '🗺️ Map Signs',
            'fa-route' => '🛣️ Route',
            'fa-compass' => '🧭 Compass',
            'fa-location-arrow' => '📍 Location Arrow',
            'fa-directions' => '🧭 Directions',
            'fa-street-view' => '🚶 Street View',
            'fa-crosshairs' => '⊕ Crosshairs',

            // === ARROWS & MOVEMENT ===
            'fa-arrows-alt' => '↔️ Arrows All',
            'fa-arrows-alt-h' => '↔️ Arrows Horizontal',
            'fa-arrows-alt-v' => '↕️ Arrows Vertical',
            'fa-expand' => '⤢ Expand',
            'fa-expand-alt' => '⤢ Expand Alt',
            'fa-expand-arrows-alt' => '⤢ Expand Arrows',
            'fa-compress' => '⤡ Compress',
            'fa-compress-alt' => '⤡ Compress Alt',
            'fa-sync' => '🔄 Sync',
            'fa-sync-alt' => '🔄 Sync Alt',
            'fa-redo' => '↻ Redo',
            'fa-undo' => '↺ Undo',
            'fa-exchange-alt' => '⇄ Exchange',
            'fa-random' => '🔀 Random/Shuffle',
            'fa-sort' => '↕️ Sort',

            // === DEVICES ===
            'fa-mobile-alt' => '📱 Mobile',
            'fa-tablet-alt' => '📱 Tablet',
            'fa-laptop' => '💻 Laptop',
            'fa-desktop' => '🖥️ Desktop',
            'fa-tv' => '📺 TV',
            'fa-server' => '🖥️ Server',
            'fa-hdd' => '💽 Hard Drive',
            'fa-keyboard' => '⌨️ Keyboard',
            'fa-mouse' => '🖱️ Mouse',
            'fa-print' => '🖨️ Print',
            'fa-fax' => '📠 Fax',
            'fa-gamepad' => '🎮 Gamepad',

            // === DATA & CLOUD ===
            'fa-database' => '💽 Database',
            'fa-cloud' => '☁️ Cloud',
            'fa-cloud-upload-alt' => '☁️ Cloud Upload',
            'fa-cloud-download-alt' => '☁️ Cloud Download',
            'fa-download' => '⬇️ Download',
            'fa-upload' => '⬆️ Upload',
            'fa-file' => '📄 File',
            'fa-file-alt' => '📄 File Alt',
            'fa-folder' => '📁 Folder',
            'fa-folder-open' => '📂 Folder Open',
            'fa-archive' => '📦 Archive',
            'fa-save' => '💾 Save',

            // === SECURITY ===
            'fa-shield-alt' => '🛡️ Shield',
            'fa-lock' => '🔒 Lock',
            'fa-lock-open' => '🔓 Lock Open',
            'fa-unlock' => '🔓 Unlock',
            'fa-unlock-alt' => '🔓 Unlock Alt',
            'fa-key' => '🔑 Key',
            'fa-user-lock' => '👤 User Lock',
            'fa-user-shield' => '👤 User Shield',
            'fa-user-secret' => '🕵️ User Secret',
            'fa-mask' => '🎭 Mask',
            'fa-ban' => '🚫 Ban',
            'fa-exclamation-triangle' => '⚠️ Warning',
            'fa-radiation' => '☢️ Radiation',
            'fa-biohazard' => '☣️ Biohazard',

            // === STATUS & FEEDBACK ===
            'fa-check' => '✓ Check',
            'fa-check-circle' => '✅ Check Circle',
            'fa-check-square' => '☑️ Check Square',
            'fa-times' => '✕ Times',
            'fa-times-circle' => '❌ Times Circle',
            'fa-exclamation' => '❗ Exclamation',
            'fa-exclamation-circle' => '❗ Exclamation Circle',
            'fa-question' => '❓ Question',
            'fa-question-circle' => '❓ Question Circle',
            'fa-info' => 'ℹ️ Info',
            'fa-info-circle' => 'ℹ️ Info Circle',
            'fa-thumbs-up' => '👍 Thumbs Up',
            'fa-thumbs-down' => '👎 Thumbs Down',

            // === INDUSTRY & WORK ===
            'fa-industry' => '🏭 Industry',
            'fa-warehouse' => '🏭 Warehouse',
            'fa-building' => '🏢 Building',
            'fa-store' => '🏪 Store',
            'fa-store-alt' => '🏪 Store Alt',
            'fa-hotel' => '🏨 Hotel',
            'fa-hospital' => '🏥 Hospital',
            'fa-hospital-alt' => '🏥 Hospital Alt',
            'fa-clinic-medical' => '🏥 Clinic',
            'fa-university' => '🏛️ University',
            'fa-school' => '🏫 School',
            'fa-home' => '🏠 Home',

            // === FOOD & HOSPITALITY ===
            'fa-utensils' => '🍴 Utensils',
            'fa-utensil-spoon' => '🥄 Spoon',
            'fa-coffee' => '☕ Coffee',
            'fa-mug-hot' => '☕ Mug Hot',
            'fa-glass-cheers' => '🥂 Cheers',
            'fa-wine-glass' => '🍷 Wine Glass',
            'fa-beer' => '🍺 Beer',
            'fa-cocktail' => '🍸 Cocktail',
            'fa-pizza-slice' => '🍕 Pizza',
            'fa-hamburger' => '🍔 Hamburger',
            'fa-ice-cream' => '🍦 Ice Cream',
            'fa-cookie' => '🍪 Cookie',
            'fa-apple-alt' => '🍎 Apple',
            'fa-carrot' => '🥕 Carrot',
            'fa-concierge-bell' => '🛎️ Concierge Bell',
            'fa-bed' => '🛏️ Bed',
            'fa-bath' => '🛁 Bath',
            'fa-hot-tub' => '🛁 Hot Tub',
            'fa-spa' => '💆 Spa',
            'fa-swimming-pool' => '🏊 Swimming Pool',

            // === CLEANING ===
            'fa-broom' => '🧹 Broom',
            'fa-spray-can' => '🧴 Spray Can',
            'fa-pump-soap' => '🧴 Soap Pump',
            'fa-soap' => '🧼 Soap',
            'fa-hand-sparkles' => '✨ Clean Hands',
            'fa-hands-wash' => '🧼 Wash Hands',
            'fa-trash' => '🗑️ Trash',
            'fa-trash-alt' => '🗑️ Trash Alt',
            'fa-recycle' => '♻️ Recycle',
            'fa-dumpster' => '🗑️ Dumpster',

            // === DELIVERY & LOGISTICS ===
            'fa-box' => '📦 Box',
            'fa-boxes' => '📦 Boxes',
            'fa-box-open' => '📦 Box Open',
            'fa-cube' => '📦 Cube',
            'fa-cubes' => '📦 Cubes',
            'fa-dolly' => '🛒 Dolly',
            'fa-dolly-flatbed' => '🛒 Flatbed',
            'fa-pallet' => '📦 Pallet',
            'fa-truck' => '🚚 Truck',
            'fa-truck-loading' => '🚚 Truck Loading',
            'fa-truck-moving' => '🚚 Truck Moving',
            'fa-shipping-fast' => '🚚 Fast Shipping',
            'fa-cart-plus' => '🛒 Cart Plus',
            'fa-shopping-cart' => '🛒 Shopping Cart',
            'fa-shopping-basket' => '🛒 Basket',
            'fa-shopping-bag' => '🛍️ Shopping Bag',
            'fa-motorcycle' => '🏍️ Motorcycle',
            'fa-bicycle' => '🚲 Bicycle',
            'fa-car' => '🚗 Car',
            'fa-taxi' => '🚕 Taxi',
            'fa-bus' => '🚌 Bus',
            'fa-plane' => '✈️ Plane',
            'fa-ship' => '🚢 Ship',
            'fa-subway' => '🚇 Subway',
            'fa-train' => '🚆 Train',
            'fa-helicopter' => '🚁 Helicopter',
            'fa-rocket' => '🚀 Rocket',
            'fa-space-shuttle' => '🚀 Space Shuttle',

            // === TOOLS & MAINTENANCE ===
            'fa-tools' => '🔧 Tools',
            'fa-wrench' => '🔧 Wrench',
            'fa-hammer' => '🔨 Hammer',
            'fa-screwdriver' => '🔩 Screwdriver',
            'fa-toolbox' => '🧰 Toolbox',
            'fa-hard-hat' => '⛑️ Hard Hat',
            'fa-cogs' => '⚙️ Gears',
            'fa-cut' => '✂️ Cut',
            'fa-tape' => '📏 Tape',
            'fa-ruler' => '📏 Ruler',
            'fa-ruler-combined' => '📐 Ruler Combined',
            'fa-drafting-compass' => '📐 Compass',
            'fa-paint-brush' => '🖌️ Paint Brush',
            'fa-paint-roller' => '🖌️ Paint Roller',
            'fa-fill-drip' => '💧 Fill Drip',

            // === USERS & PEOPLE ===
            'fa-user' => '👤 User',
            'fa-users' => '👥 Users',
            'fa-user-friends' => '👥 User Friends',
            'fa-user-plus' => '👤 Add User',
            'fa-user-minus' => '👤 Remove User',
            'fa-user-check' => '👤 User Check',
            'fa-user-times' => '👤 User Times',
            'fa-user-edit' => '👤 Edit User',
            'fa-user-cog' => '👤 User Settings',
            'fa-user-tie' => '👔 Business User',
            'fa-user-md' => '👨‍⚕️ Doctor',
            'fa-user-nurse' => '👩‍⚕️ Nurse',
            'fa-user-graduate' => '🎓 Graduate',
            'fa-id-card' => '🪪 ID Card',
            'fa-id-badge' => '🪪 ID Badge',
            'fa-address-book' => '📖 Address Book',
            'fa-address-card' => '📇 Address Card',
            'fa-people-carry' => '👥 People Carry',
            'fa-running' => '🏃 Running',
            'fa-walking' => '🚶 Walking',
            'fa-wheelchair' => '♿ Wheelchair',
            'fa-accessible-icon' => '♿ Accessible',
            'fa-baby' => '👶 Baby',
            'fa-child' => '🧒 Child',
            'fa-male' => '👨 Male',
            'fa-female' => '👩 Female',

            // === COMMUNICATION ===
            'fa-phone' => '📞 Phone',
            'fa-phone-alt' => '📞 Phone Alt',
            'fa-phone-volume' => '📞 Phone Volume',
            'fa-envelope' => '✉️ Envelope',
            'fa-envelope-open' => '✉️ Envelope Open',
            'fa-paper-plane' => '📨 Paper Plane',
            'fa-comment' => '💬 Comment',
            'fa-comments' => '💬 Comments',
            'fa-comment-alt' => '💬 Comment Alt',
            'fa-comment-dots' => '💬 Comment Dots',
            'fa-sms' => '💬 SMS',
            'fa-inbox' => '📥 Inbox',
            'fa-at' => '@ At',
            'fa-hashtag' => '# Hashtag',
            'fa-rss' => '📡 RSS',
            'fa-bullhorn' => '📢 Bullhorn',
            'fa-megaphone' => '📢 Megaphone',

            // === CHARTS & ANALYTICS ===
            'fa-chart-line' => '📈 Line Chart',
            'fa-chart-bar' => '📊 Bar Chart',
            'fa-chart-pie' => '🥧 Pie Chart',
            'fa-chart-area' => '📉 Area Chart',
            'fa-poll' => '📊 Poll',
            'fa-poll-h' => '📊 Poll Horizontal',
            'fa-percentage' => '% Percentage',
            'fa-calculator' => '🧮 Calculator',
            'fa-balance-scale' => '⚖️ Balance Scale',
            'fa-balance-scale-left' => '⚖️ Scale Left',
            'fa-balance-scale-right' => '⚖️ Scale Right',

            // === FAVORITES & RATINGS ===
            'fa-star' => '⭐ Star',
            'fa-star-half-alt' => '⭐ Half Star',
            'fa-heart' => '❤️ Heart',
            'fa-heart-broken' => '💔 Heart Broken',
            'fa-award' => '🏆 Award',
            'fa-trophy' => '🏆 Trophy',
            'fa-medal' => '🏅 Medal',
            'fa-crown' => '👑 Crown',
            'fa-gem' => '💎 Gem',
            'fa-gift' => '🎁 Gift',
            'fa-certificate' => '📜 Certificate',
            'fa-ribbon' => '🎀 Ribbon',

            // === NATURE & WEATHER ===
            'fa-sun' => '☀️ Sun',
            'fa-moon' => '🌙 Moon',
            'fa-cloud-sun' => '⛅ Cloud Sun',
            'fa-cloud-moon' => '🌙 Cloud Moon',
            'fa-cloud-rain' => '🌧️ Rain',
            'fa-cloud-showers-heavy' => '🌧️ Heavy Rain',
            'fa-snowflake' => '❄️ Snowflake',
            'fa-temperature-high' => '🌡️ High Temp',
            'fa-temperature-low' => '🌡️ Low Temp',
            'fa-thermometer' => '🌡️ Thermometer',
            'fa-thermometer-half' => '🌡️ Thermometer Half',
            'fa-leaf' => '🍃 Leaf',
            'fa-tree' => '🌳 Tree',
            'fa-seedling' => '🌱 Seedling',
            'fa-water' => '💧 Water',
            'fa-tint' => '💧 Drop',
            'fa-mountain' => '⛰️ Mountain',
            'fa-globe' => '🌍 Globe',
            'fa-globe-americas' => '🌎 Globe Americas',
            'fa-globe-europe' => '🌍 Globe Europe',
            'fa-globe-asia' => '🌏 Globe Asia',

            // === CREATIVE & MAGIC ===
            'fa-magic' => '✨ Magic',
            'fa-wand-magic' => '✨ Magic Wand',
            'fa-lightbulb' => '💡 Lightbulb',
            'fa-palette' => '🎨 Palette',
            'fa-brush' => '🖌️ Brush',
            'fa-pen' => '🖊️ Pen',
            'fa-pencil-alt' => '✏️ Pencil',
            'fa-highlighter' => '🖍️ Highlighter',
            'fa-marker' => '🖊️ Marker',
            'fa-fill' => '🎨 Fill',
            'fa-eraser' => '🧹 Eraser',
            'fa-crop' => '✂️ Crop',
            'fa-crop-alt' => '✂️ Crop Alt',
            'fa-object-group' => '⬚ Object Group',
            'fa-object-ungroup' => '⬚ Object Ungroup',
            'fa-layer-group' => '📚 Layer Group',
            'fa-clone' => '📋 Clone',
            'fa-copy' => '📋 Copy',
            'fa-paste' => '📋 Paste',

            // === MATH & SYMBOLS ===
            'fa-plus' => '➕ Plus',
            'fa-minus' => '➖ Minus',
            'fa-times' => '✖️ Times',
            'fa-divide' => '➗ Divide',
            'fa-equals' => '🟰 Equals',
            'fa-not-equal' => '≠ Not Equal',
            'fa-greater-than' => '> Greater',
            'fa-less-than' => '< Less',
            'fa-infinity' => '∞ Infinity',
            'fa-square-root-alt' => '√ Square Root',
            'fa-superscript' => 'ⁿ Superscript',
            'fa-subscript' => 'ₙ Subscript',

            // === MEDICAL ===
            'fa-heartbeat' => '💗 Heartbeat',
            'fa-stethoscope' => '🩺 Stethoscope',
            'fa-syringe' => '💉 Syringe',
            'fa-pills' => '💊 Pills',
            'fa-capsules' => '💊 Capsules',
            'fa-tablets' => '💊 Tablets',
            'fa-prescription' => '📋 Prescription',
            'fa-prescription-bottle' => '💊 Prescription Bottle',
            'fa-first-aid' => '🩹 First Aid',
            'fa-band-aid' => '🩹 Band Aid',
            'fa-ambulance' => '🚑 Ambulance',
            'fa-procedures' => '🏥 Procedures',
            'fa-x-ray' => '🩻 X-Ray',
            'fa-dna' => '🧬 DNA',
            'fa-virus' => '🦠 Virus',
            'fa-bacteria' => '🦠 Bacteria',
            'fa-lungs' => '🫁 Lungs',
            'fa-lungs-virus' => '🫁 Lungs Virus',

            // === MISCELLANEOUS ===
            'fa-flag' => '🚩 Flag',
            'fa-flag-checkered' => '🏁 Checkered Flag',
            'fa-bookmark' => '🔖 Bookmark',
            'fa-tags' => '🏷️ Tags',
            'fa-tag' => '🏷️ Tag',
            'fa-ticket-alt' => '🎫 Ticket',
            'fa-receipt' => '🧾 Receipt',
            'fa-clipboard' => '📋 Clipboard',
            'fa-clipboard-check' => '📋 Clipboard Check',
            'fa-clipboard-list' => '📋 Clipboard List',
            'fa-list' => '📝 List',
            'fa-list-alt' => '📝 List Alt',
            'fa-list-ol' => '📝 Ordered List',
            'fa-list-ul' => '📝 Unordered List',
            'fa-tasks' => '✅ Tasks',
            'fa-th' => '⊞ Grid',
            'fa-th-large' => '⊞ Large Grid',
            'fa-th-list' => '☰ List View',
            'fa-table' => '📊 Table',
            'fa-columns' => '📐 Columns',
            'fa-stream' => '☰ Stream',
            'fa-grip-horizontal' => '⋮⋮ Grip Horizontal',
            'fa-grip-vertical' => '⋮⋮ Grip Vertical',
            'fa-ellipsis-h' => '⋯ Ellipsis Horizontal',
            'fa-ellipsis-v' => '⋮ Ellipsis Vertical',
            'fa-bars' => '☰ Menu Bars',
            'fa-times' => '✕ Close',
            'fa-window-close' => '❌ Window Close',
            'fa-window-maximize' => '⬜ Maximize',
            'fa-window-minimize' => '▬ Minimize',
            'fa-window-restore' => '⧉ Restore',
            'fa-external-link-alt' => '↗️ External Link',
            'fa-sign-in-alt' => '➡️ Sign In',
            'fa-sign-out-alt' => '⬅️ Sign Out',
            'fa-door-open' => '🚪 Door Open',
            'fa-door-closed' => '🚪 Door Closed',
        ];
    }
}

