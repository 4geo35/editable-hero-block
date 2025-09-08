<?php

namespace GIS\EditableHeroBlock;
use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableHeroBlock\Livewire\Admin\Types\HeroWire;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableHeroBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait;

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "ehb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-hero-block.php", "editable-hero-block");
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-hero-block.customHeroComponent");
        Livewire::component(
            "ehb-hero",
            $component ?? HeroWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $ehb = app()->config["editable-hero-block"];
        $this->expandBlocks($ehb);
    }
}
