<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('iot.partials.head')
</head>

<body class="sb-nav-fixed">
    @include('iot.partials.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('iot.partials.sidebar')
        </div>

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

            @include('iot.partials.footer')
        </div>
    </div>

    @include('iot.partials.scripts')
    @yield('scripts')
</body>
</html>
