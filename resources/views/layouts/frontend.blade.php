<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <title>LuxSpace</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="{{ url('/frontend/images/content/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    {{-- <link rel="stylesheet" href="{{ url('/frontend/css/main.css') }}" /> --}}
    <link rel="icon" href="{{ url('/frontend/images/content/favicon.png') }}" />

    <meta name="theme-color" content="#000" />
    <link rel="icon" href="{{ url('/frontend/favicon.ico') }}">
    <link href="{{ url('/frontend/css/app.minify.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Add your site or application content here -->
    {{-- //TODO component/frontend/navbar --}}
    @include('components.frontend.navbar')

    {{-- //TODO kontent --}}
    @yield('content')

    {{-- //TODO compponent/frontend/footer --}}
    @include('components.frontend.footer')

    <script>
        window.ga = function() {
            ga.q.push(arguments);
        };
        ga.q = [];
        ga.l = +new Date();
        ga("create", "UA-XXXXX-Y", "auto");
        ga("set", "anonymizeIp", true);
        ga("set", "transport", "beacon");
        ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <script src="{{ url('/frontend/js/app.js') }}"></script>
</body>

</html>
