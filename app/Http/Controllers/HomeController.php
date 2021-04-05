<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	$students = Student::all();
    	return view('dashboard', compact('students'));
    }

    public function attendance(){
    	$students = Student::all();
    	return view('attendance', compact('students'));
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request){
    	Student::create($request->all());
    	return redirect()->back()->with(['message' => 'Student added successfully', 'type' => 'success']);
    }

    public function editUser(Student $student){
    	return view('edit', compact('student'));
    }

    public function deleteUser(Request $request, Student $student){
        $student->delete();
        return redirect()->back()->with(['message' => 'Student deleted successfully', 'type' => 'success']);
    }

    public function updateUser(Request $request, Student $student)
    {

        $student->name = $request->name;
        $student->class = $request->class;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->telephone = $request->telephone;
        $student->dob = $request->dob;

        $student->update();

        return redirect()->back()->with(['message'=>'Student updated successfully', 'type' => 'success']);
    }

    public function markAttendance(Request $request){
    	foreach ($request->student as $key => $value) {
    		Attendance::create([
    			'student_id' => $value,
    			'present' => 1
    		]);
    	}
    	return redirect()->back()->with(['message'=>'Attendance marked successfully', 'type' => 'success']);
    }

    public function viewAttendance(){
    	$attendance = Student::with('attendance')->get();
    	return view('view_attendance', compact('attendance'));
    }

    public function filterAttendance(Request $request){
    	$attendance = Student::whereDate('created_at', $request->date)->with('attendance')->get();
    	dd($attendance);
    	return redirect()->route('view_attendance', compact('attendance'));
    }
}
