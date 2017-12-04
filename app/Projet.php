<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Projet extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $fillable = ['title', 'description', 'deadline', 'img_url'];
}
