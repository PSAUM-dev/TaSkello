<x-app-layout>

    <x-header />

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <div class="mt-4"><x-footer /></div>

</x-app-layout>