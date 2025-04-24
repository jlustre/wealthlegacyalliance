<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        @include('partials.logo')

        <div class="mt-4 text-center">
            <h4 class="mb-2 text-custom-500 dark:text-custom-500">{{ __('Forgot Password?') }}</h4>
            <p class="mb-8 text-slate-500 dark:text-zink-200">{{ __('Request To Reset Your WLA Password') }}</p>
        </div>

        <div class="px-4 py-3 mb-6 text-sm text-yellow-500 border border-transparent rounded-md bg-yellow-50 dark:bg-yellow-400/20">
            {{ __('Provide your email address, and instructions will be sent to you') }}
        </div>
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form autocomplete="off" wire:submit="sendPasswordResetLink" method="POST">
            <div>
                <label for="email" class="inline-block mb-0 text-base font-medium">{{ __('Email') }}</label>
                <input type="email"
                wire:model="email"
                autofocus
                autocomplete="email"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                required
                placeholder="Enter email" id="email"
                />
                @error('email')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="cursor-pointer w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send Reset Link</button>
            </div>
            <div class="mt-2 text-center">
                <p class="text-sm mb-0">{{ __('Wait, I remember my password...') }} <a href="/login" class="underline fw-medium text-custom-500"> {{ __('Login') }} </a> </p>
            </div>
        </form>
    </div>
</div>
