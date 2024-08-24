@if($content)
    <div class="section {{ $getBackgroundColourClass() }}">
        <div class="container mx-auto py-4">
            <div class="w-full px-2 sm:px-0">
                @if($title)
                    <h2 class="text-center">{{$replaceParameters($title)}}</h2>
                @endif
                {!! $replaceParameters($content) !!}
            </div>
        </div>
    </div>
@endif
