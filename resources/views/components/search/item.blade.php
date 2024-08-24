@props(['type', 'searchResult'])

<a href="{{ url($searchResult->url) }}">
    <div class="bg-gray-100 rounded-md shadow mb-2 p-4">
        <div>{{ $searchResult->title }}</div>
        <div>
            @switch($type)
                @case('posts')

                    @break
                @case('pages')

                    @break
                @default

            @endswitch
        </div>
    </div>
</a>
