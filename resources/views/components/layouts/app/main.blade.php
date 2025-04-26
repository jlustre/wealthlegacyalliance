<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

@include('partials.head')

<body class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
    <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
        @include('partials.left-sidebar')
        @include('partials.page-topbar')
        @include('partials.cart-side-panel')

        <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

            {{ $slot }}

            @include('partials.main-footer')
            <!-- end Footer -->
        </div>
    </div>
    <!-- end main content -->
    @include('partials.right-sidebar')
    @include('partials.back-to-top')
    @include('partials.main-scripts')

    @fluxScripts
</body>
</html>
