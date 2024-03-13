<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Session;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class EnquirysController extends Controller
{
    public function store(Request $request){
       // dd($request->all());
       $data= Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'city' => $request->city,
        ]);
       
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'city' => $request->city,
        ];
        
        
        
        Mail::to('dev@rednirus.com')
        ->send(new SendMailable($data));
        Session::flash('flash_type','success');
        Session::flash('flash_message','Thanku We have successfully registered your Enquiry !!');
        
        
        return view('PublicPages.contactus');
    }

    public function view(){
        return view('Enquiry.view')
            ->with('enquiries',Enquiry::orderBy('id','DESC')->paginate(20));
    }
}
