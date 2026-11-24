@extends('layout.main')

@section('title')
    Home title from view
@endsection

@section('content')
<h1>{{ $title }}</h1>

@for($i = 1; $i <= 10; $i++)
    @if ($i == 5)
        @continue
    @endif
    {{ $i }} <br>
    @if($i == 8)
        @break
    @endif
@endfor

@endsection
