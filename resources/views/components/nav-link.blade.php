@props(['active' => false])
{{-- @php
    $active = false;
@endphp --}}

{{-- props is not the same as attributes becuase props will not show in inspect instead of attributes, if we not declare the props, it will assumed as an attribute when we include attributes into tag --}}
<a class="{{  $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium "
    aria-current="{{  $active ? 'page' : 'false'}}" {{ $attributes }}>
    {{ $slot }}
</a>
