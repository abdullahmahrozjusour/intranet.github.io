<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="jvZjyh1kP6M0LT8pdhUkAL13R15QAm7bkFrCket8">

    <title>Intranet</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/media/images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap" rel="stylesheet">

    <!-- Scripts -->
    <link rel="preload" as="style" href="{{ asset('build/assets/app-0bd249ab.css') }}">
    <link rel="modulepreload" href="{{ asset('build/assets/app-0dfe298d.js') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-0bd249ab.css') }}">
    <script type="module" src="{{ asset('build/assets/app-0dfe298d.js') }}"></script>
    <link href="{{ asset('theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="{{ route('admin.login') }}">
                @include('components.application-logo', [
                    'attributes' => 'class=w-20 h-20 fill-current text-gray-500',
                ])
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @yield('section')
        </div>
    </div>


</body>

</html>
