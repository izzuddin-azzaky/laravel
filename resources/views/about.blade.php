@extends('layout.main')
<link rel="stylesheet" href="about.css">
@section('container')
    <h1>{{ $h1 }}</h1>
<div class="container">
    <img src="penaldo.jpg" alt="" width="200" class="img-thumbnail rounded-circle">
    <h3>{{ $name }}</h3>
</div>
@endsection
