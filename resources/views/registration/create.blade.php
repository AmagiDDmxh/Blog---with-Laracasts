@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Register</h1>

    <hr>

    <form method="POST" action="/register">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="name" class="control-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
      </div>

      <div class="form-group">
        <label for="email" class="control-label">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password:</label>
        <input type="text" class="form-control" id="password" placeholder="Password" name="password">
      </div>

      <div class="form-group">
        <label for="password_confirmation" class="control-label">Password_confirmation:</label>
        <input type="text" class="form-control" id="password_confirmation" placeholder="Password_confirmation"
               name="password_confirmation">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">login</button>
      </div>


      @include('layouts.errors')
    </form>
  </div>
@endsection
