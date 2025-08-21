<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SMK Skill Village Islamic School')</title>
    <meta name="description" content="@yield('meta_description', 'Pesantren Integratif Holistik SMK Skill Village Islamic School, rumah pendidikan akhlakul karimah untuk calon pemimpin, pengusaha, profesional yang alim dan terampil teknologi di masa depan.')">

    <link href="{{ asset('favicon.ico') }}" loading="lazy" rel="shortcut icon" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main>
        @yield('guest')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js" defer></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16494916172"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16494916172');
    </script>
    @stack('scripts')
</body>

</html>
