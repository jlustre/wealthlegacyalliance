<x-layouts.admin :pagetitle="__('Admin Dashboard')" :description="__('Manage Your Admin Dashboard here')">
    <livewire:admin.admin-dashboard />

    @section('styles')
      <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/apexcharts.css') }}" />
    @endsection

    @section('scripts')
      <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <script src="{{ asset('assets/js/pages/dashboards-ecommerce.init.js') }}"></script>
    @endsection
</x-layouts.admin>

