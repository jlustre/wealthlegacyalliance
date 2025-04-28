<section class="relative lg:py-24 py-16 bg-slate-50 dark:bg-slate-800" id="contact">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-6 text-center">
            <h2 class="text-muted dark:text-slate-100 text-3xl mb-4">Contact Us</h2>

            <p class="text-slate-400 max-w-3xl mx-auto">Ready to take the next step or have questions about Wealth Legacy Alliance? Reach out to us! Our dedicated team is here to provide you with the information and support you need to understand our collaborative model and how it can help you build a lasting financial legacy. Whether you're curious about our strategic partnerships, the benefits of our unified system, or simply want to connect with our community, we encourage you to get in touch. Use the contact form below or the provided contact details, and we'll be happy to assist you on your journey towards a diversified and prosperous future.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="{{ asset('assets/front/images/contact.svg') }}" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <livewire:contact-form/>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
