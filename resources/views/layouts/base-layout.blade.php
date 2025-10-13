<x-app-layout>

    <x-header />

    <main>
        {{ $slot }}
    </main>

    <div class="mt-4"><x-footer /></div>

</x-app-layout>