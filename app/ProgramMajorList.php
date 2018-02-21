<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramMajorList extends Model
{
    protected $table = 'program_major_lists';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'program_id',
        'heading_1',
        'heading_2',
        'description',
        'title_1',
        'content_1',
        'title_2',
        'content_2',
        'title_3',
        'content_3',
        'banner_image',
        'alt',
        'title',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'created_at',
        'updated_at'
    ];
}
