<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body>

    <header class="lh-1 py-3">
        <div class="container">

            @include('includes.nav')

        </div>
    </header>

    <main class="container">

        @yield('content')

    </main>

    @include('includes.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
</body>

</html>