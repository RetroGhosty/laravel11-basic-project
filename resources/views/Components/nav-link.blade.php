@props(['active' => false, 'type'=> 'a'])

@if ($type == 'button')
    <button {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium text-white">
        {{$slot}}
    </button>
@else
    <a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium text-white">
        {{$slot}}
    </a>
@endif


