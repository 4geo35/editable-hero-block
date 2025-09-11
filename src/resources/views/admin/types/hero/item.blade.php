@php($hasImage = $item->recordable->image_id)
<div class="min-h-screen relative py-indent-double flex flex-col justify-center w-full">
    @if ($hasImage)
        @php($fileName = $item->recordable->image->file_name)
        <div class="absolute top-0 bottom-0 w-full z-0 overflow-hidden">
            <img src="{{ route('thumb-img', ['template' => 'original', 'filename' => $fileName]) }}" alt=""
                 class="h-full w-full object-cover object-top relative z-0 brightness-50 blur-[.05rem]">
        </div>
    @endif
    <div class="relative z-10 mt-indent-double mx-indent text-light">
        @if ($item->title)
            <h1 class="font-medium text-5xl sm:text-7xl mb-indent w-full lg:w-2/3 2xl:w-1/2">
                {{ $item->title }}
            </h1>
        @endif
        @if ($item->recordable->description)
            <div class="w-full sm:w-4/5 md:w-2/3 lg:w-1/2 xl:w-2/5 2xl:w-1/3 mb-indent-lg block">
                <div class="prose prose-lg prose-p:leading-6 !text-light max-w-none">
                    {!! $item->recordable->markdown !!}
                </div>
            </div>
        @endif
        @if ($item->recordable->form)
            <button type="button" class="btn btn-light w-full sm:w-auto">
                {{ $item->recordable->button_text ?? "Оставить заявку" }}
            </button>
        @endif
    </div>
</div>
