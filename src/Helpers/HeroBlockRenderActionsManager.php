<?php

namespace GIS\EditableHeroBlock\Helpers;
use GIS\EditableHeroBlock\Interfaces\HeroBlockRecordInterface;

class HeroBlockRenderActionsManager
{
    public function expandHeroBlockRecord(HeroBlockRecordInterface $record): void
    {
        $record->load("image");
    }
}
