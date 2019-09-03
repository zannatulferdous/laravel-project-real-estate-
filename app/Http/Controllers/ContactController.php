<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function saveContact(Request $request){
        $this->validate($request,[
            'customer_full_name'=>'required',
            'customer_email' =>'required',
            'customer_message_subject'=>'required',
            'customer_message'=>'required'
        ]);

        $contact =new Contact();
        $contact->customer_full_name=$request->customer_full_name;
        $contact->customer_email=$request->customer_email;
        $contact->customer_message_subject=$request->customer_message_subject;
        $contact->customer_message=$request->customer_message;
        $contact->save();
        return redirect('/contact')->with('message','Your Message send Successfully');
    }

    public function manageContact(){
        $contacts= Contact::all();
        return view('admin.contact.manage-contact',
            ['contacts'=>$contacts]);

    }
    public function deleteContact($id){
        $contact=Contact::find($id);
        $contact->delete();
        return redirect('/manage/contact')->with('message','Contact Deleted Successfully');
    }
}

