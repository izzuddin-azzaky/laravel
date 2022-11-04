@extends('layout.main')

@section('container')
<article>
   <h2>{{ $post->title }}</h2>
   <h5>{{ $post->author }}</h5>

   <p>By. sandhika galih in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
   {!! $post->body !!}

</article>

<a href="/blog" class="d-block mt-3">back to posts</a>
@endsection