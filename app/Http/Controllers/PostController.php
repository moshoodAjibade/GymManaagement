<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use App\Models\Appointment;
use App\Models\User;
use Auth;

class PostController extends Controller
{

    

    public function contactt(Request $request)
    {
        $data = new contact;
        $data->fullname=$request->fullname;
        $data->emailid=$request->emailid;
        $data->message=$request->message;
        $data->status = "in progress";

        if (Auth::id())    {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with("Hello", 
        "Contact Request successful and you will be notified soon");
    
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->fullname=$request->fullname;
        $data->emailid=$request->emailid;
        $data->phone=$request->phone;
        $data->membershipplan=$request->membershipplan;
        $data->trainertype=$request->trainertype;
        $data->date=$request->date;
        $data->status = "in progress";

        if (Auth::id())    {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with("Hello", 
        "Your Gym Booking Appointment Request 
        is successful and you will be notified soon");
    
    }

    public function viewappointment(){
        if (Auth::id())    {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();
            return view('user.appointment', compact('appoint'));
        }
        
         else{
            return redirect()->back();
         }
    }

    public function cancel_appointment($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();

    }

    // Show Register/Create Form
    public function create() {
        return view('contact');
    }

    // Create New User
    public function contactstore(Request $request) {
        $formFields = $request->validate([
            'fullname' => ['required', 'min:3'],
            'emailid' => ['required', 'emailid'],
            'message' => 'required|confirmed|min:6'
        ]);

        // Hash Password

        // Create User
        $user = Contact::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'message sent and created successfully');
    }
}
