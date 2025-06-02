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
      @include('partials.script-modal')
      @endsection
</x-layouts.front>

