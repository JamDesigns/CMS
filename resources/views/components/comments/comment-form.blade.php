@props(['comment', 'post', 'formVisible' => false])

<div class="w-full my-4">
    <form class="w-full" id="formComment-{{ $comment != null ? $comment->id : null }}" x-show="formVisible" class="my-4" action="{{ route('comments.store', $post) }}" method="post">
    {{-- <form id="formComment-{{ $commentid }}" x-show="formVisible" class="my-4" @submit.prevent="formVisible = false" action="{{ route('comments.store') }}" method="post"> --}}
        @csrf

        <input type="hidden" name="parent_id" value="{{ $comment != null ? $comment->id : null }}">
        <input type="hidden" name="post_id" value={{ $post->id }}>
        <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">

        <div class="flex flex-row gap-2 items-start">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img class="h-9 w-9 rounded-full object-cover border border-purple-700" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            @endif

            <div class="w-full">
                <textarea class="w-full border rounded-md bg-gray-50 border-b-slate-700 mb-2" name="content" rows="1" required></textarea>

                <div class="flex flex-row justify-between">
                    <div>
                        <x-button>{{ __('Response') }}</x-button>
                    </div>
                    <div class="{{ $comment === null ? 'hidden' : '' }}">
                        <x-button type="button" @click="formVisible = false">{{ __('Cancel') }}</x-button>
                    </div>
                </div>
        </div>

    </form>
</div>
