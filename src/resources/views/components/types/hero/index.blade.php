@props(["block", "isFullPage" => true, "useH1" => false])
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
            @php($useH1 = $useH1 && $loop->first)
            @if ($isFullPage) <x-ehb::types.hero.item :$item :$useH1 />
            @else <x-ehb::types.hero.two-third :$item :$useH1 />
            @endif
        @endforeach
    </div>
@endif
