@extends('layout.main')

@section('content')
<h1>{{ $title }}</h1>
@endsection

@section('navbar')
@parent
<ul>
    <li><a href="#">Login</a></li>
</ul>
@endsection