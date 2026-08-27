@if ($item->recordable->description)
    <div class="prose md:prose-lg prose-p:leading-6 !text-white max-w-none mb-indent-lg">
        {!! $item->recordable->markdown !!}
    </div>
@endif
