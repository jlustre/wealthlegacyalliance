<section class="relative md:py-24 py-16 md:pt-0 pt-0" id="video">
    <div class="container relative">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative z-1">
                <div class="grid grid-cols-1 md:text-start text-center justify-center mt-10">
                    <div class="relative">
                        <img src="{{ asset('assets/front/images/home.png') }}" alt="">
                        <div class="absolute top-1/4 translate-y-2/4 start-0 end-0 text-center">
                            <a href="#!" data-type="youtube" data-id="5lE_4cOTvh0"
                                class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-red-500 dark:bg-slate-900 text-green-500 dark:text-white">
                                <i class="mdi mdi-play inline-flex items-center text-white justify-center text-5xl"></i>
                            </a>
                        </div>
                    </div>
                    @guest
                      <div class="relative mt-8 text-center">
                        <a href="{{ route('register') }}" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-yellow-500 text-white">Get Started</a>
                      </div>
                    @endguest

                </div>
                <div class="container md:mt-8">
                    <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <h6 class="text-white/70 text-sm font-semibold uppercase">Get Free Trial</h6>
                                        <h3 class="font-semibold text-2xl leading-normal text-white mt-2">Get An Easy Start <br> With Upcover Now</h3>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="section-title text-md-start">
                                        <p class="text-white/70 max-w-xl mx-auto mb-2">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                                        <a href="" class="text-white">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row -->
    </div><!--end container-->

    <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-green-400 to-green-500"></div>
</section><!--end section-->
<!-- End -->
