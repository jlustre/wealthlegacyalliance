<div class="col-span-12 card 2xl:col-span-12">
    <div class="card-body">
        <div class="flex justify-between items-center mb-5 pb-2 border-b border-slate-200 dark:border-dark-5">
            <div class="">
                <h6 class="text-15">{{ __('Create A New User') }}</h6>
            </div><!--end col-->
            <div class="">
                <div class="flex gap-3">
                    <a href="" type="button" class="flex items-center text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/20 text-nowrap">
                        <i data-lucide="arrow-left-from-line" class="inline text-xs align-middle ltr:pr-1 rtl:pl-1"></i>
                        Go Back
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
        <form wire:submit="createUser" class="mt-5" id="createUserForm">
          @csrf
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                <div class="mb-4">
                    <label for="name" class="inline-block mb-0 text-base font-medium">Username <span class="text-red-500">*</span></label>
                    <input type="text" id="name" wire:model="name" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter First Name" value="{{ old('name') }}">
                    @error('name')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="mb-4">
                    <label for="sponsor_id" class="inline-block mb-0 text-base font-medium">Sponsor <span class="text-red-500">*</span></label>
                    <select id="sponsor_id" wire:model="sponsor_id" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="{{ old('sponsor_id') }}">
                        <option {{ empty($sponsors) ? 'selected' : '' }} value="">Select sponsor...</option>
                        @foreach ($sponsors as $sponsor)
                            <option value="{{ (int) $sponsor->id }}" {{ (!empty(old('sponsor_id')) && $sponsor_id == old('sponsor_id')) ? 'selected' : '' }}>{{ $sponsor->name }}</option>
                        @endforeach
                    </select>
                    @error('sponsor_id')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="firstname" class="inline-block mb-0 text-base font-medium">First Name <span class="text-red-500">*</span></label>
                    <input type="text" id="firstname" wire:model="firstname" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter First Name" value="{{ old('firstname') }}">
                    @error('firstname')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-4">
                    <label for="lastname" class="inline-block mb-0 text-base font-medium">Lastname <span class="text-red-500">*</span></label>
                    <input type="text" id="lastname" wire:model="lastname" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter Last Name" value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="inline-block mb-0 text-base font-medium">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" wire:model="email" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter email address" value="{{ old('email') }}">
                    @error('email')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="inline-block mb-0 text-base font-medium">Phone <span class="text-red-500">*</span></label>
                    <input type="text" id="phone" wire:model="phone" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter Phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="inline-block mb-0 text-base font-medium">Password <span class="text-red-500">*</span></label>
                    <input type="password" id="password" wire:model="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter Password" value="{{ old('password') }}">
                    @error('password')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="inline-block mb-0 text-base font-medium">Confirm Password <span class="text-red-500">*</span></label>
                    <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="address" class="inline-block mb-0 text-base font-medium">Address</label>
                    <input type="text" id="address" wire:model="address" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter Address" value="{{ old('address') }}">
                </div>
                <div class="mb-4">
                    <label for="city" class="inline-block mb-0 text-base font-medium">City</label>
                    <input type="text" id="city" wire:model="city" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter City" value="{{ old('city') }}">
                </div>
                <div class="mb-4">
                    <label for="country_id" class="inline-block mb-0 text-base font-medium">Country <span class="text-red-500">*</span></label>
                    <select id="country_id" wire:model="country_id" wire:change="getStateprov" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="{{ old('country_id') }}">
                        <option {{ empty($countries) ? 'selected' : '' }} value="">Select country...</option>
                        @foreach ($countries as $country)
                            <option value="{{ (int) $country->id }}" {{ (!empty(old('country_id')) && $country_id == old('country_id')) ? 'selected' : '' }}>{{ $country->name }} ({{ $country->iso3 }})</option>
                        @endforeach
                        <option value="999" {{ $country_id == old('country_id') ? 'selected' : '' }}>Others</option>
                    </select>
                    @error('country_id')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="stateprov_id" class="inline-block mb-0 text-base font-medium">State/Province <span class="text-red-500">*</span></label>
                    <select id="stateprov_id" wire:model="stateprov_id" wire:change="getStateprov" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="{{ old('stateprov_id') }}">
                        <option {{ empty($countries) ? 'selected' : '' }} value="">Select state/province...</option>
                        @foreach ($stateprovs as $stateprov)
                            <option value="{{ (int) $stateprov->id }}" {{ (!empty(old('stateprov_id')) && $stateprov_id == old('stateprov_id')) ? 'selected' : '' }}>{{ $stateprov->name }}</option>
                        @endforeach
                        <option value="999" {{ $stateprov_id == old('stateprov_id') ? 'selected' : '' }}>Others</option>
                    </select>
                    @error('stateprov_id')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="timezone_id" class="inline-block mb-0 text-base font-medium">Timezone <span class="text-red-500">*</span></label>
                    <select id="timezone_id" wire:model="timezone_id" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="{{ old('timezone_id') }}">
                      <option {{ empty($timezones) ? 'selected' : '' }} value="">Select timezone...</option>
                      @if(!empty($timezones))
                        @foreach ($timezones as $timezone)
                          <option value="{{ $timezone->id }}" {{ (!empty(old('timezone_id')) && $timezone_id == old('timezone_id')) ? 'selected' : '' }}>{{ $timezone->name }} ({{ $timezone->abbreviation }})</option>
                        @endforeach
                        <option value="999" {{ $timezone_id == old('timezone_id') ? 'selected' : '' }}>Others</option>
                      @endif
                    </select>
                    @error('timezone_id')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="role" class="inline-block mb-0 text-base font-medium">Role <span class="text-red-500">*</span></label>
                    <select id="role" wire:model="role" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="{{ old('role') }}">
                      <option {{ empty($role) ? 'selected' : '' }} value="">Select role...</option>
                      @if(!empty($roles))
                        @foreach ($roles as $role)
                          <option value="{{ $role }}" {{ $role == old('role') ? 'selected' : '' }}>{{ ucfirst($role) }}</option>
                        @endforeach
                      @endif
                    </select>
                    @error('role')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="status" class="inline-block mb-0 text-base font-medium">Status <span class="text-red-500">*</span></label>
                    <select id="status" wire:model="status" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="{{ old('status') }}">
                      <option {{ empty($statu) ? 'selected' : '' }} value="">Select status...</option>
                      @if(!empty($statuses))
                        @foreach ($statuses as $status)
                          <option value="{{ $status }}" {{ $status == old('status') ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                        @endforeach
                      @endif
                    </select>
                    @error('status')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end gap-2">
                <button
                    type="submit"
                  class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                  wire:loading.attr="disabled"
                  wire:target="createUser"
                >
                  <span wire:loading.remove wire:target="createUser">Create User</span>
                  <span wire:loading wire:target="createUser">
                      <svg class="inline w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                      </svg>
                  </span>
                </button>
            </div>
        </form>
    </div>
</div><!--end col-->
@section('scripts')
<script src="{{ asset('assets/js/pages/auth-register.init.js') }}"></script>
@endsection
