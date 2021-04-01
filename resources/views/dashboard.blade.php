@extends('layouts.web')

@section('content')

   <main class="main1">
        <div class="main1-cont">
              <h2 class="welcome">welcome admin</h2>
              <h1 class="main1-heading">students</h1>
              <a class="add" href="{{route('create_student_view')}}">Add New Student</a>
              <div class="table1">
                   <table>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Age</th>
                        <th scope="col">D.O.B</th>
                        <th scope="col">Address</th>
                        <th scope="col">Guardian num</th>
                        <th scope="col">Action</th>
                        </tr>
                        @foreach($students as $student)
                        <tr>
                             <td>{{$student->name}}</td>
                             <td>{{$student->class}}</td>
                             <td>{{$student->age}}</td>
                             <td>{{$student->dob}}</td>
                             <td>{{$student->address}}</td>
                             <td>{{$student->telephone}}</td>
                             <td>
                                  <div class="e-d-cont">
                                       <button class="edit">E</button>
                                       <form action="{{route('delete_student', $student->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                       <button class="delete" type="submit">D</button>
                                     </form>
                                  </div>
                             </td>
                        </tr>
                        @endforeach
                   </table>
              </div>
        </div>
   </main>

    <!-- POPUP -->
    <section id="edit-section">
         <div class="edit-popup">
              <div class="close-icon">
               <div class="close">&times;</div>
              </div>
          <div class="edit-cont">
               <input type="text" class="edit-input" placeholder="Name">
               <input type="text" class="edit-input" placeholder="Class">
               <input type="number" class="edit-input" placeholder="Age">
               <input type="date" class="edit-input">
               <input type="text" class="edit-input" placeholder="Address">
               <input type="tel" class="edit-input" placeholder="Guardian num">
               <button class="update">update</button>
          </div>
         </div>
    </section>
@endsection