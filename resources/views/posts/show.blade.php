@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>{{ $post->title }}</h1>
    {{ $post->body }}

    <hr>

    <div class="comments">
      <ul class="list-group">
        @foreach($post->comments as $comment)
          <li class="list-group-item list-group-item-text">
            <strong>{{ $comment->created_at->diffForHumans() }}</strong>: &nbsp;
            {{ $comment->body }}
          </li>
        @endforeach
      </ul>
    </div>

    {{-- Add a comment--}}
    <hr>

    <div class="card">
      <div class="card-block">
        <form action="/posts/{{ $post->id }}/comments" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <textarea class="form-control" name="body"
                      placeholder="Your comment here."
                      cols="30" rows="10" required></textarea>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default btn-block btn-primary">Submit</button>
            </div>
          </div>
        </form>

        @include('layouts.errors')
      </div>
    </div>

  </div>
@endsection