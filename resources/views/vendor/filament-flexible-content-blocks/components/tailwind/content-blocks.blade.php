<div class="w-full">
    @if(is_array($contentBlocks))
        @foreach($contentBlocks ?? [] as $block)
            <div class="section--{{ isset($block->data()['backgroundColourType']) ?? 'default' }}">
                {{
                    $block->withAttributes($attributes->getAttributes())
                        ->render()
                        ->with($block->data())
                }}
            </div>
        @endforeach
    @endif
</div>
