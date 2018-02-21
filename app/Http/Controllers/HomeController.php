<?php

namespace App\Http\Controllers;

use App\NewsEvents;
use App\Services;
use Illuminate\Http\Request;
use App\Pages;
use App\Slider;
use App\ProgramMajors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->pages = new Pages();
        $this->program = new ProgramMajors();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = $this->pages->index(false);
        if(!empty($pages[0])){
            $about_us = $pages->where('page_sequence', 1)->values();
            $general_message = $pages->where('page_sequence', 2)->values();
            $services = $pages->where('page_sequence', 4)->values();
            $news_events = $pages->where('page_sequence', 5)->values();
            $slider_data = Slider::where('type', 0)->orderBy('id', 'DESC')->get();
            $major_program = ProgramMajors::where('type', 0)->latest()->take(1)->get();
            $major_program = $this->convertToArray($major_program);
            return view('index', compact('about_us','general_message','services','news_events','slider_data','major_program'))->with('page_data', $pages);
        } else {
            abort('404');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page_data = $this->pages->index($slug);
        $major_program = [];
        if(!empty($page_data[0])){
            if($page_data[0]->future_major == 1){
                $major_program = ProgramMajors::where('type', 1)->latest()->take(1)->get();
                $major_program = $this->convertToArray($major_program);
            }
            if($page_data[0]->future_major_program == 1){
                $major_program = ProgramMajors::where('type', 0)->latest()->take(1)->get();
                $major_program = $this->convertToArray($major_program);
            }

            $file_name = ($page_data[0]->file_name == 'index') ? $page_data[0]->file_name:'pages.'.$page_data[0]->file_name;
            return view($file_name, compact('page_data','major_program'));
        } else {
            if(in_array($slug, ['login','dashboard'])){
                if(Auth::check()){
                    return view('admin.index');
                }
                return view('auth.login');
            }
            abort('404');
        }
    }

    /**
     * Show page detail for single record.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailPage($slug, $id)
    {
        $page_data = $this->pages->index($slug);
        if(!empty($page_data[0]) && ($page_data[0]->page_sequence == 5)){
            $news_detail = NewsEvents::where('id', $id)->first();
            return view('pages.news-events-inner', compact('page_data','news_detail'));
        }
        $service_detail = Services::where('id', $id)->first();
        return view('pages.services-inner', compact('page_data','service_detail'));
    }

    /**
     * Show the Program Major list for the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listAllMajors($id)
    {
        $category_data = $this->program->getSinglePage($id);
        $page_data = Pages::where('page_sequence', 2)->first(['slug','page_name','meta_description','meta_keywords','meta_property','robots']);
        if(!empty($category_data) && !empty($page_data)){
            $category_data->page_name = $page_data->page_name;
            $category_data->slug = $page_data->slug;
            $category_data->meta_description = $page_data->meta_description;
            $category_data->meta_keywords = $page_data->meta_keywords;
            $category_data->meta_property = $page_data->meta_property;
            $category_data->robots = $page_data->robots;
            $step_array = [];
            for($i=1;$i<4;$i++){
                $field = 'step_'.$i;
                if(!empty($category_data->$field)){
                    array_push($step_array, $category_data->$field);
                }
            }
            $category_data->step = $step_array;

            return view('pages.knowledge-category', compact('category_data'));
        }
        abort('404');
    }

    /**
     * Display category detail for the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listSingleCategory($id)
    {
        $category_data = DB::table('program_majors')
            ->select('program_majors.type','program_majors.heading_2 as text1',
                'program_majors.text as text2','program_majors.text_2 as text3','program_majors.step_1',
                'program_majors.step_2','program_majors.step_3','program_major_lists.*')
            ->join('program_major_lists', 'program_majors.id', '=', 'program_major_lists.program_id')
            ->where('program_major_lists.id', $id)
            ->first();
        $page_data = Pages::where('page_sequence', 2)
            ->first(['slug','page_name','meta_description','meta_keywords','meta_property','robots']);
        if(!empty($category_data) && !empty($page_data)){
            $category_data->page_name = $page_data->page_name;
            $category_data->slug = $page_data->slug;
            $category_data->meta_description = $page_data->meta_description;
            $category_data->meta_keywords = $page_data->meta_keywords;
            $category_data->meta_property = $page_data->meta_property;
            $category_data->robots = $page_data->robots;
            $step_array = [];
            for($i=1;$i<4;$i++){
                $field = 'step_'.$i;
                if(!empty($category_data->$field)){
                    array_push($step_array, $category_data->$field);
                }
            }
            $category_data->step = $step_array;
            //dd($category_data);

            return view('pages.knowledge-category-business', compact('category_data'));
        }
        abort('404');
    }

    /**
     * Create single array of multiple fields.
     *
     * @param  array  $major_program
     * @return \Illuminate\Http\Response
     */
    public function convertToArray($major_program)
    {
        $step_array = [];
        for($i=1;$i<4;$i++){
            $field = 'step_'.$i;
            if(!empty($major_program[0]->$field)){
                array_push($step_array, $major_program[0]->$field);
            }
        }
        $major_program[0]->step = $step_array;
        return $major_program;
    }
}
