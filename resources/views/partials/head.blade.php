    <meta charset="utf-8">
    <title>{{ $pagetitle ?? 'Wealth Legacy Alliance - Homepage' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="jclustre">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Icons CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind2.css') }}"/>
    @yield('styles')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @fluxAppearance
