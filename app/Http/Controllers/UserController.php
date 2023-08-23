<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{   

    
    public function logincreate() {
        return view('user.login');
    }

    // Method to show the contact form
    public function loginstore(Request $request){

        dd($request->all());
        //return view('Authlogin');
    }

    // Method to show the contact form
    public function showForm()
    {
        return view('contact.form');
    }

    // Method to show the contact form
    // Method to handle form submission
    public function submitForm(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'emailid' => 'required|email',
            'message' => 'required',
        ]);
    
        Contact::create([
            'fullname' => $request->input('fullname'),
            'emailid' => $request->input('emailid'),
            'message' => $request->input('message'),
        ]);
        // Add your validation rules here if needed
        //$request->validate([
          //  'name' => 'required',
            //'email' => 'required|email',
            //'message' => 'required',
        //]);

        // Process the form data, save to database, or send an email
        // You can access form data using $request->input('field_name')

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message!');
    }

   
   
}


?>