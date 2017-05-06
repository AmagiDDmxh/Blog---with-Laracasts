<div class="blog-post">
  <h2 class="blog-post-title">
    <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
    </a>
  </h2>
  <div class="blog-post-meta">
    {{ $post->user->name }} on
    {{ $post->created_at->timezone('Asia/Shanghai')->toDayDateTimeString() }}
  </div>

  {{ $post->body }}

</div>

