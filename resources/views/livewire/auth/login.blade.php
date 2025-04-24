<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        @include('partials.logo')

        <div class="mt-8 text-center">
            <h4 class="mb-0 text-green-600 dark:text-green-600">{{ __('Welcome Back!') }}</h4>
            <p class="text-slate-500 dark:text-zink-200">{{ __('Sign in to continue to WLA.') }}</p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form wire:submit="login" class="mt-4" id="signInForm">
            <div class="mb-3">
                <label for="email" class="inline-block mb-2 text-base font-medium">Email</label>
                <input type="email"
                    id="email"
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
                <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
                <input type="password"
                    id="password"
                    wire:model="password"
                    class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="{{ __('Enter password') }}"
                />
                @error('password')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between mb-1">
                <div class="flex items-center gap-2">
                    <input id="remember" name="remember" class="border rounded-sm appearance-none size-4 bg-slate-100 border-slate-200 dark:bg-zink-600/50 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400" type="checkbox" value="">
                    <label for="remember" class="inline-block text-base font-medium align-middle cursor-pointer">{{ __('Remember Me') }}</label>
                </div>
                <div class="text-right">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="w-full text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20">Sign In</button>
            </div>

            {{-- @include('partials.social-login') --}}

            <div class="mt-2 text-center">
                <p class="text-sm mb-0 text-slate-500 dark:text-zink-200">Don't have an account ? <a href="/register" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"> SignUp</a> </p>
            </div>
        </form>
    </div>
</div>
@section('scripts')
<script src="{{ asset('assets/js/pages/auth-login.init.js') }}"></script>
@endsection
