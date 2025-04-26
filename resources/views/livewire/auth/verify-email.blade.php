<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        @include('partials.logo')

        <div class="mt-8 text-center">
            <h4 class="mb-0 text-custom-500 dark:text-custom-500">{{ __('Verify Yor Email Address') }}</h4>
        </div>
        @if (session('status') == 'verification-link-sent')
            <p class="text-center font-medium !dark:text-green-400 text-green-600 mt-4">
                {{ __('A new verification email was sent. Please check your email again.') }}
            </p>
        @else
            <p class="text-center text-slate-500 dark:text-zink-200">
                {{ __('Please verify your email address by clicking on the link we just emailed to you. Please check your email.') }}
            </p>
        @endif
        <div class="flex flex-col items-center justify-between space-y-3 mt-8">
            <form wire:submit="sendVerification">
                <button
                    type="submit"
                    class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                    wire:loading.attr="disabled"
                    wire:target="sendVerification"
                >
                    <span wire:loading.remove wire:target="sendVerification">{{ __('Resend verification email') }}</span>
                    <span wire:loading wire:target="sendVerification">
                        <svg class="inline w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </span>
                </button>
            </form>

            <div class="text-md cursor-pointer mt-4">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"><i data-lucide="log-out" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Sign Out</button>
                </form>
            </div>
        <div class="pt-10 text-center">
            <img src="{{ asset('assets/images/auth-email.png') }}" alt="" class="block w-2/3 mx-auto">
        </div>
    </div>
</div>
@section('scripts')
<script src="{{ asset('assets/js/pages/auth-register.init.js') }}"></script>
@endsection
