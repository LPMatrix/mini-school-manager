@extends('layouts.web')

@section('content')

   <main class="main1">
        <div class="main1-cont">
              <h2 class="welcome">welcome admin</h2>
              <h1 class="main1-heading">students</h1>
              {{-- <a class="add" href="{{route('create_student_view')}}">Add New Student</a> --}}
              <div class="table1">
                <form method="post" action="{{route('store_student')}}">
                  @csrf
                <div class="edit-cont">
                   <input type="text" class="edit-input" placeholder="Name" name="name" value="{{ old('name') }}">
                   <select type="text" class="edit-input" placeholder="Class" name="class">
                    <option value="Primary 1">Primary 1</option>
                    <option value="Primary 2">Primary 2</option>
                    <option value="Primary 3">Primary 3</option>
                    <option value="Primary 4">Primary 4</option>
                    <option value="Primary 5">Primary 5</option>
                    <option value="Primary 6">Primary 6</option>
                  </select>
                   <input type="number" class="edit-input" placeholder="Age" name="age" value="{{ old('age') }}">
                   @error('age')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                   <input type="date" class="edit-input" name="dob" value="{{ old('dob') }}">
                   @error('dob')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                   <input type="text" class="edit-input" placeholder="Address" name="address" value="{{ old('address') }}">
                   @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                   <input type="tel" class="edit-input" placeholder="Guardian number" name="telephone" value="{{ old('telephone') }}">
                   @error('telephone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                   <button class="update" type="submit">Add</button>
                </div>
                </form>
              </div>
        </div>
   </main>
@endsection