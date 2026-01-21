            <a {{$attributes->merge(['class' => 'inline-flex items-center gap-3 text-white px-5 py-3 rounded-full shadow-md'])}}>
              <span class="flex items-center justify-center w-9 h-9 bg-white/20 rounded-full text-2xl font-bold ">
                  <span class="text-2xl font-bold relative" style="top: -2px; left: -0.3px;">{{$span}}</span>
              </span>
              <span class="text-base font-semibold">
                  {{$slot}}
              </span>
             </a>
   

   