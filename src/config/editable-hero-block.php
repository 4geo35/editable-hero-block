<?php

return [
    "availableTypes" => [
        "hero" => [
            "title" => env("EDITABLE_HERO_BLOCK_TITLE", "УТП"),
            "admin" => "ehb-hero",
            "render" => "ehb::types.hero",
        ],
    ],

    "expandRender" => [
        "expandHeroBlockRecord" => [
            "class" => \GIS\EditableHeroBlock\Facades\HeroBlockRenderActions::class,
            "method" => "expandHeroBlockRecord",
        ],
    ],
    // Admin
    "customHeroBlockRecordModel" => null,
    "customHeroBlockRecordModelObserver" => null,

    // Manager
    "customBlockRenderActionsManager" => null,

    // Components
    "customHeroComponent" => null,
];
