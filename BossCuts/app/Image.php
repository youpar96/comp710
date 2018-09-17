<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'img_id',
        'img_path',
        'img_visible',
        'img_carousel',
        'img_video_ind',
        'img_st_id'
    ];
}
