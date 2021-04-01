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

    public function deleteUser(Request $request, Student $student){
        $student->delete();
        return redirect()->back()->with(['message' => 'Student deleted successfully', 'type' => 'success']);
    }

    public function updateUser(StoreUserRequest $request, Student $student)
    {

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->username = $request->username;
        $user->state = 1;

        $user->update();

        return redirect()->back()->with(['message'=>'Student updated successfully', 'type' => 'success']);
    }
}
