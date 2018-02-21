<?php

namespace App\Http\Controllers;

use App\AdminEmail;
use App\EmailTemplate;
use Illuminate\Http\Request;
use App\ContactUs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{

    public function __construct()
    {
        $this->contact = new ContactUs();
    }

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
     * @param  string  $slug
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($slug, Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:2',
            'message' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }
        try {
            $request->request->add(['created_at' => DB::raw('CURRENT_TIMESTAMP')]);
            $request->request->add(['updated_at' => DB::raw('CURRENT_TIMESTAMP')]);

            $result = ContactUs::insert($request->except(['_token']));

            $email_template = EmailTemplate::where('template_type', 0)->orderBy('id', 'DESC')->first();
            if(!empty($email_template)){
                $this->contact->sendEmail($request->email, $email_template->message, $email_template->subject);
            } else {
                $html = 'Hi '.$request->name;
                $html .= '<br/> Thank you for submitting your request. We will contact you soon.';
                $html .= '<br/><br/>Regards<br/>Shine me';
                $this->contact->sendEmail($request->email, $html, 'Shine me');
            }
            $admin_email = AdminEmail::where('status', 1)->orderBy('id', 'DESC')->first();
            if(!empty($admin_email)){
                $admin_html = 'Hi ';
                $admin_html .= '<br/> You have received a request on (Shine me). Please review and responed.';
                $admin_html .= '<br/><br/>Name: '.$request->name.'<br/>Email: '.$request->email;
                $admin_html .= '<br/>Subject: '.$request->subject.'<br/>Message: '.$request->message;
                $admin_html .= '<br/><br/>Regards<br/>Shine me';
                $this->contact->sendEmail($admin_email->email, $admin_html, 'Contact Us Request');
            }
            return Redirect::back()->with('success', 'Request submitted successfully');
        } catch(\Exception $e) {
            return Redirect::back()->with('error', 'Something went wrong, please try again later');
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
        //
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
        //
    }
}
