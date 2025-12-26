<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Blog;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class BlogListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     */
    public function query(): iterable
    {
        return [
            'blogs' => Blog::with('category')->latest()->paginate(15),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Blog Posts';
    }

    /**
     * The description is displayed on the user's screen under the heading.
     */
    public function description(): ?string
    {
        return 'Manage your blog posts';
    }

    /**
     * The screen's action buttons.
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create New')
                ->icon('plus')
                ->route('platform.blog.create'),
        ];
    }

    /**
     * The screen's layout elements.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('blogs', [
                TD::make('id', 'ID')
                    ->sort()
                    ->width('80px'),

                TD::make('title', 'Title')
                    ->sort()
                    ->render(function (Blog $blog) {
                        return Link::make($blog->title)
                            ->route('platform.blog.edit', ['blog' => $blog->id]);
                    }),

                TD::make('author', 'Author')
                    ->sort(),

                TD::make('category', 'Category')
                    ->render(function (Blog $blog) {
                        return $blog->category ? $blog->category->name : '-';
                    }),

                TD::make('is_published', 'Status')
                    ->render(function (Blog $blog) {
                        return $blog->is_published
                            ? '<span class="badge bg-success">Published</span>'
                            : '<span class="badge bg-secondary">Draft</span>';
                    }),

                TD::make('published_at', 'Published At')
                    ->sort()
                    ->render(function (Blog $blog) {
                        return $blog->published_at ? $blog->published_at->format('M d, Y') : '-';
                    }),

                TD::make('Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Blog $blog) {
                        return Link::make('')
                            ->icon('pencil')
                            ->route('platform.blog.edit', ['blog' => $blog->id]);
                    }),
            ]),
        ];
    }
}
