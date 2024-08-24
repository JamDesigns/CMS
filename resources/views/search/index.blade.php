<x-app-layout>
    <div class="container mx-auto">
        <h1>
            <div class="flex flex-row items-center justify-center gap-2">
                <div>{{ __('Search') . ': ' }}</div>
                <span class="text-gray-600">{{ $search }}</span>
            </div>
        </h1>

        <div class="flex flex-col gap-4">
            <p class="text-center">
                {{ __('There are') . ' ' . $searchResults->count() . ' ' . ($searchResults->count() === 1 ? __('result') : __('results')) . '.' }}
            </p>

            @if ($searchResults->count() != 0)
                @foreach ($searchResults->groupByType() as $type => $modelSearchResults)
                    <h2>{{ __(\Illuminate\Support\Str::ucfirst($type)) }}</h2>

                    @foreach ($modelSearchResults as $searchResult)
                        <x-search.item :type="$type" :searchResult="$searchResult" />
                    @endforeach

                @endforeach
            @else
                {{ __('No results found for: ') . $search }}
            @endif
        </div>
    </div>
</x-app-layout>
