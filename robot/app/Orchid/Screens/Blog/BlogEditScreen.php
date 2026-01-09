<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Relation;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class BlogEditScreen extends Screen
{
    /**
     * @var Blog
     */
    public $blog;

    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(Blog $blog): iterable
    {
        // Load attachments for the blog
        $blog->load('attachment');

        // Convert tags array to comma-separated string for the form
        if ($blog->exists && is_array($blog->tags)) {
            $blog->tags = implode(', ', $blog->tags);
        }

        return [
            'blog' => $blog,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->blog->exists ? 'Edit Blog Post' : 'Create Blog Post';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Create or edit a blog post';
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
                ->confirm('Are you sure you want to delete this blog post?')
                ->canSee($this->blog->exists),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('blog.title')
                    ->title('Title')
                    ->placeholder('Enter blog title')
                    ->required(),

                Input::make('blog.slug')
                    ->title('Slug')
                    ->placeholder('Auto-generated from title if left empty')
                    ->help('URL-friendly version of the title'),

                TextArea::make('blog.excerpt')
                    ->title('Excerpt')
                    ->placeholder('Brief summary of the blog post')
                    ->rows(3),

                Quill::make('blog.content')
                    ->title('Content')
                    ->required(),

                Cropper::make('blog.featured_image')
                    ->title('Featured Image')
                    ->width(1200)
                    ->height(630)
                    ->targetRelativeUrl()
                    ->acceptedFiles('image/jpeg,image/png,image/webp,image/gif')
                    ->help('Recommended size: 1200x630 pixels. Accepts: PNG, JPG, WebP, GIF'),

                Input::make('blog.author')
                    ->title('Author')
                    ->placeholder('Author name'),

                Relation::make('blog.category_id')
                    ->fromModel(Category::class, 'name')
                    ->title('Category')
                    ->empty('Select Category'),

                Input::make('blog.tags')
                    ->title('Tags')
                    ->placeholder('Enter tags separated by commas')
                    ->help('Example: AI, Robotics, Technology'),

                Switcher::make('blog.is_published')
                    ->title('Published')
                    ->sendTrueOrFalse(),

                DateTimer::make('blog.published_at')
                    ->title('Publish Date')
                    ->format('Y-m-d H:i:s')
                    ->allowInput(),
            ]),
        ];
    }

    /**
     * Save the blog post.
     */
    public function save(Blog $blog, Request $request)
    {
        $data = $request->get('blog');

        // Auto-generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Handle tags - convert comma-separated string to array
        if (!empty($data['tags']) && is_string($data['tags'])) {
            $data['tags'] = array_map('trim', explode(',', $data['tags']));
        }

        // Set published_at if publishing for first time
        if (!empty($data['is_published']) && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        $blog->fill($data)->save();

        Toast::info('Blog post saved successfully.');

        return redirect()->route('platform.blog.list');
    }

    /**
     * Delete the blog post.
     */
    public function remove(Blog $blog)
    {
        $blog->delete();

        Toast::info('Blog post deleted.');

        return redirect()->route('platform.blog.list');
    }
}
