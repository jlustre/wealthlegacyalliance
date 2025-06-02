<div class="grid grid-cols-1 gap-x-5 lg:grid-cols-12">
  <div class="lg:col-span-12">
    <div class="-ml-4 -mr-8 rounded-lg card">
      <div class="card-body">
        <div class="grid grid-cols-2 gap-5 lg:grid-cols-12">
            <div class="col-span-3 lg:col-span-2 flex justify-center">
                @include('partials.profile.avatar')
            </div><!--end col-->
            <div class="col-span-9 lg:col-span-10">
              <div class="flex items-center justify-between mb-1">
                <h5>{{ Auth::user()->fullname }} <i data-lucide="badge-check" class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                <button
                  class="bg-custom-600 text-white px-4 py-2 rounded hover:bg-custom-700 btn-xs"
                  onclick="document.getElementById('editProfileModal').classList.remove('hidden')"
                >
                Edit Profile
                </button>
              </div>
                <div class="flex gap-3 mb-4">
                    <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle" class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i> {{ Auth::user()->name }}</p>
                    <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin" class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i> {{ Auth::user()->location }}</p>
                </div>
                @include('partials.profile.profile-stats')
                <p class="my-3 text-slate-500 dark:text-zink-200">Driven professional with a strong track record of fostering meaningful collaboration and spearheading transformative innovation. I am adept at cultivating robust relationships that translate into enhanced customer loyalty and substantial growth in success. I excel at cultivating strong relationships, driving customer loyalty, and significantly boosting profitability.</p>
            </div>
        </div>
        @include('partials.profile.tab-menu')
      </div><!--end card-body-->
    </div>
  </div>
</div>
