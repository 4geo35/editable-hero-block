<?php

namespace GIS\EditableHeroBlock\Facades;

use GIS\EditableHeroBlock\Helpers\HeroBlockRenderActionsManager;
use GIS\EditableHeroBlock\Interfaces\HeroBlockRecordInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void expandHeroBlockRecord(HeroBlockRecordInterface $record)
 *
 * @see HeroBlockRenderActionsManager
 */
class HeroBlockRenderActions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return "hero-block-render-actions";
    }
}
