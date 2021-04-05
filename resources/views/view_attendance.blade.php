@extends('layouts.web')

@section('content')
 <!-- MAIN -->
 <main class="main2">
      <div class="main2-cont">
       <h1 class="main2-heading">Attendance</h1>
           <div class="table2">
            <form action="{{route('filter_attendance')}}" method="post">
              @csrf
               <input type="date" name="date" class="table2-input">
               <button class="add" type="submit">Filter Attendance</button>
            </form>
            <table style="width: 100%">
                 <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Class</th>
                      <th scope="col">Action</th>
                 </tr>
                  @csrf
                 @foreach($attendance as $student)
                 <tr>
                      <td>{{$student->name}}</td>
                      <td>{{$student->class}}</td>
                      <td>@if(count($student->attendance) != 0)
                            Present 
                          @else
                            Absent
                          @endif
                      </td>
                 </tr>
                 @endforeach
            </table>
           </div>
      </div>
 </main>
@endsection