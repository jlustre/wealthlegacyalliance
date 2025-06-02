<div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
    <div class="!px-0 lg:!px-10 !py-12 card-body">
        @include('partials.logo')

        <div class="mt-8 text-center">
            <h4 class="mb-0 text-custom-500 dark:text-custom-500">{{ __('Create your FREE account') }}</h4>
            <p class="text-slate-500 dark:text-zink-200">{{ __('Register now to become a member of WLA') }}</p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form wire:submit="register" class="mt-4" id="registerForm">
            <div class="mb-3 flex align-center justify-between gap-1">
                <div style="width: 50%">
                    <label for="name" class="inline-block mb-0 text-base font-medium">{{ __('Username') }} <span class="text-red-500">*</span></label>
                    <input type="text"
                        id="name"
                        type="text"
                        autofocus
                        wire:model="name"
                        class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="{{ __('Enter Username') }}"
                    />
                    @error('name')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div style="width: 50%">
                    <label for="sponsor_id" class="inline-block mb-0 text-base font-medium">{{ __('Sponsor') }} <span class="text-red-500">*</span></label>
                      <select id="sponsor_id"
                      wire:model="sponsor_id"
                      class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                          <option value="">{{ __('Select Sponsor') }}</option>
                          @foreach ($this->activeUsers as $sponsor)
                              <option value="{{ $sponsor->id }}">{{ $sponsor->name }}</option>
                          @endforeach
                      </select>
                      @error('sponsor_id')
                          <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                      @enderror
                </div>
            </div>

            <div class="mb-3 flex align-center justify-between gap-1">
              <div style="width: 50%">
                <label for="email" class="inline-block mb-0 text-base font-medium">{{ __('Email') }} <span class="text-red-500">*</span></label>
                <input type="text"
                id="email"
                type="email"
                wire:model="email"
                autocomplete="email"
                class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                placeholder="{{ __('Enter email address') }}"
                />
                @error('email')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
              </div>
              <div style="width: 50%">
                <label for="phone" class="inline-block mb-0 text-base font-medium">{{ __('Phone') }} <span class="text-red-500">*</span></label>
                <input type="text"
                  id="phone"
                  type="phone"
                  wire:model="phone"
                  autocomplete="phone"
                  class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                  placeholder="{{ __('Enter phone number') }}"
                />
                @error('phone')
                  <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="mb-3 flex align-center justify-between gap-1">
                <div style="width: 50%">
                    <label for="password" class="inline-block mb-0 text-base font-medium">{{ __('Password') }} <span class="text-red-500">*</span></label>
                    <input type="password"
                    id="password"
                    type="password"
                    wire:model="password"
                    class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="{{ __('Enter password') }}"
                    />
                    @error('password')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div style="width: 50%">
                    <label for="password_confirmation" class="inline-block mb-0 text-base font-medium">{{ __('Confirm Password') }} <span class="text-red-500">*</span></label>
                    <input type="password"
                    id="password_confirmation"
                    type="password"
                    wire:model="password_confirmation"
                    class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="{{ __('Confirm password') }}"
                    />
                </div>
            </div>
            <div class="mb-3 flex align-center justify-between gap-1">
                <div style="width: 50%">
                    <label for="firstname" class="inline-block mb-0 text-base font-medium">{{ __('First Name') }} <span class="text-red-500">*</span></label>
                    <input type="text"
                    id="firstname"
                    type="text"
                    autofocus
                    wire:model="firstname"
                    class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="{{ __('Enter first name') }}"/>
                    @error('firstname')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div style="width: 50%">
                    <label for="lastname" class="inline-block mb-0 text-base font-medium">{{ __('Last Name') }} <span class="text-red-500">*</span></label>
                    <input type="text"
                    id="lastname"
                    type="text"
                    autofocus
                    wire:model="lastname"
                    class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="{{ __('Enter last name') }}"/>
                    @error('lastname')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 flex align-center justify-between gap-1">
                <div style="width: 50%">
                    <label for="country_id" class="inline-block mb-0 text-base font-medium">{{ __('Country') }} <span class="text-red-500">*</span></label>
                    <select id="country_id"
                      wire:model.live="country_id"
                      name="country_id"
                      class="w-full h-10 form-input ...">
                      <option value="">Select Country</option>
                      @foreach($this->activeCountries as $country)
                          <option value="{{ (string) $country->id }}">{{ $country->name }}</option>
                      @endforeach
                    </select>
                    @error('country_id')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div style="width: 50%">
                    <label for="stateprov_id" class="inline-block mb-0 text-base font-medium">{{ __('State') }} <span class="text-red-500">*</span></label>
                    @if(!empty($country_id) && ($country_id !== '37' && $country_id !== '224'))
                      <input type="hidden" id="stateprov_id" name="9999" />
                      <input type="text"
                        name="stateprov"
                        wire:model="stateprov"
                        class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="{{ __('Enter state/province') }}"
                       />
                    @else
                      <select id="stateprov_id"
                          wire:model.live="stateprov_id"
                          name="stateprov_id"
                          class="w-full h-10 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                          <option value="">{{ __('Select State/Province') }}</option>
                          @foreach ($this->activeStateprovs as $state)
                              <option value="{{ $state->id }}">{{ $state->name }}</option>
                          @endforeach
                      </select>
                    @endif
                    @error('stateprov_id')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <p class="italic text-center text-12 text-slate-500 dark:text-zink-200">{{ __('By registering you agree to WLA') }} <a href="#!" class="underline">{{ __('Terms of Use') }}</a></p>
            <div class="mt-2">
                <button
                    type="submit"
                    class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                    wire:loading.attr="disabled"
                    wire:target="register"
                >
                    <span wire:loading.remove wire:target="register">Sign Up</span>
                    <span wire:loading wire:target="register">
                        <svg class="inline w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </span>
                </button>
            </div>

            <div class="mt-2 text-center">
                <p class="mb-0 text-slate-500 dark:text-zink-200">{{ __('Already have an account?') }} <a href="/login" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">{{ __('Login') }}</a> </p>
            </div>
        </form>
        <div class="mt-4 text-left text-sm">
          <span class="text-red-500">*</span> Required
        </div>

    </div>
</div>
@section('scripts')
<script src="{{ asset('assets/js/pages/auth-register.init.js') }}"></script>
@endsection
