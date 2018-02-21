<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMediaLinks extends Model
{
    protected $table = 'social_media_links';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link',
        'name',
        'type'
    ];
}
