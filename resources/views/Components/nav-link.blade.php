
@props(["active"]) <!-- This component expects an 'active' property form the attributes in the view-->

<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">{{$slot}}</a>

