<?php
namespace App\Http\Controllers\admin;

use App\AdminEmail;
use App\ContactUs;
use App\EmailTemplate;
use \App\Http\Controllers\Controller;

use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->contactUs = new ContactUs();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email_template = EmailTemplate::where('template_type', 0)->orderBy('id', 'DESC')->get();
        $admin_email = AdminEmail::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.index', compact('email_template','admin_email'));
    }

    /*
     * Function to send response email to contact us queries
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendResponseEmail($id, Request $request)
    {
        $user_email = ContactUs::where('id', $id)->first(['email','subject']);
        $email_template = EmailTemplate::where('template_type', 0)->first();
        if(!empty($email_template)){
            if($this->contactUs->sendEmail($user_email->email,$request->email_message, $email_template->subject) == 1){
                ContactUs::where('id', $id)->update(['status' => 1]);
                return response()->json(['status' => 1, 'message' => 'Email sent successfully']);
            }
            return response()->json(['status' => 0, 'message' => 'Message could not be sent.']);
        }
        if($this->contactUs->sendEmail($user_email->email,$request->email_message, 'Shine me') == 1){
            ContactUs::where('id', $id)->update(['status' => 1]);
            return response()->json(['status' => 1, 'message' => 'Email sent successfully']);
        }
        return response()->json(['status' => 0, 'message' => 'Message could not be sent.']);
    }

    /*
     * List all contact us record
     * @return \Illuminate\Http\Response
     */
    public function loadContactUs()
    {
        $page_obj = new Pages();
        $contact_data = ContactUs::orderBy('id', 'DESC')->get();
        $page_obj->contact_us = $contact_data;
        $page_data = collect([$page_obj]);
        return response()->json(view('admin.tables.contact_us', compact('page_data'))->render());
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
            'subject' => 'required',
            'message' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'message' => $validator->errors()->first()]);
        }
        try {
            $dataArray = [
                'subject' => $request->subject,
                'message' => str_replace('"', '', $request->message),
                'template_type' => 0,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ];
            if (!empty($request->temp_id)) {
                $save = EmailTemplate::where('id', $request->temp_id)->update($dataArray);
                return response()->json(['status' => 1, 'message' => 'Record updated successfully']);
            } else {
                $save = EmailTemplate::insert($dataArray);
                return response()->json(['status' => 1, 'message' => 'Record inserted successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong, please try again later']);
        }
    }

    /*
     * List all Email templates
     * @return \Illuminate\Http\Response
     */
    public function loadEmailTemplate()
    {
        $email_template = EmailTemplate::orderBy('id', 'DESC')->get();
        return response()->json(view('admin.tables.email_template', compact('email_template'))->render());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_contact = ContactUs::where('id', $id)->delete();
        return response()->json(['status' => 1, 'message' => 'Record deleted successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteEmailTemplate($id)
    {
        $delete_template = EmailTemplate::where('id', $id)->delete();
        return response()->json(['status' => 1, 'message' => 'Record deleted successfully.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveAdminEmail(Request $request)
    {
        $rules = [
            'email' => 'required|email'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'message' => $validator->errors()->first()]);
        }
        try {
            $dataArray = [
                'email' => $request->email,
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ];
            if (!empty($request->admin_id)) {
                $save = AdminEmail::where('id', $request->admin_id)->update($dataArray);
                return response()->json(['status' => 1, 'message' => 'Record updated successfully']);
            } else {
                $save = AdminEmail::insert($dataArray);
                return response()->json(['status' => 1, 'message' => 'Record inserted successfully']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'message' => 'Something went wrong, please try again later']);
        }
    }

    /*
     * List all Admin Emails
     * @return \Illuminate\Http\Response
     */
    public function loadAdminEmail()
    {
        $admin_email = AdminEmail::orderBy('id', 'DESC')->get();
        return response()->json(view('admin.tables.admin_email', compact('admin_email'))->render());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAdminEmail($id)
    {
        $delete_email = AdminEmail::where('id', $id)->delete();
        return response()->json(['status' => 1, 'message' => 'Record deleted successfully.']);
    }
}
