<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController\Admin;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\showAppointment;

class AdminController extends Controller
{

    public function addTrainer(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        Admin::create($incomingFields);
        return "Trainer has been registered";
        //return redirect('/');
    }
}