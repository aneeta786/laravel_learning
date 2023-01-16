<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
    	return view('home');
    }

    public function insertdata(Request $request){
    	$validateData = $request->validate([
        'name' => 'required',
        'email' => 'required|unique:employees|max:255',
        'password' => 'required',
        'number' => 'required',
    	]);

    	$employee = new Employee;
    	$employee->name = $request->name;
    	$employee->email = $request->email;
    	$employee->password = $request->password;
    	$employee->file = $request->file;
    	$employee->time = $request->time;
    	$employee->messgae = $request->messgae;
    	$employee->options = $request->options;

    	$employee->save();
          return redirect(route('home'));
    	        //return redirect('home')->with('status', 'Form Data Has Been Inserted');


    }
}

