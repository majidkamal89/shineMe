<?php

namespace App\Http\Controllers\admin;

use App\ContactUs;
use App\Pages;
use App\ProgramMajors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{

    public function __construct()
    {
        $this->pages = new Pages();
        $this->program = new ProgramMajors();
    }

    /**
     * Display a listing of the resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        if($slug == 'home-page'){
            $slug = '/';
        }
        $page_data = $this->pages->index($slug);
        $major_program = $contact_us = [];
        if(!empty($page_data[0])){
            if($page_data[0]->page_sequence == 0){
                $major_program = $this->program->index(0);
            }
            if($page_data[0]->page_sequence == 2){
                $major_program = $this->program->index(1);
            }
            if($page_data[0]->page_sequence == 6){
                $contact_us = ContactUs::orderBy('id', 'DESC')->get();
            }
            $page_data[0]->majors = $major_program;
            $page_data[0]->contact_us = $contact_us;
            return view('admin.pages.main', compact('page_data'));
        }
        return Redirect::route('dashboard.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  int  $sequence
     * @return \Illuminate\Http\Response
     */
    public function show($id,$sequence)
    {
        $page_data = Pages::where('id', $id)->where('page_sequence', $sequence)->get();
        return response()->json(view('admin.tables.main_table', compact('page_data'))->render());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $sequence
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $sequence, Request $request)
    {
        $form_data = Pages::where('id', $id)->where('page_sequence', $sequence)->first()->toArray();
        $request->merge($form_data);
        return view('admin.forms.page_form');
    }

    /**
     * Update the specified resource in storage.
     * @param  int  $id
     * @param  int  $sequence
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, $sequence, Request $request)
    {
        $page_data = Pages::where('id', '<>', $id)
            ->whereRaw("(page_name = '".$request->page_name."' OR slug = '".$request->slug."')")->first();
        if(!empty($page_data)){
            $page_exist = $slut_exist = 'required';
            if($page_data->page_name === $request->page_name){
                $page_exist .= '|unique:pages';
            }
            if($page_data->slug === $request->slug){
                $slut_exist .= '|unique:pages';
            }
            $rules = [
                'page_name' => $page_exist,
                'slug' => $slut_exist
            ];

        } else {
            $rules = [
                'page_name' => 'required',
                'slug' => 'required'
            ];
        }
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return view('admin.forms.page_form')->withInput($request->all())->withErrors($validator);
        }
        try {
            if($sequence == 0){
                if(empty($request->future_major_program)){
                    $request->request->add(['future_major_program' => 0]);}
            }
            if($sequence == 2){
                if(empty($request->future_major)){
                    $request->request->add(['future_major' => 0]);}
            }
            $update = Pages::where('id', $id)->update($request->except(['_token','page_sequence']));
            return response()->json(['status' => 1, 'message' => 'Record updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong, please try again later.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
