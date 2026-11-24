@extends('layout.main')

@section('title', 'Test title from view')

@section('content')
<h1>{{ $title }}</h1>
@endsection