<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function userReg()
    {
        return view('validate.register');
    }

    // Method to show the contact form
    // Method to handle form submission
    public function submitUser(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'membershipplan' => 'required',
            'date' => 'required',

        ]);
    

        Membership::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'membershipplan' => $request->input('membershipplan'),
            'date' => $request->input('date'),
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
