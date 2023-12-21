@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-100 dark:text-gray-1000']) }}>
    {{ $value ?? $slot }}
</label>
