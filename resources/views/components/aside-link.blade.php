@props(['label' => 'home', 'route' => 'admin.home'])

<a {{ $attributes->merge(['class' => "text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group"]) }} href="{{route($route)}}">
    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        {{ $svgpath }}
    </svg>
    <span class="ml-3 flex-1 whitespace-nowrap">{{ $label }}</span>
</a>