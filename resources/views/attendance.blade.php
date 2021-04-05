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
                      <th scope="col">Action</th>
                 </tr>
                 <form method="post" action="{{route('students_attendance')}}">
                  @csrf
                 @foreach($students as $student)
                 <tr>
                      <td><input type="text" class="table2-input" placeholder="Name" value="{{$student->name}}"></td>
                      <td><input type="text" class="table2-input" placeholder="Class" value="{{$student->class}}"></td>
                      <td><input type="checkbox" class="check-box" name="student[]" value="{{$student->id}}"></td>
                 </tr>
                 @endforeach
            </table>
           </div>
           <button class="add" type="submit">Submit Attendance</button>
           </form>
      </div>
 </main>
@endsection