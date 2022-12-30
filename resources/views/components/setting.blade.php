@props(['heading'])

<section class="py-6 max-w-md mx-auto">
    <h1 class="text-lg font-bold mb-6">{{ $heading }}</h1>

    <x-panel>
        {{ $slot }}
    </x-panel>
</section>
