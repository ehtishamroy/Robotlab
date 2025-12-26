<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoryListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(): iterable
    {
        return [
            'categories' => Category::latest()->paginate(15),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Blog Categories';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Manage blog categories';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Category')
                ->modal('categoryModal')
                ->method('save')
                ->icon('plus'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('categories', [
                TD::make('id', 'ID')
                    ->sort()
                    ->width('80px'),

                TD::make('name', 'Name')
                    ->sort(),

                TD::make('slug', 'Slug')
                    ->sort(),

                TD::make('created_at', 'Created')
                    ->sort()
                    ->render(function (Category $category) {
                        return $category->created_at->format('M d, Y');
                    }),

                TD::make('Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('150px')
                    ->render(function (Category $category) {
                        return Button::make('')
                            ->icon('trash')
                            ->confirm('Are you sure you want to delete this category?')
                            ->method('remove', ['category' => $category->id]);
                    }),
            ]),

            Layout::modal('categoryModal', Layout::rows([
                Input::make('category.name')
                    ->title('Name')
                    ->placeholder('Enter category name')
                    ->required(),

                Input::make('category.slug')
                    ->title('Slug')
                    ->placeholder('Auto-generated if left empty')
                    ->help('URL-friendly version of the name'),
            ]))
                ->title('Add Category')
                ->applyButton('Save'),
        ];
    }

    /**
     * Save a new category.
     */
    public function save(Request $request)
    {
        $data = $request->get('category');

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        Category::create($data);

        Toast::info('Category created successfully.');
    }

    /**
     * Delete a category.
     */
    public function remove(Request $request)
    {
        Category::findOrFail($request->get('category'))->delete();

        Toast::info('Category deleted.');
    }
}
