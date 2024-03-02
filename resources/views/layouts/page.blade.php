<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(["resources/css/bootstrap.css", "resources/css/app.css", "resources/css/font-awesome.css", "resources/js/bootstrap.bundle.js", "resources/js/app.js", "resources/js/menu.js",])
</head>

<body>

    <header class="border-bottom lh-1 py-3">
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