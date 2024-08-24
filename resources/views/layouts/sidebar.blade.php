<div class="mb-6 py-4 shadow rounded-md">
    <h3 class="text-lg font-semibold px-4">{{ __('Recent Posts') }}</h3>

    @if ($postsRecent && $postsRecent->count() > 0)
        @foreach ($postsRecent as $post)

        @if(array_key_exists('post', request()->route()->originalParameters()) &&
        request()->route()->originalParameters()['post'] === $post->slug)
            <div class="block w-full px-4 py-2 text-start text-sm text-gray-800  border-b-2 border-indigo-500">
                {{ __($post->title) }}
            </div>
        @else
            <a class="block w-full px-4 py-2 text-start text-sm text-gray-800 border-2 border-transparent rounded hover:text-white hover:bg-indigo-800"
                href="{{ route('posts.show', $post) }}">
                {{ __($post->title) }}
            </a>
        @endif

        @endforeach
    @else
        <div class="px-4 py-2">
            {{ __('No posts to show') }}
        </div>
    @endif
</div>

<div class="mb-6 py-4 shadow rounded-md">
    <h3 class="text-lg font-semibold px-4">{{ __('Categories') }}</h3>

    @if ($categories && $categories->count() > 0)
        @foreach ($categories as $category)

            @if(array_key_exists('category', request()->route()->originalParameters()) && request()->route()->originalParameters()['category'] === $category->slug)
                <div class="block w-full px-4 py-2 text-start text-sm text-gray-800  border-b-2 border-indigo-500">
                    {{ __($category->name) }}
                    ({{ $category->posts_count <= 99 ? $category->posts_count : '99+' }})
                </div>
            @else
                <a class="block w-full px-4 py-2 text-start text-sm text-gray-800 border-2 border-transparent rounded hover:text-white hover:bg-indigo-800"
                    href="{{ route('category.show', $category) }}">
                    {{ __($category->name) }}
                    ({{ $category->posts_count <= 99 ? $category->posts_count : '99+' }})
                </a>
            @endif

        @endforeach
    @else
        <div class="px-4 py-2 space-y-2">
            {{ __('No categories to show') }}
        </div>
    @endif
</div>
