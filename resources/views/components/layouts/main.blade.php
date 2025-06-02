<x-layouts.app.main :pagetitle="$pagetitle ?? null" :description="$description ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.main>
