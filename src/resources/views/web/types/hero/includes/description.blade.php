@if ($item->recordable->description)
    <div class="w-full sm:w-4/5 md:w-2/3 lg:w-1/2 xl:w-2/5 2xl:w-1/3 mb-indent-lg block">
        <div class="prose prose-lg prose-p:leading-6 !text-light max-w-none">
            {!! $item->recordable->markdown !!}
        </div>
    </div>
@endif
