@extends('layouts.master')

@section('content')
  <div class="col-md-8">
    <h1>Sign In</h1>

    <form action="/login" method="POST">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="email" class="control-label">Email address:</label>
        <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>

      @include('layouts.errors')
    </form>

  </div>
@endsection