<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'heading_1',
        'heading_2',
        'description',
        'detail_description',
        'banner_image',
        'alt',
        'title',
        'created_at',
        'updated_at'
    ];
}
