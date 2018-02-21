<?php

namespace App\Http\Controllers\admin;

use App\Pages;
use App\ProgramMajorList;
use App\ProgramMajors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function create($slug, Request $request)
    {
        if($slug == 'home-page'){
            $program_id = ProgramMajors::where('type', 0)->first(['id']);
            $request->request->add(['program_id' => $program_id->id]);
        } else {
            $program_id = ProgramMajors::where('type', 1)->first(['id']);
            $page_slug = Pages::where('page_sequence', 2)->first(['slug']);
            if($slug != $page_slug->slug){
                return Redirect::route('dashboard.home');
            }
            $request->request->add(['program_id' => $program_id->id]);
        }
        return view('admin.forms.program_list_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function store($slug, Request $request)
    {
        $rules = [
            'heading_1' => 'required|min:3',
            'heading_2' => 'required|min:3',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }
        try{
            if($request->file('new_image')){
                $file = array('image' => $request->file('new_image'));
                $destinationPath = base_path('public/front_end/img/majors/'); // upload path
                $extension = $file['image']->getClientOriginalExtension(); // getting image extension
                $fileName = str_random(10).'-majors.'.$extension; // renameing image
                $file['image']->move($destinationPath, $fileName); // uploading file to given path
                $banner_image = 'front_end/img/majors/'.$fileName;
                if(file_exists(base_path('public/').$request->old_image) && !empty($request->old_image)){
                    unlink(base_path('public/').$request->old_image);
                }
                $request->request->add(['banner_image' => $banner_image]);
            }
            $save = ProgramMajorList::insert($request->except(['_token','old_image','new_image']));
            return Redirect::back()->with('success', 'Record created successfully');
        } catch (\Exception $e) {
            return Redirect::back()->with('error', 'Something went wrong, please try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_obj = new Pages();
        $program_major = ProgramMajors::where('id', $id)->get();
        $page_obj->majors = $program_major;
        $page_data = collect([$page_obj]);
        return response()->json(view('admin.tables.future_major', compact('page_data'))->render());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, $id, Request $request)
    {
        $edit_record = ProgramMajorList::where('id', $id)->first()->toArray();
        if(!empty($edit_record)){
            $edit_record['slug'] = $slug;
            $request->merge($edit_record);
            return view('admin.forms.program_list_form');
        }
        return Redirect::route('dashboard.home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'heading_1' => 'required',
            'button_text' => 'required'
        ];
        $message = [
            'heading_1.required' => 'Title 1 field is required'
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()){
            return response()->json(['status' => 0, 'message' => $validator->errors()->first()]);
        }
        try{
            $update = ProgramMajors::where('id', $id)->update($request->except(['_token']));
            return response()->json(['status' => 1, 'message' => 'Record updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong, please try again later.']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function updateProgramList($slug, $id, Request $request)
    {
        $rules = [
            'heading_1' => 'required|min:3',
            'heading_2' => 'required|min:3',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }
        try{
            if($request->file('new_image')){
                $file = array('image' => $request->file('new_image'));
                $destinationPath = base_path('public/front_end/img/majors/'); // upload path
                $extension = $file['image']->getClientOriginalExtension(); // getting image extension
                $fileName = str_random(10).'-majors.'.$extension; // renameing image
                $file['image']->move($destinationPath, $fileName); // uploading file to given path
                $banner_image = 'front_end/img/majors/'.$fileName;
                if(file_exists(base_path('public/').$request->old_image)){
                    unlink(base_path('public/').$request->old_image);
                }
                $request->request->add(['banner_image' => $banner_image]);
            }
            $update = ProgramMajorList::where('id', $id)->update($request->except(['_token','old_image','new_image']));
            return Redirect::back()->with('success', 'Record updated successfully');
        } catch (\Exception $e) {
            return Redirect::back()->with('error', 'Something went wrong, please try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug,$id)
    {
        $program = ProgramMajorList::find($id);
        $delete = ProgramMajorList::where('id', $id)->delete();
        if (!empty($program->banner_image)) {
            if (file_exists(base_path('public/') . $program->banner_image)) {
                unlink(base_path('public/') . $program->banner_image);
            }
        }
        return Redirect::back()->with('success', 'Record deleted successfully');
    }
}
