<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>{{ $title ?? 'Default title from layout' }}</title> -->
    <title>@yield('title', 'Default title')</title>
</head>

<body>
    @section('navbar')
    <nav>
        <ul>
            <li><a href="{{ route('main.index') }}">Home</a></li>
            <li><a href="{{ route('main.test') }}">Test</a></li>
            <li><a href="{{ route('main.contact') }}">Contact</a></li>
        </ul>
    </nav>
    @show

    <div>
        @yield('content')
    </div>

    @include('layout.incs.footer', ['test' => 'Hello from layout'])
</body>

</html>