@props(['logout'])
<button type="submit" class="{{ $logout ? 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium' : 'rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500' }}"> {{$slot}} </button>

