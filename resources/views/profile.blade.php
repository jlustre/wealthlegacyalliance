<x-layouts.main :pagetitle="__('Profile')" :description="__('Manage Your Profile Here')">
    <livewire:profile.profile-main />

    @section('styles')
    @endsection

    @section('scripts')
      <script src="{{ asset('assets/js/pages/dashboards-ecommerce.init.js') }}"></script>
    @endsection
</x-layouts.main>
