@if ($item->recordable->form)
    @php
        $componentName = \GIS\RequestForm\Facades\FormActions::getComponentByKey($item->recordable->form);
        $prefix = $postfix = "block-{$item->block->id}";
        $double = "block-item-{$item->id}";
    @endphp

    <button type="button" class="btn btn-light w-full sm:w-auto"
            x-data="{}"
            @click.stop="$dispatch('show-request-form', { key: '{{ $item->recordable->form }}', place : 'Блок {{ $item->block->render_title ? $item->block->render_title : $item->block->title }}, {{ $item->title }}', double: '{{ $double }}'})">
        {{ $item->recordable->button_text ?? "Оставить заявку" }}
    </button>

    @push("modals")
        <livewire:dynamic-component :component="$componentName" :modal="true"
                                    :prefix="$prefix" :postfix="$postfix" :double="$double" />
    @endpush
@endif
