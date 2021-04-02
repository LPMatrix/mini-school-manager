@extends('layouts.web')

@section('content')

   <main class="main1">
        <div class="main1-cont">
              <h2 class="welcome">welcome admin</h2>
              <h1 class="main1-heading">students</h1>
              <a class="add" href="{{route('create_student_view')}}">Add New Student</a>
              <div class="table1">
                   <div class="table1">
                <form method="post" action="{{route('update_student', [$student->id])}}">
                  @csrf
                  @method('PUT')
                <div class="edit-cont">
                   <input type="text" class="edit-input" placeholder="Name" name="name" value="{{ $student->name }}">
                   <select type="text" class="edit-input" placeholder="Class" name="class">
                    <option value="Primary 1" {{ 'Primary 1' == $student->class ? 'selected' : '' }}>Primary 1</option>
                    <option value="Primary 2" {{ 'Primary 2' == $student->class ? 'selected' : '' }}>Primary 2</option>
                    <option value="Primary 3" {{ 'Primary 3' == $student->class ? 'selected' : '' }}>Primary 3</option>
                    <option value="Primary 4" {{ 'Primary 4' == $student->class ? 'selected' : '' }}>Primary 4</option>
                    <option value="Primary 5" {{ 'Primary 5' == $student->class ? 'selected' : '' }}>Primary 5</option>
                    <option value="Primary 6" {{ 'Primary 6' == $student->class ? 'selected' : '' }}>Primary 6</option>
                  </select>
                   <input type="number" class="edit-input" placeholder="Age" name="age" value="{{ $student->age }}">
                   @error('age')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                   <input type="date" class="edit-input" name="dob" value="{{ $student->dob }}">
                   @error('dob')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                   <input type="text" class="edit-input" placeholder="Address" name="address" value="{{ $student->address }}">
                   @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                   <input type="tel" class="edit-input" placeholder="Guardian number" name="telephone" value="{{ $student->telephone }}">
                   @error('telephone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                   <button class="update" type="submit">Update</button>
                </div>
                </form>
              </div>
              </div>
        </div>
   </main>
@endsection