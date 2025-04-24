<x-layouts.app :title="__('Dashboard')">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            @include('partials.main-header', ['pageTitle' => __('Dashboard')])

            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                <livewire:dashboard.user-header />
                <livewire:dashboard.order-statistics />

                <livewire:dashboard.total-revenue />
                <livewire:dashboard.total-orders />
                <livewire:dashboard.delivered />
                <livewire:dashboard.cancelled />

                <livewire:dashboard.sales-revenue-overview />
                <livewire:dashboard.traffic-resources />

                <livewire:dashboard.product-orders />

                <livewire:dashboard.customer-service />
                <livewire:dashboard.sales-month />
                <livewire:dashboard.top-selling-products />
                <livewire:dashboard.audience />
            </div><!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</x-layouts.app>
