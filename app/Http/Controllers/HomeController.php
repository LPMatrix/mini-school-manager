<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	$students = Student::all();
    	// dd($students);
    	return view('dashboard', compact('students'));
    }

    public function attendance(){
    	return view('attendance');
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request){
    	Student::create($request->all());
    	return redirect()->back()->with(['message' => 'Student added successfully', 'type' => 'success']);
    }
}
