<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/template/home">Home</a></li>
            <li><a href="/template/about">About</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <h3>Footer</h3>
    </footer>
</body>
</html>

