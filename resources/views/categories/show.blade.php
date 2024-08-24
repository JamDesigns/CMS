<x-blog-layout>
    <x-slot name='title'>
        {{ __('Category') . " [$category->name]" }}
    </x-slot>

    <!-- Posts grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-4">
        @foreach ($posts as $post)
        <x-post.item :post='$post' :limit=140 :isLink=true />
        @endforeach
    </div>

    <!-- Pagination -->
    @if ($posts->hasPages())
        <div class="flex justify-center mt-8">
            {{ $posts->onEachSide(5)->links() }}
        </div>
    @endif
</x-blog-layout>
