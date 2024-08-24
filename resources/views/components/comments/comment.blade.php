@props(['comment', 'post'])

@if ($comment->status === 1)
    <div id="comment-{{ $comment->id }}" class="ml-4">
        <div class="flex flex-row gap-2 text-sm font-semibold">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img class="object-cover border border-purple-700 rounded-full h-9 w-9" src="{{ $comment->user->profile_photo_url }}"
                    alt="{{ $comment->user->name }}" />
            @else
                <div>{{ __('User') }}: </div>
            @endif
            <div class="flex flex-col text-xs h-9">
                <div>
                    {{ $comment->user->name }}
                </div>
                <div>
                    {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('dddd, D MMMM YYYY') }}
                </div>
            </div>
        </div>

        <div class="px-4 ml-4 mr-0 text-justify">{{ $comment->content }}</div>

        @auth
            <div x-data="{ formVisible: false }">
                <x-button x-show="!formVisible" class="my-4 text-xs" type="button" @click="formVisible = true">{{ __('Reply') }}</x-button>
                <x-comments.comment-form :comment="$comment" :post="$post" />
            </div>
        @endauth

        <div class="w-full mt-2 mb-2 border-b-2 border-slate-200"></div>

        @foreach ($comment->children as $childComment)
            <x-comments.comment :comment="$childComment" :post="$post" />
        @endforeach
    </div>
@endif
