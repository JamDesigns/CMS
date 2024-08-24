<x-blog-layout>
    <x-slot name='title'>
        {{ $post->title }}
    </x-slot>

    <x-post.item :post="$post" :show="true"/>

    <div class="mt-4 flex flex-col sm:flex-row gap-4">
        <div class="flex-1">
            @if ($previousPost != null)
            <a href="{{ route('posts.show', $previousPost) }}">
                <div class="flex-auto bg-gray-100 rounded-md shadow p-4">
                    <div class="py-1">{{ __('Previous post') }}</div>
                    <div class="py-1">{{ $previousPost->title }}</div>
                </div>
            </a>
            @endif
        </div>
        <div class="flex-1">
            @if ($nextPost != null)
            <a href="{{ route('posts.show', $nextPost) }}">
                <div class="flex-auto bg-gray-100 rounded-md shadow text-right p-4">
                    <div class="py-1">{{ __('Next post') }}</div>
                    <div class="py-1">{{ $nextPost->title }}</div>
                </div>
            </a>
            @endif
        </div>
    </div>

    <div class="py-2 px-4 mb-4 bg-gray-100 border rounded-md shadow-md overflow-hidden">
        <div class="flex flex-col gap-2">
            <h1 class="px-4">{{ __('Comments') }}</h1>

            @auth
                <div class="px-4 text-sm">{{ __('Comments are reviewed before being published.') }}</div>
            @else
                <div class="px-4 font-bold text-sm text-indigo-600">{{ __('You must be registered to comment.') }}</div>
                <a class="px-4 py-2 border border-transparent rounded uppercase text-sm text-white text-center bg-indigo-500 hover:bg-indigo-800"
                    href="{{ route('login') }}">{{ __('Login to post comments') }}</a>
            @endauth
        </div>
        <div class="mt-2 mb-2 w-full border-b-2 border-slate-100"></div>

        @auth
            <div x-data="{ formVisible: true }">
                <x-comments.comment-form :comment="null" :post="$post"/>
            </div>
        @endauth

        @foreach ($comments as $comment)
            <x-comments.comment :comment="$comment" :post="$post" />
        @endforeach

    </div>
</x-blog-layout>
