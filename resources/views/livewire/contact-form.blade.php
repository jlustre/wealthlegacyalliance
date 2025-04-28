<div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
    <form wire:submit.prevent="submit" class="space-y-4">
        @if ($successMessage)
            <div class="text-green-600 mb-2">{{ $successMessage }}</div>
        @endif
        @if ($errorMessage)
            <div class="text-red-600 mb-2">{{ $errorMessage }}</div>
        @endif

        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-6">
                <label for="name" class="font-semibold">Full Name:</label>
                <input wire:model="name" name="name" id="name" type="text"
                    class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                    placeholder="Name :">
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="lg:col-span-6">
                <label for="phone" class="font-semibold">Phone:</label>
                <input wire:model="phone" name="phone" id="phone" type="text"
                    class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                    placeholder="Phone :">
                @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="lg:col-span-12">
                <label for="email" class="font-semibold">Your Email:</label>
                <input wire:model="email" name="email" id="email" type="email"
                    class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                    placeholder="Email :">
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="lg:col-span-12">
                <label for="subject" class="font-semibold">Subject or Your Question:</label>
                <input name="subject" wire:model="subject" id="subject"
                    class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                    placeholder="Subject :">
                @error('subject') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="lg:col-span-12">
                <label for="comments" class="font-semibold">Comment:</label>
                <textarea wire:model="message" name="comments" id="comments"
                    class="mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                    placeholder="Message :"></textarea>
                @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
      <button type="submit"
          class="border border-green-500 bg-green-500 cursor-pointer h-8 px-4 text-[12px] tracking-wider inline-flex items-center justify-center font-medium rounded-md hover:bg-green-600 text-slate-800 hover:text-white dark:text-white uppercase"
          wire:loading.attr="disabled">
          <svg wire:loading
              class="animate-spin h-4 w-4 mr-2 text-slate-500 dark:text-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
          </svg>
          <span wire:loading.remove>Send Message</span>
          <span wire:loading>Sending...</span>
      </button>
    </form>
</div>
