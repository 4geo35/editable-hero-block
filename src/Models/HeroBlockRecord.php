<?php

namespace GIS\EditableHeroBlock\Models;

use GIS\EditableBlocks\Traits\ShouldBlockItem;
use GIS\EditableHeroBlock\Interfaces\HeroBlockRecordInterface;
use GIS\Fileable\Traits\ShouldImage;
use GIS\TraitsHelpers\Traits\ShouldMarkdown;
use Illuminate\Database\Eloquent\Model;

class HeroBlockRecord extends Model implements HeroBlockRecordInterface
{
    use ShouldBlockItem, ShouldImage, ShouldMarkdown;

    protected $fillable = [
        "description",
        "form",
        "button_text",
    ];
}
