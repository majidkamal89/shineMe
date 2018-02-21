<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'heading_1',
        'heading_2',
        'text',
        'image',
        'type',
        'alt',
        'title',
        'created_at',
        'updated_at'
    ];
}
