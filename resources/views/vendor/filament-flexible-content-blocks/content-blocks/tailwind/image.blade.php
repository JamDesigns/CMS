<div class="section {{ $getBackgroundColourClass() }}">
    <div class="container mx-auto py-4">
        <div @class(['w-full', $getImageWidthClass(),
                    '' => $imagePosition === 'left',
                    'mx-auto' => $imagePosition === 'center',
                    'ml-auto' => $imagePosition === 'right'])>
            {{$getImageMedia(attributes: ['alt' => $imageTitle, 'class'=> 'w-full rounded-md', 'loading' => 'lazy'])}}
            @if($imageCopyright)
                <small>&copy; {{$replaceParameters($imageCopyright)}}</small>
            @endif
        </div>
    </div>
</div>
