<div class="col-span-12 card 2xl:col-span-8">
    <div class="card-body">
        <div class="flex flex-col gap-4 mb-4 md:mb-3 md:items-center md:flex-row">
            <h6 class="grow text-15">Sales Revenue Overview</h6>
            <div class="relative">
                <i data-lucide="calendar-range" class="absolute size-4 ltr:left-3 rtl:right-3 top-3 text-slate-500 dark:text-zink-200"></i>
                <input type="text" class="ltr:pl-10 rtl:pr-10 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly" placeholder="Select Date">
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4 mb-3">
            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                <div class="flex items-center gap-3">
                    <div class="flex items-center justify-center rounded-md size-12 text-sky-500 bg-sky-50 shrink-0 dark:bg-sky-500/10">
                        <i data-lucide="bar-chart"></i>
                    </div>
                    <div class="grow">
                        <p class="mb-1 text-slate-500 dark:text-zink-200">Total Sales</p>
                        <h5 class="text-15">$<span class="counter-value" data-target="1517.36">0</span>k</h5>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                <div class="flex items-center gap-3">
                    <div class="flex items-center justify-center text-green-500 rounded-md size-12 bg-green-50 shrink-0 dark:bg-green-500/10">
                        <i data-lucide="trending-up"></i>
                    </div>
                    <div class="grow">
                        <p class="mb-1 text-slate-500 dark:text-zink-200">Total Profit</p>
                        <h5 class="text-15">$<span class="counter-value" data-target="746.84">0</span>k</h5>
                    </div>
                </div>
            </div>
        </div>
        <div id="salesRevenueOverview" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-custom-400", "bg-custom-300"]' dir="ltr"></div>
    </div>
</div><!--end col-->
