<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramMajors extends Model
{
    protected $table = 'program_majors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading_1',
        'heading_2',
        'text',
        'text_2',
        'step_1',
        'step_2',
        'step_3',
        'button_text',
        'created_at',
        'updated_at'
    ];

    public function index($type=0)
    {
        $result = self::with('programMajorList')->where('type', $type)->latest()->take(1)->get();
        return $result;
    }

    public function getSinglePage($id=false)
    {
        $result = self::with('programMajorList')->where('id', $id)->first();
        return $result;
    }

    /*
     * Fetch all program major list data for program majors page
     * @return \Illuminate\Http\Response
     */
    public function programMajorList()
    {
        return $this->hasMany('App\ProgramMajorList', 'program_id', 'id');
    }
}
