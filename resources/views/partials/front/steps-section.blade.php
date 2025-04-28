<!-- Start Process -->
<section class="realtive md:py-24 py-16" id="steps">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-6 text-center">
            <h2 class="text-muted dark:text-slate-100 text-3xl mb-4">Steps To Get Started: Start Building Wealth, Together</h2>

            <p class="text-slate-400 max-w-3xl mx-auto">Ready to diversify your income and build lasting wealth? Discover the simple steps to join Wealth Legacy Alliance and start your journey with a supportive community and a unique system for leveraging multiple MLM opportunities.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-4 md:col-span-5">
                <div class="sticky top-20">
                    <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full hover:text-green-500 duration-500" id="step-1" data-tabs-target="#stepone" type="button" role="tab" aria-controls="profile" aria-selected="true">
                                <span class="block">Step 1</span>
                                <span class="text-lg mt-2 block font-bold">Explore Our Site and Register</span>
                                <span class="block text-sm mt-2">Explore WLA's collaborative wealth model and diverse opportunities. Ready to build together? Register now for FREE to join our empowering community.</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-6 duration-500" id="step-2" data-tabs-target="#steptwo" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                                <span class="block">Step 2</span>
                                <span class="text-lg mt-2 block font-bold">Access and Learn the System</span>
                                <span class="block text-sm mt-2">We offer flexible and comprehensive online marketing plans</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-6 duration-500" id="step-3" data-tabs-target="#stepthree" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                <span class="block">Step 3</span>
                                <span class="text-lg mt-2 block font-bold">Connect and Engage with WLA Community</span>
                                <span class="block text-sm mt-2">Connect with fellow members, ask questions, and leverage the collective knowledge and support available.</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button class="px-4 py-2 text-start text-base font-medium rounded-md w-full mt-6 duration-500" id="step-4" data-tabs-target="#stepfour" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                <span class="block">Step 4</span>
                                <span class="text-lg mt-2 block font-bold">Build Your Network and Track Progress</span>
                                <span class="block text-sm mt-2">Begin implementing our strategies to build your core team. Utilize our tracking tools to monitor your progress</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-7">
                <div id="myTabContent" class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <div class="" id="stepone" role="tabpanel" aria-labelledby="step-1">
                        <img src="{{ asset('assets/front/images/blog/01.jpg') }}" class="shadow dark:shadow-gray-700 rounded-md" alt="">

                        <div class="mt-6">
                            <h5 class="text-lg font-bold text-green-500">Step 1: Explore Our Site and Register</h5>
                            <p class="text-slate-400 mt-4">Begin your journey with Wealth Legacy Alliance by taking the time to explore our website. Immerse yourself in our unique model of collaborative wealth building through strategic MLM partnerships. Understand the power of our "recruit once, benefit across all" system and the strength of our supportive community. When you're ready to unlock your potential and join a collective dedicated to your financial success, simply navigate to our registration page and complete the straightforward sign-up process. This first step connects you directly to a world of diverse opportunities and a network ready to support your growth.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" data-modal-open="step1Modal" class="cursor-pointer h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-green-500 text-white">
                                    Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i>
                                </a>
                                @guest
                                    <a href="{{ route('register') }}" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-yellow-500 text-white">Get Started</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                    <div class="hidden " id="steptwo" role="tabpanel" aria-labelledby="step-2">
                        <img src="{{ asset('assets/front/images/blog/02.jpg') }}" class="shadow dark:shadow-gray-700 rounded-md" alt="">

                        <div class="mt-6">
                            <h5 class="text-lg font-bold text-green-500">Step 2: Access and Learn the System</h5>
                            <p class="text-slate-400 mt-4">Once inside Wealth Legacy Alliance, your next crucial step is to access and thoroughly learn our powerful system. Explore your member dashboard, your central hub for navigating our collaborative world. Delve into the details of our diverse partner MLM opportunities, understanding their unique offerings and earning structures. Crucially, immerse yourself in our comprehensive training resources, designed to equip you with the unified strategies and proven techniques for success across all our ventures. This step is about empowering yourself with the knowledge and tools to thrive within the WLA ecosystem.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" data-modal-open="step2Modal" class="cursor-pointer h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-green-500 text-white">
                                    Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden " id="stepthree" role="tabpanel" aria-labelledby="step-3">
                        <img src="{{ asset('assets/front/images/blog/03.jpg') }}" class="shadow dark:shadow-gray-700 rounded-md" alt="">

                        <div class="mt-6">
                            <h5 class="text-lg font-bold text-green-500">Step 3: Connect and Engage with WLA Community</h5>
                            <p class="text-slate-400 mt-4">Become an active part of the Wealth Legacy Alliance by connecting with our vibrant community. Introduce yourself, share your aspirations, and tap into the collective wisdom of like-minded individuals on the same journey. Engage in our forums, participate in discussions, and build valuable relationships. This step is about leveraging the power of collaboration, finding support, and accelerating your growth through shared experiences and insights within the WLA network.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" data-modal-open="step3Modal" class="cursor-pointer h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-green-500 text-white">
                                    Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden " id="stepfour" role="tabpanel" aria-labelledby="step-4">
                        <img src="{{ asset('assets/front/images/blog/03.jpg') }}" class="shadow dark:shadow-gray-700 rounded-md" alt="">

                        <div class="mt-6">
                            <h5 class="text-lg font-bold text-green-500">Step 4: Build Your Network and Track Progress</h5>
                            <p class="text-slate-400 mt-4">Now it's time to put the system into action: begin building your core network, knowing that your efforts will yield benefits across all Wealth Legacy Alliance partner opportunities. Utilize our provided tools to effectively connect with potential team members and guide their growth within our collaborative ecosystem. Crucially, leverage our tracking features to monitor your progress across various income streams, identify successful strategies, and refine your approach for continuous advancement towards your financial goals.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" data-modal-open="step4Modal" class="cursor-pointer h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-green-500 text-white">
                                    Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <!-- Modal -->
    <div id="step1Modal" class="container hidden mt-4 lg:fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" data-modal>
        <div class="bg-slate-100 dark:bg-slate-900 border border-slate-200 rounded-lg shadow-lg p-8 w-full relative">
            <button data-modal-close class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
            <h3 class="border-b text-2xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Step 1: Discover Your Foundation - Explore Our Site and Register') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Embarking on your path to financial freedom with Wealth Legacy Alliance begins with a crucial first step: taking the time to thoroughly explore our online platform and formally join our community.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Immerse Yourself in Our Vision') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Navigate through the pages of our website to gain a comprehensive understanding of the Wealth Legacy Alliance model. Delve into the intricacies of our collaborative wealth-building approach, where we strategically partner with a diverse array of reputable Multi-Level Marketing companies. Discover how this unique strategy provides you with multiple income streams and a resilient financial foundation, shielding you from the potential volatility of relying on a single MLM venture.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Understand the Power of Unified Effort') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Pay close attention to the explanation of our groundbreaking 'recruit once, benefit across all' system. Visualize the efficiency of building a core team whose contributions resonate across all our current and future partner MLM opportunities. This innovative approach maximizes your time and effort, allowing you to focus on nurturing a strong network that yields compounding benefits.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Experience the Strength of Our Community') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Explore testimonials and member spotlights to witness the tangible impact of the Wealth Legacy Alliance community. Understand our commitment to collaboration, mutual support, and shared success. Discover the resources and mentorship opportunities that underscore our dedication to empowering every member on their financial journey.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Review Your Gateway to Opportunity') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Locate and carefully review any available membership options. Understand the varying levels of access to resources, training, and potential earning structures. Consider your individual goals and commitment level to select the pathway that best aligns with your aspirations within the Wealth Legacy Alliance framework.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Take the Decisive Step: Complete Your Registration') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("When you feel confident and ready to unlock your potential within our collective, navigate to our Registration or 'Sign Up' page. Follow the intuitive prompts to complete the registration form, providing accurate details. By agreeing to our terms and conditions and privacy policy, you officially become a valued member of the Wealth Legacy Alliance community. This pivotal first step directly connects you to a world of diverse income-generating opportunities and a supportive network of individuals, all striving for shared success.") }}
            </p>
        </div>
    </div>

    <!-- Modal -->
    <div id="step2Modal" class="container hidden mt-4 lg:fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" data-modal>
        <div class="bg-slate-100 dark:bg-slate-900 border border-slate-200 rounded-lg shadow-lg p-8 w-full relative">
            <button data-modal-close class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
            <h3 class="border-b text-2xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Step 2: Unlock Your Potential - Access and Learn the System') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Having officially joined Wealth Legacy Alliance, your immediate priority is to access and thoroughly familiarize yourself with the powerful and interconnected system that underpins our collaborative success. This crucial step will lay the foundation for your growth and empower you to navigate the diverse opportunities within our alliance effectively.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Your Central Command Center') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Having officially joined Wealth Legacy Alliance, your immediate priority is to access and thoroughly familiarize yourself with the powerful and interconnected system that underpins our collaborative success. This crucial step will lay the foundation for your growth and empower you to navigate the diverse opportunities within our alliance effectively.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Discover a World of Opportunity') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Within your dashboard, you'll find detailed information about our carefully selected strategic partners – a diverse portfolio of thriving MLM companies spanning various industries. Delve into the specifics of each partner, understanding their unique product lines or service offerings, their target markets, and their individual company cultures. Critically, pay close attention to their compensation structures. Analyze how commissions are earned, what bonuses are available, and the pathways to building a successful network within each specific MLM. This understanding will allow you to strategically identify opportunities that resonate with your interests and align with your strengths.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Your Roadmap to Success: Immersing Yourself in Our Training Resources') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("A cornerstone of Wealth Legacy Alliance is our commitment to equipping you with the knowledge and skills necessary to thrive. Explore our comprehensive library of training resources. This isn't just basic information; it's a carefully curated collection of guides, videos, webinars, and downloadable materials designed to provide you with unified strategies and proven techniques applicable across all our partner MLM ventures. Immerse yourself in these resources, understanding the nuances of effective prospecting, persuasive marketing, and successful team building within the WLA framework.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Empowerment Through Knowledge') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("This step is fundamentally about empowering yourself with the knowledge and tools that will set you up for success within the Wealth Legacy Alliance ecosystem. By thoroughly understanding our system, the intricacies of our partner MLMs, and leveraging our expert-designed training, you'll be well-prepared to strategically engage, build your network effectively, and ultimately achieve your financial goals within our collaborative and supportive community.") }}
            </p>
        </div>
    </div>
    <!-- Modal -->
    <div id="step3Modal" class="container hidden mt-4 lg:fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" data-modal>
        <div class="bg-slate-100 dark:bg-slate-900 border border-slate-200 rounded-lg shadow-lg p-8 w-full relative">
            <button data-modal-close class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
            <h3 class="border-b text-2xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Step 3: Forge Your Network - Connect and Engage with the WLA Community') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Stepping into the Wealth Legacy Alliance community is like gaining access to a powerful support system and a wealth of shared experience. This crucial step encourages you to actively connect and engage with the vibrant network of like-minded individuals who are all striving for financial success through our collaborative MLM model, potentially including fellow entrepreneurs right here in Burnaby and across Canada.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Make Your Presence Known: Introduce Yourself and Share Your Aspirations') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Take the initiative to introduce yourself within our designated community spaces, such as our forums, chat groups, or introductory threads. Share your background, your aspirations for joining Wealth Legacy Alliance, and the specific financial goals you hope to achieve. By making yourself known, you open the door for meaningful connections and allow others to understand your unique perspective and offer tailored support.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Tap into the Collective Wisdom: Learn from Shared Experiences') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Our community is a rich tapestry of individuals with diverse backgrounds and varying levels of experience in the MLM world. Actively engage in discussions, ask questions, and seek advice from those who have navigated similar challenges or achieved significant milestones. The collective wisdom within the WLA network is an invaluable resource, offering insights, strategies, and perspectives that you might not discover on your own. You'll find members eager to share their successes, offer guidance, and provide encouragement.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Build Meaningful Relationships: Foster a Supportive Network') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Go beyond simply asking questions; actively participate in discussions, offer your own insights and support to others, and build genuine relationships with your fellow WLA members. This network of connections can become a powerful source of motivation, accountability, and even potential partnerships within the broader alliance. Connecting with individuals in your local area, like Burnaby, can also lead to in-person meetups and stronger regional support.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Leverage the Power of Collaboration: Grow Together') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Wealth Legacy Alliance is founded on the principle of collaboration. By actively engaging with the community, you'll discover opportunities to share strategies, brainstorm ideas, and even collaborate on projects or initiatives within the framework of our partner MLM companies. This synergistic approach amplifies individual efforts and contributes to the overall success of the alliance.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Accelerate Your Growth: Find Support and Motivation') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("The journey to financial freedom can have its ups and downs. By being an active member of the WLA community, you gain access to a built-in support system. Lean on your fellow members for encouragement during challenging times, celebrate each other's victories, and find the motivation to stay focused on your long-term goals. This sense of belonging and shared purpose can significantly accelerate your personal and financial growth within the Wealth Legacy Alliance network, right here in Burnaby and beyond.") }}
            </p>
        </div>
    </div>
    <!-- Modal -->
    <div id="step4Modal" class="container hidden mt-4 lg:fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" data-modal>
        <div class="bg-slate-100 dark:bg-slate-900 border border-slate-200 rounded-lg shadow-lg p-8 w-full relative">
            <button data-modal-close class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
            <h3 class="border-b text-2xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Step 4: Cultivate Your Team, Chart Your Course - Build Your Network and Track Progress') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Having immersed yourself in our system and connected with the Wealth Legacy Alliance community, the next vital step is to actively build your core network. This is where your efforts truly begin to compound, knowing that the individuals you bring into the WLA ecosystem will contribute to your success across all our current and future partner MLM opportunities.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Strategic Team Building: Laying a Strong Foundation') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __('Utilize the proven strategies and resources provided within your member dashboard to effectively identify, connect with, and onboard potential team members. Focus on building genuine relationships, understanding their individual goals and motivations, and clearly articulating the unique value proposition of Wealth Legacy Alliance. Emphasize the power of our collaborative model and the potential for diversified income streams. Remember, building a strong and engaged core team is fundamental to long-term success within our alliance, both locally in Burnaby and across your broader network.') }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Empowering Your Downline: Guiding Their Growth') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Your role extends beyond simply recruiting. As you build your network, actively guide and mentor your team members. Share the knowledge and strategies you've gained, provide ongoing support, and empower them to navigate the WLA system effectively. Their success directly contributes to your own, fostering a culture of mutual growth and achievement within your downline and the wider alliance. Consider connecting with team members in the Burnaby area for local support and collaboration.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Measure Your Milestones: Leveraging Our Tracking Features') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("Wealth Legacy Alliance provides you with integrated tracking features designed to help you monitor your progress across various aspects of your business. Regularly utilize these tools to gain clear insights into key metrics such as recruitment numbers, team growth within each partner MLM, sales performance, and income generation from different streams. Understanding these data points is crucial for identifying what strategies are proving most effective and where you might need to adjust your approach.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Strategic Refinement: Optimizing for Continuous Advancement') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("The data you gather through our tracking features is invaluable for refining your strategies. Analyze your successes and identify areas for improvement. Experiment with different prospecting techniques, marketing approaches, and team management styles, using the data to inform your decisions. This continuous cycle of implementation, tracking, and refinement is key to maximizing your efficiency and accelerating your advancement towards your financial goals within the Wealth Legacy Alliance ecosystem.") }}
            </p>
            <h3 class="border-b text-xl font-semibold mb-4 text-green-600 dark:text-white">{{ __('Charting Your Course to Success') }}</h3>
            <p class="text-slate-600 dark:text-white mb-4">
                {{ __("By actively building a strong and engaged network, diligently guiding their growth, and strategically leveraging our tracking features, you take control of your journey within Wealth Legacy Alliance. This step is about translating knowledge into action, measuring your impact, and continuously optimizing your path towards achieving the lasting financial legacy you envision, both for yourself and your community.") }}
            </p>
        </div>
    </div>
</section><!--end section-->
<!-- End Process -->
