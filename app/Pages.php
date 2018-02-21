<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_name',
        'slug',
        'title_1',
        'content_1',
        'title_2',
        'content_2',
        'title_3',
        'content_3',
        'title_4',
        'content_4',
        'company_address',
        'contact_us_form',
        'page_sequence',
        'file_name',
        'meta_description',
        'meta_keywords',
        'meta_property',
        'robots',
        'status',
        'created_at',
        'updated_at'
    ];

    /*
     * List all pages
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug=false)
    {
        $query = 'status = 1';
        $query .= (!empty($slug)) ? " AND slug = '".$slug."'":'';
        $result = self::with('services','newsEvents','slider')->whereRaw($query)->get();
        return $result;
    }

    /*
     * Fetch all services data for services page
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return $this->hasMany('App\Services', 'page_id', 'id')->orderBy('id', 'DESC');
    }

    /*
     * Fetch all news data for news page
     * @return \Illuminate\Http\Response
     */
    public function newsEvents()
    {
        return $this->hasMany('App\NewsEvents', 'page_id', 'id')->orderBy('id', 'DESC');
    }

    /*
     * Fetch all slider data for news page
     * @return \Illuminate\Http\Response
     */
    public function slider()
    {
        return $this->hasMany('App\Slider', 'page_id', 'id')->orderBy('id', 'DESC');
    }

    /*
     * Fetch About Us and Contact Us data for footer
     * @return \Illuminate\Http\Response
     */
    public function getFooterContent()
    {
        $footer_data = self::whereIn('page_sequence', ['1','6'])
            ->get(['page_name','content_1','content_2','content_3','content_4','page_sequence']);
        return $footer_data;
    }
}
