<x-layouts.front :pageTitle="__('Wealth Legacy Alliance - Homepage')">
      @include('partials.front.hero-section')
      @include('partials.front.about-section')
      @include('partials.front.feature-section')
      @include('partials.front.steps-section')
      @include('partials.front.video-section')
      @include('partials.front.testimonials-section')
      {{-- @include('partials.front.pricing-section') --}}
      {{-- @include('partials.front.blog-section') --}}
      @include('partials.front.contact-section')
      @section('scripts')
        <script>
          // filepath: resources/views/partials/front/process-section.blade.php
          document.addEventListener('DOMContentLoaded', function () {
              // Open modal
              document.querySelectorAll('[data-modal-open]').forEach(function (btn) {
                  btn.addEventListener('click', function () {
                      // Close any open modals
                      document.querySelectorAll('[data-modal]').forEach(function (modal) {
                          modal.classList.add('hidden');
                      });
                      // Open the selected modal
                      var modalId = btn.getAttribute('data-modal-open');
                      var modal = document.getElementById(modalId);
                      if (modal) {
                          modal.classList.remove('hidden');
                      }
                  });
              });

              // Close modal
              document.querySelectorAll('[data-modal-close]').forEach(function (btn) {
                  btn.addEventListener('click', function () {
                      btn.closest('[data-modal]').classList.add('hidden');
                  });
              });

              // Optional: Close modal when clicking outside modal content
              document.querySelectorAll('[data-modal]').forEach(function (modal) {
                  modal.addEventListener('click', function (e) {
                      if (e.target === modal) {
                          modal.classList.add('hidden');
                      }
                  });
              });
          });
        </script>
      @endsection
</x-layouts.front>

