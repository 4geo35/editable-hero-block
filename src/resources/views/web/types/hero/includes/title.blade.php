@if ($item->title)
    @if ($useH1)
        <h1 class="font-medium text-5xl sm:text-7xl mb-indent w-full lg:w-2/3 2xl:w-1/2">
            {{ $item->title }}
        </h1>
    @else
        <div class="font-medium text-5xl sm:text-7xl mb-indent w-full lg:w-2/3 2xl:w-1/2">
            {{ $item->title }}
        </div>
    @endif
@endif
