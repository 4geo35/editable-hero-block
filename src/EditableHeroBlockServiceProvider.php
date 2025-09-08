<?php

namespace GIS\EditableHeroBlock;
use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableHeroBlock\Helpers\HeroBlockRenderActionsManager;
use GIS\EditableHeroBlock\Livewire\Admin\Types\HeroWire;
use GIS\EditableHeroBlock\Models\HeroBlockRecord;
use GIS\EditableHeroBlock\Observers\HeroBlockRecordObserver;
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

        $heroRecordClass = config("editable-hero-block.customHeroBlockRecordModel") ?? HeroBlockRecord::class;
        $heroRecordObserverClass = config("editable-hero-block.customHeroBlockRecordModelObserver") ?? HeroBlockRecordObserver::class;
        $heroRecordClass::observe($heroRecordObserverClass);
    }

    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . "/database/migrations");
        $this->mergeConfigFrom(__DIR__ . "/config/editable-hero-block.php", "editable-hero-block");
        $this->initFacades();
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
        $this->expandBlockRender($ehb);
    }

    protected function initFacades(): void
    {
        $this->app->singleton("hero-block-render-actions", function () {
            $managerClass = config("editable-hero-block.customBlockRenderActionsManager") ?? HeroBlockRenderActionsManager::class;
            return new $managerClass;
        });
    }
}
