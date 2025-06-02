<div class="flex flex-col gap-2 py-2 mt-2 md:flex-row md:items-center print:hidden border-b border-slate-300">
    <div class="grow">
        <h5 class="text-24">{{ $pagetitle }}</h5>

        @if (isset($description) && $description)
          <p class="text-slate-400 dark:text-zink-200">
              {{ $description }}
          </p>
        @endif

    </div>
    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
            <a href="{{ route('home') }}" class="text-slate-400 dark:text-zink-200">Home</a>
        </li>
        <li class="text-slate-700 dark:text-zink-100">
            {{ $pagetitle }}
        </li>
    </ul>
</div>
