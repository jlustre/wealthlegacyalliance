<x-layouts.main :pagetitle="__('Dashboard')" :description="__('Manage Your Dashboard Here')">
    <livewire:dashboard />

    @section('styles')
      <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/apexcharts.css') }}" />
    @endsection

    @section('scripts')
      <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
      <script src="{{ asset('assets/js/pages/dashboards-ecommerce.init.js') }}"></script>
    @endsection
</x-layouts.main>
