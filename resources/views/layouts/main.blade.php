<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Санитарная и экологическая безопасность - ООО "Природные ресурсы"' }}</title>
    <meta name="description" content="{{ $description ?? 'Санитарная и экологическая безопасность - Природные ресурсы' }}" />
    <link rel="stylesheet" href="/public/build/assets/app-DPM9veCC.css">
    <!-- @vite(["resources/css/app.css", "resources/js/app.js"]) -->
</head>

<body>

    <header class="header">
        <div class="container py-3">
            @include('includes.nav')

            <br>

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </header>

    <main class="main">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <div class="container py-5">
            @include('includes.footer')
        </div>
    </footer>

    <script src="/public/build/assets/app-Dsp2-2yT.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
</body>

</html>
