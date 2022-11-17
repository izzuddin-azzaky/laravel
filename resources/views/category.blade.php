@extends('layout.main')

@section('container')

 <h1 class="mb-5">Post category : {{ $category }}</h1>

 @foreach ($posts as $post)

<article>
   <h2><a href="/posts/{{ $post->category->slug }}">{{ $post->title }}</a>
</h2>

   <h5>{{ $post->author }}</h5>
   <p>{{ $post->excerpt }}</p>
</article>
@endforeach


@endsection 