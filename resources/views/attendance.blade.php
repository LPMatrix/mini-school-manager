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
                 <tr>
                      <td><input type="text" class="table2-input" placeholder="Name"></td>
                      <td><input type="text" class="table2-input" placeholder="Class"></td>
                      <td><input type="number" class="table2-input a" placeholder="Age"></td>
                      <td><input type="checkbox" class="check-box"></td>
                 </tr>
                 
            </table>
           </div>
      </div>
 </main>
@endsection