@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @if ($block->render_title)
        @if ($isFullPage)
            <div class="container">
                <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
            </div>
        @else
            <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
        @endif
    @endif
    <div {{ $attributes->merge(["class" => "flex flex-col gap-indent"]) }}>
        @foreach($block->items as $item)
            @if ($isFullPage) <x-ehb::types.hero.item :$item />
            @else <x-ehb::types.hero.two-third :$item />
            @endif
        @endforeach
    </div>
@endif
