<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth group" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-mode="dark" data-topbar="dark" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

@include('partials.head')

<body class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
    {{-- @include('partials.preloader') --}}
    {{-- @include('partials.main-header') --}}

    <!-- main content -->
  <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
        @include('partials.left-sidebar')
        @include('partials.page-topbar')
        @include('partials.cart-side-panel')

        <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
          <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <!-- start container-fluid -->
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
              @include('partials.main-header', [
                  'pagetitle' => $pagetitle ?? '',
                  'description' => $description ?? ''
              ])
              {{ $slot }}
            </div>
            <!-- end container-fluid -->
          </div>
        <!-- End Page-content -->
            @include('partials.main-footer')
            <!-- end Footer -->
        </div>
    </div>
    <!-- end main content -->
    @include('partials.right-sidebar')
    @include('partials.back-to-top')
    @include('partials.main-scripts')
    @include('partials.script-modal')
    @yield('scripts')

    <script>
      document.addEventListener('DOMContentLoaded', function () {
          // Only enable on small screens
          function isSmallSidebar() {
              return window.getComputedStyle(document.body).getPropertyValue('--tw-data-sidebar-size') === 'sm'
                  || document.body.classList.contains('group-data-[sidebar-size=sm]');
          }

          document.querySelectorAll('.dropdown-button').forEach(function(btn) {
              btn.addEventListener('click', function(e) {
                  // Only trigger on small screens
                  if (window.innerWidth <= 768) {
                      e.preventDefault();
                      var dropdown = btn.nextElementSibling;
                      if (dropdown && dropdown.classList.contains('dropdown-content')) {
                          dropdown.classList.toggle('hidden');
                      }
                  }
              });
          });
      });
    </script>
    @fluxScripts
</body>
</html>
