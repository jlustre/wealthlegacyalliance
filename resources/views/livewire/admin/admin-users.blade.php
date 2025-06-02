<div class="card-body py-0">
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 10000)"
        x-show="show"
    >
        <x-auth-session-status class="text-center" :status="session('status')" />
    </div>

    <!-- Modal -->
    <div id="userModal" class="container hidden inset-0 flex items-center justify-center bg-black bg-opacity-50 border-b border-slate-100" data-modal>
        <div class="w-full relative">
          <button data-modal-close class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
          @livewire('users.user-form')
        </div>
    </div>
    @include('partials.users.users-table')
</div>
