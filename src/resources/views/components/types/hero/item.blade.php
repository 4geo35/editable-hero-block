@props(["item", "useH1", "minHClass"])
@php($hasImage = $item->recordable->image_id)
<div class="{{ $minHClass }} relative py-indent-double flex flex-col justify-center w-full">
    @include("ehb::web.types.hero.includes.bg-image")
    <div class="container relative z-10 my-indent-double">
        <div class="row">
            <div class="col w-full xl:w-9/12 2xl:w-7/12 text-white">
                @include("ehb::web.types.hero.includes.title")
                @include("ehb::web.types.hero.includes.description")
                @include("ehb::web.types.hero.includes.form")
                @includeIf("ebtns::web.render-buttons", ["blockItem" => $item])
            </div>
        </div>
    </div>
</div>
