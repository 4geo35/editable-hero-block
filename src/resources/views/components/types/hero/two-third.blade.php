@props(["item"])
@php($hasImage = $item->recordable->image_id)
<div class="min-h-screen relative py-indent-double flex flex-col justify-center w-full">
    @include("ehb::web.types.hero.includes.bg-image")
    <div class="relative z-10 mt-indent-double mx-indent text-light">
        @include("ehb::web.types.hero.includes.title")
        @include("ehb::web.types.hero.includes.description")
        @include("ehb::web.types.hero.includes.form")
    </div>
</div>
