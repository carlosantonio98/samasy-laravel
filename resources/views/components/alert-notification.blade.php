@props(['type' => '', 'title' => '', 'text' => ''])

@php
    $types = [ 'success' => 'border-green-500', 'danger' => 'border-red-500' ];
    $classes = "relative bg-white px-6 mb-6 py-4 text-sm border-l-4 rounded-b shadow-md {{ $types[$type] }}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} id="alert">
    <div class="font-bold text-left text-black dark:text-gray-50">{{ $title }}</div>
    <div class="w-full text-gray-900 mt-1">{{ $text }}</div>
    <button class="absolute top-3 right-6" id="btnCloseAlert">x</button>
</div>

<script>
    const btnCloseAlert = document.querySelector('#btnCloseAlert');
    const alert = document.querySelector('#alert');
    btnCloseAlert.addEventListener('click', () => alert.classList.add('hidden'));
</script>