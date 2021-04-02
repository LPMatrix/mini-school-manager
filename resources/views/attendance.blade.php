@extends('layouts.web')

@section('content')
 <!-- MAIN -->
 <main class="main2">
      <div class="main2-cont">
       <h1 class="main2-heading">Attendants</h1>
           <div class="table2">
            <table>
                 <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Class</th>
                      <th scope="col">Age</th>
                      <th scope="col">Action</th>
                 </tr>
                 @foreach($students as $student)
                 <tr>
                      <td><input type="text" class="table2-input" placeholder="Name" value="{{$student->name}}"></td>
                      <td><input type="text" class="table2-input" placeholder="Class" value="{{$student->class}}"></td>
                      <td><input type="number" class="table2-input a" placeholder="Age" value="{{$student->age}}"></td>
                      <td><input type="checkbox" class="check-box"></td>
                 </tr>
                 @endforeach
            </table>
           </div>
           <a class="add" href="">Submit Attendance</a>
      </div>
 </main>
@endsection