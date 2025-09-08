<?php

namespace GIS\EditableHeroBlock\Livewire\Admin\Types;

use GIS\EditableBlocks\Traits\CheckBlockAuthTrait;
use GIS\EditableBlocks\Traits\EditBlockTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class HeroWire extends Component
{
    use WithFileUploads, EditBlockTrait, CheckBlockAuthTrait;
}
