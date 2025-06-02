<x-layouts.main :title="__('Users')">
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            @include('partials.main-header', ['pagetitle' => __('Users'), 'description' => __('Manage your users here.')])
            <div class="flex flex-col gap-2 py-1 md:flex-row md:items-center print:hidden">
                <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                    <div class="col-span-12 lg:col-span-6 xl:col-span-4">
                        <div class="flex items-center justify-between">
                            <h5 class="text-lg font-semibold text-heading dark:text-white">{{ __('Users') }}</h5>
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                                    <i class="ri-add-line"></i>
                                    {{ __('Add User') }}
                                </a>
                                <a href="{{ route('admin.users.export') }}" class="btn btn-secondary">
                                    <i class="ri-file-download-line"></i>
                                    {{ __('Export Users') }}
                                </a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="text" wire:model.debounce.500ms="search" placeholder="{{ __('Search Users') }}" class="form-control" />
                        </div>
                </div><!--end grid-->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</x-layouts.main>

