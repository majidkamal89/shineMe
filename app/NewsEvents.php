<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsEvents extends Model
{
    protected $table = 'news_events';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'heading',
        'description',
        'detail_description',
        'banner_image',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'alt',
        'title',
        'created_at',
        'updated_at'
    ];
}
