@props(['post', 'limit' => null, 'isLink' => false, 'show' => false])

<div class="bg-gray-100 rounded-md shadow overflow-hidden">

    {{-- Main image --}}
    @if ($isLink) <a href="{{ route('posts.show', $post) }}"> @endif
        @if (count($post->getMedia()) > 0 )
            <div class="w-full flex main_image">
                {{ $post->getMedia()[0] }}
            </div>
        @endif
    @if ($isLink) </a> @endif

    <div class="py-4 px-6">

        {{-- Post category --}}
        <div class="mb-4">
            <a class="px-2 py-1 text-xs text-gray-100 bg-gray-500 rounded hover:bg-indigo-800" href="{{ route('category.show', $post->category) }}">
                {{ $post->category->name }}
            </a>
        </div>

        {{-- Post title --}}
        @if (!$show)
            <div class="py-2 font-semibold text-3xl mb-2">
                @if ($isLink) <a href="{{ route('posts.show', $post) }}"> @endif
                    {{ $post->title }}
                @if ($isLink) </a> @endif
            </div>
        @endif

        {{-- Post author --}}
        <div class="mb-4">
            <a href="{{ route('posts.user', $post->user) }}">
                <div class="flex items-center text-xs">
                    <div class="flex-shrink-0">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button
                            class="flex text-sm h-10 w-10 rounded-full border-2 border-transparent">
                            <img class="h-9 w-9 rounded-full object-cover" src="{{ $post->user->profile_photo_url }}"
                                alt="{{ $post->name }}" />
                        </button>
                        @else
                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm text-gray-800">
                                {{ $post->user->name }}
                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </span>
                        @endif
                    </div>
                    <div class="ml-3 hover:text-orange-500">
                        <div class="font-bold leading-none">{{ $post->user->name }}</div>
                        <div class="text-gray-500 leading-none">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('dddd, D MMMM YYYY') }}</div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Post body --}}
        <div>
            @if ($limit === null)
                {!! $post->body !!}
            @else
                {!! substr($post->body, 0, $limit) !!}...
            @endif
        </div>

        {{-- Post footer --}}
        @if ($limit != null)
            <div class="text-right text-indigo-700 hover:text-orange-500">
                @if ($isLink) <a href="{{ route('posts.show', $post) }}"> @endif
                    {{ __('Continue reading') }} <span class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></span>
                @if ($isLink) </a> @endif
            </div>
        @endif
    </div>
</div>
