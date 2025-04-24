<div class="col-span-12 card lg:col-span-6 2xl:col-span-3">
    <div class="card-body">
        <div class="flex items-center mb-3">
            <h6 class="grow text-15">Sales This Month</h6>
            <div class="relative dropdown shrink-0">
                <button type="button" class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle" id="sellingProductDropdown" data-bs-toggle="dropdown">
                    <i data-lucide="more-vertical" class="inline-block size-4"></i>
                </button>

                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellingProductDropdown">
                    <li>
                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                    </li>
                    <li>
                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                    </li>
                    <li>
                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                    </li>
                    <li>
                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                    </li>
                    <li>
                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Yearly</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex items-center gap-3 my-3">
            <div class="flex items-center justify-center text-green-500 rounded-md size-12 bg-green-50 shrink-0 dark:bg-green-500/10">
                <i data-lucide="trending-up"></i>
            </div>
            <div class="grow">
                <p class="mb-1 text-slate-500 dark:text-zink-200">Total Profit</p>
                <h5 class="text-15">$<span class="counter-value" data-target="746.84">0</span>k</h5>
            </div>
        </div>
        <div id="salesThisMonthChart" class="apex-charts" data-chart-colors='["bg-sky-100", "bg-orange-100", "bg-sky-500", "bg-orange-500"]' dir="ltr"></div>
    </div>
</div><!--end col-->
