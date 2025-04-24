<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden scroll-smooth group" data-mode="light" dir="ltr">

<head>
    @include('partials.head')
    @yield('styles')
</head>

<body class="text-base bg-white text-body font-public dark:text-zink-50 dark:bg-zink-800">


    @include('partials.navbar')

    {{ $slot }}

    @include('partials.footer')

    <button id="back-to-top" class="fixed flex items-center justify-center w-10 h-10 text-white bg-yellow-500 rounded-md bottom-10 right-10">
        <i data-lucide="chevron-up" class="animate-icons"></i>
    </button>

    <script src='assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>
    <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/tippy.js/tippy-bundle.umd.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/lucide/umd/lucide.js"></script>
    <script src="assets/js/tailwick.bundle.js"></script>
    <script src="assets/js/pages/landing-onepage.init.js"></script>
    @yield('scripts')

    @fluxScripts

</body>

</html>
