<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
  <head>
    @include('partials.front.head')
    @yield('styles')
  </head>

  <body class="font-libre_franklin text-base text-black dark:text-white bg-white dark:bg-slate-900">
      @include('partials.front.loader')

      @include('partials.front.navbar')


      {{ $slot }}

      @include('partials.front.footer-section')

      <!-- Back to top -->
      <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 size-9 text-center bg-yellow-500 text-white leading-9"><i class="mdi mdi-arrow-up"></i></a>
      <!-- Back to top -->

      <!-- Switcher -->
      <div class="fixed top-20 mt-4 -right-1 z-3">
          <span class="relative inline-block rotate-90">
              <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
              <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                  <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500 bg-slate-600"></i>
                  <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                  <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
              </label>
          </span>
      </div>
      <!-- Switcher -->

      <!-- LTR & RTL Mode Code -->
      <div class="fixed top-[40%] -right-3 z-50">
          <a href="" id="switchRtl">
              <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium rtl:block ltr:hidden" >LTR</span>
              <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium ltr:block rtl:hidden">RTL</span>
          </a>
      </div>
      <!-- LTR & RTL Mode Code -->

      <!-- JAVASCRIPTS -->
      <script src="{{ asset('assets/front/libs/feather-icons/feather.min.js') }}"></script>
      <script src="{{ asset('assets/front/libs/gumshoejs/gumshoe.polyfills.min.js') }}"></script>
      <script src="{{ asset('assets/front/libs/tobii/js/tobii.min.js') }}"></script>
      <script src="{{ asset('assets/front/libs/tiny-slider/min/tiny-slider.js') }}"></script>
      <script src="{{ asset('assets/front/js/plugins.init.js') }}"></script>
      <script src="{{ asset('assets/front/js/app.js') }}"></script>
      @yield('scripts')

  </body>
</html>
