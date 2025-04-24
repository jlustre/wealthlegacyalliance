<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        @include('partials.logo')

        <div class="mt-8 text-center">
            <h4 class="mb-0 text-custom-500 dark:text-custom-500">{{ __('Create your FREE account') }}</h4>
            <p class="text-slate-500 dark:text-zink-200">{{ __('Register now to become a member of WLA') }}</p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form wire:submit="register" class="mt-4" id="registerForm">
            <div class="mb-3">
                <label for="email" class="inline-block mb-0 text-base font-medium">{{ __('Email') }}</label>
                <input type="text"
                id="email"
                type="email"
                wire:model="email"
                autofocus
                autocomplete="email"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="{{ __('Enter email address') }}"
                />
                @error('email')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="inline-block mb-0 text-base font-medium">{{ __('Full Name') }}</label>
                <input type="text"
                id="name"
                type="text"
                wire:model="name"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="{{ __('Enter Full Name') }}"/>
                @error('name')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="inline-block mb-0 text-base font-medium">{{ __('Password') }}</label>
                <input type="password"
                id="password"
                type="password"
                wire:model="password"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="{{ __('Enter password') }}"
                />
                @error('password')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="inline-block mb-0 text-base font-medium">{{ __('Confirm Password') }}</label>
                <input type="password"
                id="password_confirmation"
                type="password"
                wire:model="password_confirmation"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="{{ __('Confirm password') }}"
                />
            </div>
            <p class="italic text-center text-12 text-slate-500 dark:text-zink-200">{{ __('By registering you agree to WLA') }} <a href="#!" class="underline">{{ __('Terms of Use') }}</a></p>
            <div class="mt-0">
                <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">{{ __('Sign In') }}</button>
            </div>

            <div class="mt-2 text-center">
                <p class="mb-0 text-slate-500 dark:text-zink-200">{{ __('Already have an account?') }} <a href="/login" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">{{ __('Login') }}</a> </p>
            </div>
        </form>
    </div>
</div>
@section('scripts')
<script src="{{ asset('assets/js/pages/auth-register.init.js') }}"></script>
@endsection
