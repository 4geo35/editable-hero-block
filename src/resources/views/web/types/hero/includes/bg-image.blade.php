@if ($hasImage)
    @php($fileName = $item->recordable->image->file_name)
    <div class="absolute top-0 bottom-0 w-full z-0 overflow-hidden">
        <img src="{{ route('thumb-img', ['template' => 'original', 'filename' => $fileName]) }}" alt=""
             class="h-full w-full object-cover object-top relative z-0 brightness-50 blur-[.05rem]">
    </div>
@endif
