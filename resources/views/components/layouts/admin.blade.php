<x-layouts.app.admin :pagetitle="$pagetitle ?? null" :description="$description ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.admin>
