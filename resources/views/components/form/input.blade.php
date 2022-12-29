@props(['name', 'type' => 'text'])

<div class="mb-6">
    <x-form.label name="{{ $name }}"></x-form.label>

    <input
        type="{{ $type }}"
        class="border border-gray-400 p-2 w-full"
        name="{{ $name }}" id="{{ $name }}"
        value="{{ old($name) }}"
    >

    <x-form.error name="{{ $name }}"></x-form.error>
</div>
