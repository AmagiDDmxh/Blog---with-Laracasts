@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>A place to create the post.</h1>

    <hr>

    <form method="POST" action="/posts">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-default btn-primary btn-block">Publish</button>
      </div>

      @include('layouts.errors')
    </form>
  </div>
@endsection