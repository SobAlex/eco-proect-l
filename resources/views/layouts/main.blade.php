<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    @vite(["resources/css/bootstrap.css", "resources/css/app.css", "resources/css/font-awesome.css", "resources/js/bootstrap.js", "resources/js/bootstrap.bundle.js", "resources/js/app.js", "resources/js/menu.js",])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
