<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Media;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\Image\Manipulations;

class Projet extends Model implements HasMediaConversions
{
    use HasMediaTrait;
    protected $fillable = ['title', 'description', 'deadline', 'img_url'];
    
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion("thumb")
            ->keepOriginalImageFormat()
            ->crop(Manipulations::CROP_CENTER, 150, 150);
    }
}
