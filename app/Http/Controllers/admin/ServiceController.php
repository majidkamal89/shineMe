<?php

namespace App\Http\Controllers\admin;

use App\Pages;
use App\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
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
        $rules = [
            'heading_1' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'message' => $validator->errors()->first()]);
        }
        try {
            $page_sequence = Pages::where('id', $request->page_id)->first(['page_sequence']);
            $dataArray = [
                'heading_1' => $request->heading_1,
                'heading_2' => $request->heading_2,
                'description' => $request->description,
                'detail_description' => $request->detail_description,
                'title' => $request->title,
                'alt' => $request->alt,
                'page_id' => $request->page_id,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ];
            if (!empty($request->id)) {
                $banner_image = $request->old_image;
                if($request->file('image')){
                    $file = array('image' => $request->file('image'));
                    $destinationPath = base_path('public/front_end/img/service/'); // upload path
                    $extension = $file['image']->getClientOriginalExtension(); // getting image extension
                    $fileName = str_random(10).'-service.'.$extension; // renameing image
                    $file['image']->move($destinationPath, $fileName); // uploading file to given path
                    $banner_image = 'front_end/img/service/'.$fileName;
                    if(file_exists(base_path('public/').$request->old_image)){
                        unlink(base_path('public/').$request->old_image);
                    }
                }
                $dataArray['banner_image'] = $banner_image;
                $save = Services::where('id', $request->id)->update($dataArray);
                return response()->json(['status' => 1, 'message' => 'Record updated successfully']);
            } else {
                $banner_image = 'front_end/img/testim-baner.jpg';
                if($request->file('image')){
                    $file = array('image' => $request->file('image'));
                    $destinationPath = base_path('public/front_end/img/service/'); // upload path
                    $extension = $file['image']->getClientOriginalExtension(); // getting image extension
                    $fileName = str_random(10).'-service.'.$extension; // renameing image
                    $file['image']->move($destinationPath, $fileName); // uploading file to given path
                    $banner_image = 'front_end/img/service/'.$fileName;
                }
                $dataArray['banner_image'] = $banner_image;
                $save = Services::insert($dataArray);
                return response()->json(['status' => 1, 'message' => 'Record inserted successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong, please try again later']);
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
        $service_data = Services::where('page_id', $id)->orderBy('id', 'DESC')->get();
        $page_obj->services = $service_data;
        $page_obj->id = $id;
        $page_data = collect([$page_obj]);
        return response()->json(view('admin.tables.services', compact('page_data'))->render());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::find($id);
        $delete_service = Services::where('id', $id)->delete();
        if (!empty($service->banner_image)) {
            if (file_exists(base_path('public/') . $service->banner_image)) {
                unlink(base_path('public/') . $service->banner_image);
            }
        }
        return response()->json(['status' => 1, 'message' => 'Record deleted successfully.']);
    }
}
