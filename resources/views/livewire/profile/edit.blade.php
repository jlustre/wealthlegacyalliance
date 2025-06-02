<div class="w-xl lg:w-9 bg-custom-200 rounded-lg shadow-lg mx-2 p-6 relative">
  <button
  class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 w-1/3"
  onclick="document.getElementById('editProfileModal').classList.add('hidden')"
  >
  &times;
  </button>
  <h2 class="text-lg font-semibold mb-1 text-zinc-700 dark:text-zink-200 text-center">Edit Profile Information</h2>
  <form wire:submit.prevent="updateProfile">
  <div class="mb-4">
    <label class="block text-custom-600 mb-1" for="firstname">First Name</label>
    <input type="text" id="firstname" wire:model.defer="firstname" class="w-full border rounded px-3 py-2" />
    @error('firstname') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div class="mb-4">
    <label class="block text-custom-600 mb-1" for="lastname">Last Name</label>
    <input type="text" id="lastname" wire:model.defer="lastname" class="w-full border rounded px-3 py-2" />
    @error('lastname') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div class="mb-4">
    <label class="block text-custom-600 mb-1" for="phone">Phone</label>
    <input type="email" id="phone" wire:model.defer="phone" class="w-full border rounded px-3 py-2" />
    @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <div class="mb-4">
    <label class="block text-custom-600 mb-1" for="email">Email</label>
    <input type="email" id="email" wire:model.defer="email" class="w-full border rounded px-3 py-2" />
    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
  </div>
  <!-- Add more fields as needed -->
  <div class="flex justify-between mt-6">
    <button
    type="button"
    class="mr-2 px-4 py-2 rounded bg-slate-400 hover:bg-slate-500 text-white"
    onclick="document.getElementById('editProfileModal').classList.add('hidden')"
    >
    Cancel
    </button>
    <button
    type="submit"
    class="px-4 py-2 rounded bg-custom-600 text-white hover:bg-custom-700"
    >
    Save Changes
    </button>
  </div>
  </form>
</div>
