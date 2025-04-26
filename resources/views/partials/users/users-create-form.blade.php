<div class="col-span-12 card 2xl:col-span-12">
    <div class="card-body">
        <div class="flex justify-between items-center mb-5 pb-2 border-b border-slate-200 dark:border-dark-5">
            <div class="">
                <h6 class="text-15">{{ __('Create A New User') }}</h6>
            </div><!--end col-->
            <div class="">
                <div class="flex gap-3">
                    <a href="{{ route('users.index') }}" type="button" class="flex items-center text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/20 text-nowrap">
                        <i data-lucide="arrow-left-from-line" class="inline text-xs align-middle ltr:pr-1 rtl:pl-1"></i>
                        Go Back
                    </a>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
        <form action="#!">
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                <div class="mb-4">
                    <label for="firstNameInput2" class="inline-block mb-1 text-base font-medium">First Name <span class="text-red-500">*</span></label>
                    <input type="text" id="firstNameInput2" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter First Name" value="Sophia" required>
                </div>
                <div class="mb-4">
                    <label for="lastNameInput2" class="inline-block mb-1 text-base font-medium">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" id="lastNameInput2" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter Last Name" value="Bethany" required>
                </div>
                <div class="mb-4">
                    <label for="UsernameInput" class="inline-block mb-1 text-base font-medium">Username <span class="text-red-500">*</span></label>
                    <input type="text" id="UsernameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <label for="cityInput" class="inline-block mb-1 text-base font-medium">City <span class="text-red-500">*</span></label>
                    <input type="text" id="cityInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter city" required>
                </div>
                <div class="mb-4">
                    <label for="stateInput" class="inline-block mb-1 text-base font-medium">State <span class="text-red-500">*</span></label>
                    <select class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="stateInput" required>
                        <option selected="" disabled="" value="">Choose...</option>
                        <option>Name</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="zipInput" class="inline-block mb-1 text-base font-medium">Zip <span class="text-red-500">*</span></label>
                    <input type="number" id="zipInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter zip code" required>
                </div>
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10"><i data-lucide="x" class="inline-block size-4"></i> <span class="align-middle">Cancel</span></button>
                <a type="submit" class="text-white text-sm transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                    <i data-lucide="check" class="inline text-xs align-middle ltr:pr-1 rtl:pl-1"></i>
                    Submit
                </a>
            </div>
        </form>
    </div>
</div><!--end col-->
