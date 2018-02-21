<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminEmail extends Model
{
    protected $table = 'admin_emails';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'status',
        'created_at',
        'updated_at'
    ];
}
