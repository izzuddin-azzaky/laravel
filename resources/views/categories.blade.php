@extends('layout.main')

@section('container')

 <h1 class="mb-5">Post categories</h1>

 @foreach ($categories as $category)

<article>
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>
   
  
</article>
@endforeach


@endsection 