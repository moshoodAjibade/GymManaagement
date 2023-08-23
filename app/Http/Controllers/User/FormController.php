<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\User;
class FormController extends Controller
{
    public function index()
    {
     
        return view('form');
    }
    public function save(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'mobile_number' => 'required|unique:users'
        ]);
        $data = $request->all();
        $check = User::create($data);
        return Redirect::to("form")->withSuccess('Great! Form successfully submit with validation.');
    }
}