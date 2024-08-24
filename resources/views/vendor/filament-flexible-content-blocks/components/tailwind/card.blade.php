@php
    /* @var \Statikbe\FilamentFlexibleContentBlocks\Filament\Form\Fields\Blocks\Data\CardData $card */
@endphp

<div class="relative transition duration-300 ease-out bg-gray-200 overflow-hidden border rounded-md shadow-md group @if($isFullyClickable()) hover:bg-gray-50 @endif">
    @if(!$slot->isEmpty())
        {{-- Image slot --}}
        {{ $slot }}
    @elseif($card->hasImage())
        @if($card->imageHtml)
            {!! $card->imageHtml !!}
        @elseif($card->imageUrl)
            <img src="{{ $card->imageUrl }}" class="w-full"
                @if($card->title)alt="{{Statikbe\FilamentFlexibleContentBlocks\FilamentFlexibleContentBlocks::replaceParameters($card->title)}}"@endif/>
        @endif
    @endif

    <div class="p-4 sm:p-6">
        @if($card->title)
            <h3>
                @if($getTitleUrl())<a href="{{$getTitleUrl()}}">@endif
                    {{ $card->title }}
                @if($getTitleUrl())</a>@endif
            </h3>
        @endif

        @if($card->text)
            <div>{!! Statikbe\FilamentFlexibleContentBlocks\FilamentFlexibleContentBlocks::replaceParameters($card->text) !!}</div>
        @endif

        @if($card->callToActions)
            <div class="flex flex-wrap gap-4 mt-4">
                @foreach($card->callToActions as $callToAction)
                    <x-flexible-call-to-action :data="$callToAction" :isFullyClickable="$isFullyClickable()"></x-flexible-call-to-action>
                @endforeach
            </div>
        @endif
    </div>
</div>
