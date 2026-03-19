@props(["item", "useH1"])
@php($hasImage = $item->recordable->image_id)
<div class="min-h-screen relative py-indent-double flex flex-col justify-center w-full">
    @include("ehb::web.types.hero.includes.bg-image")
    <div class="container relative z-10 mt-indent-double">
        <div class="row">
            <div class="col w-full text-light">
                @include("ehb::web.types.hero.includes.title")
                @include("ehb::web.types.hero.includes.description")
                @include("ehb::web.types.hero.includes.form")
            </div>
        </div>
    </div>
</div>
