<div class="flex flex-col items-center mt-5 md:flex-row">
    <div class="mb-4 grow md:mb-0">
        <p class="text-slate-500 dark:text-zink-200">
            Showing <b>{{ $data->firstItem() }}</b> to <b>{{ $data->lastItem() }}</b> of <b>{{ $data->total() }}</b> Results
        </p>
    </div>
    <ul class="flex flex-wrap items-center gap-2 shrink-0">
        {{-- Previous Page Link --}}
        <li>
            <a
                href="{{ $data->previousPageUrl() ?: '#' }}"
                class="border border-slate px-2 py-0 inline-flex items-center justify-center {{ $data->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}"
                @if($data->onFirstPage()) aria-disabled="true" @endif
            >
                <i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev
            </a>
        </li>
        {{-- Pagination Elements --}}
        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
        <li>
            <a
                href="{{ $url }}"
                class="border border-slate px-2 py-0 cursor-pointer inline-flex items-center justify-center {{ $data->currentPage() == $page ? 'pointer-events-none opacity-50 font-bold' : '' }}"
                @if($data->currentPage() == $page) aria-disabled="true" @endif
            >{{ $page }}</a>
        </li>
        @endforeach
        {{-- Next Page Link --}}
        <li>
            <a
                href="{{ $data->nextPageUrl() ?: '#' }}"
                class="border border-slate px-2 py-0 inline-flex items-center justify-center {{ !$data->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}"
                @if(!$data->hasMorePages()) aria-disabled="true" @endif
            >
                Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i>
            </a>
        </li>
    </ul>
</div>
