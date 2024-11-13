@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border dark:text-gray-600 rounded-md']) }}>
