<?php

namespace GIS\EditableHeroBlock\Observers;


use GIS\EditableHeroBlock\Interfaces\HeroBlockRecordInterface;

class HeroBlockRecordObserver
{
    public function updated(HeroBlockRecordInterface $record): void
    {
        $item = $record->item;
        if (! $item) { return;}
        $item->touch();
    }
}
