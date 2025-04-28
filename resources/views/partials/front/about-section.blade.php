<!-- Start About -->
<section class="relative md:py-24 py-16" id="about">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
            <div class="md:col-span-6">
                <div class="lg:me-8">
                    <div class="relative">
                        <img src="{{ asset('assets/front/images/about.jpg') }}" class="rounded-full shadow dark:shadow-gray-700" alt="">

                        <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto size-56 flex justify-center items-center bg-white dark:bg-slate-900 rounded-full shadow dark:shadow-gray-700">
                            <div class="text-center">
                                <span class="font-semibold block text-2xl text-green-500">Unlock Your<br>Untapped Wealth<br>Potential</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6">
                <div class="lg:ms-8">
                    <h2 class="text-muted dark:text-slate-100 text-3xl mb-4">About Us</h2>
                    <h6 class="text-green-500 text-sm font-semibold uppercase mb-2">{{ __('Who We Are?') }}</h6>
                    <h3 class="dark:text-white semibold text-2xl leading-normal mb-4">{{ __('Building Your Legacy, Together') }}</h3>

                    <p class="text-slate-400 max-w-xl mb-6">{{ __('At Wealth Legacy Alliance, we are more than just a network; we are a collaborative ecosystem meticulously designed around the powerful principle of shared success within the Multi-Level Marketing landscape. We envision a unified space where the potential of numerous thriving MLM companies converges, empowering your team-building efforts to resonate across diverse income streams, all within a supportive community deeply invested in your financial advancement.') }}</p>

                    <a href="javascript:void(0)" data-modal-open="aboutModal" class="cursor-pointer h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-green-500 text-white">
                        Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i>
                    </a>
                    @guest
                      <a href="{{ route('register') }}" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-yellow-500 text-white">Get Started</a>
                    @endguest
                </div>
            </div>
        </div>
    </div><!--end container-->
</div>
<!-- Modal -->
    <div id="aboutModal" class="hidden mt-4 lg:fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" data-modal>
        <div class="bg-slate-100 dark:bg-slate-900 border border-slate-200 rounded-lg shadow-lg p-8 mx-3 lg:w-2/3 relative">
            <button data-modal-close class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('The Vision: Beyond Individual Achievement') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Our core mission is to empower our members to achieve true financial freedom and construct enduring wealth – a genuine legacy – that transcends individual success, creating a positive ripple effect for families and communities. We recognized both the significant potential and the inherent limitations of operating independently within a single MLM company. The persistent need for repeated recruitment and the vulnerability associated with relying on a singular entity spurred us to innovate and forge a superior path.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Our Solution: Unifying Opportunity and Effort') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Wealth Legacy Alliance stands as the solution to these traditional challenges. We are a carefully selected and dynamic community that strategically forges partnerships with a diverse portfolio of reputable and successful MLM companies spanning various industries. This deliberate diversification provides our members with multiple distinct avenues for income generation, a robust shield against market volatility, and access to an expanded spectrum of products and customer bases.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('The Difference: Strategic Unity') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("What truly distinguishes us is our unified and streamlined approach. We've simplified the often-intricate world of MLM by establishing a system where your foundational investment in recruiting new members yields benefits across our entire network of partner companies. Imagine the power: you cultivate your core team once, and as Wealth Legacy Alliance expands its partnerships, your existing network unlocks new earning potentials without the constant need for redundant recruitment for each new venture.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Our Strength: A Supportive Community') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Beyond the clear strategic advantages, we are a vibrant and deeply supportive community. We firmly believe that the journey towards financial independence is best undertaken collaboratively. Within Wealth Legacy Alliance, you'll discover a culture rooted in collaboration, not competition. We actively encourage the sharing of knowledge, successful strategies, and the celebration of collective achievements. We are committed to providing the essential tools, comprehensive training, and experienced mentorship required to navigate the specific nuances of each partner MLM effectively, ensuring that your efforts are not just energetic, but strategically directed towards proven pathways to success.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Our Identity: Building Legacies, Together') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("In essence, Wealth Legacy Alliance serves as a vital bridge – connecting ambitious individuals with a diverse array of promising opportunities, fostering a robust and empowering network of mutual support, and significantly simplifying the complex path towards building a truly diversified and enduring financial legacy. We are a collective, united by a shared vision of empowerment and collective prosperity, and we warmly invite you to join us in the meaningful endeavor of building that lasting legacy, together.") }}
            </p>
        </div>
    </div>
</section><!--end section-->
<!-- End About -->

