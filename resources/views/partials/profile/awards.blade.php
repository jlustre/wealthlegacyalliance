<div class="grid grid-cols-1 gap-x-5 lg:grid-cols-12">
  <div class="lg:col-span-12">
    <div class="-ml-4 -mr-8 rounded-lg card">
      <div class="flex flex-col h-full card-body">
        <img src="./assets/images/medal.png" alt="" class="w-2/6 mx-auto">
        <div class="mt-5 mb-auto">
            <h5 class="mb-1 text-white">Congratulations {{ Auth::user()->firstname }}</h5>
            <p class="text-custom-200">on your outstanding achievement! Your hard work and dedication have truly paid off in a remarkable way. It's inspiring to witness the incredible results of your commitment to WLA.</p>
        </div>
      </div>
    </div>
  </div>
</div>
