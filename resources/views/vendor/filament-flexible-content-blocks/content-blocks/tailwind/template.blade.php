@if($template)
    <div class="section section--default">
        <div class="container mx-auto py-4">
            @include($template, ['record' => $record])
        </div>
    </div>
@endif
