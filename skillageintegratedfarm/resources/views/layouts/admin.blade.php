<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Admin - SMK Skill Village Islamic School')</title>
    <link href="{{ asset('favicon.ico') }}" loading="lazy" rel="shortcut icon" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.1.1/tinymce.min.js"
        integrity="sha512-bAtLCmEwg+N9nr6iVELr/SlDxBlyoF0iVdPxAvcOCfUiyi6RcuS6Lzawi78iPbAfbNyIUftvwK9HPWd+3p975Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-800">

    {{-- Header --}}
    @include('partials.header')

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        @include('partials.sidebar')

        <x-dashboard.sidebar.backdrop />
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                @yield('admin')
            </main>
        </div>
        <script>
            tinymce.init({
                    selector: 'textarea#content',
                    plugins: 'code table lists advlist autolink link image charmap print preview hr anchor pagebreak',
                    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
                  });
        </script>
        <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16494916172"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'AW-16494916172');
        </script>
        @stack('scripts')


        
</body>

</html>