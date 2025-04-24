<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        @include('partials.logo')

        <div class="mt-8 text-center">
            <h4 class="mb-2 text-custom-500 dark:text-custom-500">{{ __('Set a New Password') }}</h4>
            <p class="mb-8 text-slate-500 dark:text-zink-200">{{ __('Your new password should be distinct from any of your prior passwords') }}</p>
        </div>
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form autocomplete="off" wire:submit="resetPassword" method="POST">
            @csrf
            <div class="mb-3">
                <label for="password" class="inline-block mb-2 text-base font-medium">{{ __('Password') }}</label>
                <input type="password"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                required
                wire:model="password"
                autocomplete="new-password"
                autofocus
                placeholder="Password" id="password"/>
                @error('password')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                required
                wire:model="password_confirmation"
                autocomplete="new-password"
                placeholder="Confirm password"
                id="password_confirmation">
            </div>
            <div class="mt-8">
                <button type="submit" class="cursor-pointer w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">{{ __('Reset Password') }}</button>
            </div>
            <div class="mt-4 text-center">
                <p class="mb-0 text-sm">{{ __("Hold on, I've got my password...") }} <a href="/login" class="underline fw-medium text-custom-500"> {{ __('Log In') }} </a> </p>
            </div>
        </form>
    </div>
</div>
