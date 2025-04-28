<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-64 overflow-hidden" id="home">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute image-wrap -top-[350px] -bottom-[350px] -start-[100px] -end-[100px] min-w-full w-auto min-h-full h-auto overflow-hidden m-auto bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/front/images/bg/1.jpg') }}');"></div>
    </div>
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <div class="text-center">
                <a href="#!" data-type="youtube" data-id="_VE5nvtcoNM" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-red-500 dark:bg-slate-900 text-green-500 dark:text-white">
                    <i class="mdi mdi-play inline-flex items-center justify-center text-white text-5xl"></i>
                </a>
            </div>

            <h4 class="text-white font-semibold lg:leading-normal leading-normal tracking-wide text-4xl lg:text-5xl my-5">{{ __('Diversify Your Income, Simplify Your Approach.') }}</h4>

            <p class="text-white/70 text-lg max-w-xl mx-auto">{{ __('Recruit Once. Benefit Across Multiple Opportunities. ') }}{{ __('Experience the synergy of multiple income streams, unified strategies, and a supportive community at Wealth Legacy Alliance.') }}</p>

            <div class="relative mt-8">
              @auth
                <a href="{{ route('dashboard') }}" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-green-500 text-white">Dashboard</a>
              @else
                <a href="{{ route('register') }}" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-yellow-500 text-white">Get Started</a>
              @endauth
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->

<div class="relative">
    <div class="absolute block w-full h-auto bottom-[25px] z-1 start-0">
        <a href="#about"><i class="mdi mdi-arrow-down absolute top-0 start-0 end-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 h-12 w-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
    </div>

    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->
