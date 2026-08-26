@php($hasImage = $item->recordable->image_id)
<div class="min-h-screen relative py-indent-double flex flex-col justify-center w-full">
    @if ($hasImage)
        @php($fileName = $item->recordable->image->file_name)
        <div class="absolute top-0 bottom-0 w-full z-0 overflow-hidden">
            <img src="{{ route('thumb-img', ['template' => 'original', 'filename' => $fileName]) }}" alt=""
                 class="h-full w-full object-cover object-top relative z-0 brightness-50 blur-[.05rem]">
        </div>
    @endif
    <div class="relative z-10 my-indent-double">
        <div class="w-full xl:w-9/12 2xl:w-7/12 text-light px-indent-half">
            @if ($item->title)
                <div class="font-semibold text-4xl md:text-5xl mb-indent">
                    {{ $item->title }}
                </div>
            @endif
            @if ($item->recordable->description)
                <div class="prose md:prose-lg prose-p:leading-6 !text-light max-w-none mb-indent-lg">
                    {!! $item->recordable->markdown !!}
                </div>
            @endif
            @if ($item->recordable->form)
                <button type="button" class="btn btn-light w-full xs:w-auto">
                    {{ $item->recordable->button_text ?? "Оставить заявку" }}
                </button>
            @endif
        </div>
    </div>
</div>
