@extends('layout.main')

@section('container')
<article>


   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">

             {{-- <h2>{{ $post->title }}</h2> --}}
         <h1 class="mb-3">{{ $post->title }}</h1>

         {{-- <p>By. sandhika galih in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p> --}}
         <p>by. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"
            class="text-decoration-none">{{ $post->category->name }}</a></p>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{
             $post->category->name }}" class="img-fluid">


         <article class="my-3 fs-5">
           {!! $post->body !!}
         </article>

         <a href="/blog" class="d-block mt-3">back to posts</a>
         </div>
      </div>
   </div>
   

</article>


@endsection