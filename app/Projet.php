<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Media;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;

class Projet extends Model implements HasMediaConversions
{
    use HasMediaTrait;
    protected $fillable = ['title', 'description', 'deadline', 'img_url'];
    
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion("thumb")
            ->width(128)
            ->height(128)
            ->keepOriginalImageFormat();
    }
}
