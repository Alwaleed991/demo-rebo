{{-- <form method="POST" action="/jobs">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Please add the job detalis</h2>
      <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>




      
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">{{$title}}</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
              <input {{$titleValue}} id="title" type="text" name="title" placeholder="Software Engineer" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required />
            </div>
           
                 @error('title') {{-- This Blade directive checks if there is a validation error for the field named salary. --}}
                  {{-- <p class="text-sm text-red-500 mt-3 ml-2 font-semibold">{{$message}}</p>
                 @enderror
          
          </div>
        </div>

       
        

        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">{{$salary}}</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
              <input {{$salaryValue}} id="salary" type="text" name="salary" placeholder="$5000" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required />
            </div>
          </div>
        </div>
      </div>
      @error('salary')
        <p class="text-sm text-red-500 mt-3 ml-2 font-semibold">{{$message}}</p>
      @enderror
    </div>


  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{$submitt}}</button>
  </div>
</form> --}}




{{-- resources/views/components/table.blade.php --}}
@props([
    'action',
    'method',
    'titleLabel',
    'salaryLabel',
    'submitText',
    'view',
    'title' => null,
    'salary' => null,
])

<form method="{{$method}}" action="{{ $action }}">
    @csrf
    @if ($view === "edit")
       @method("PATCH")
    @endif
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <p class="mt-1 text-sm/6 text-gray-600">
                This information will be displayed publicly so be careful what you share.
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">
                        {{ $titleLabel }}
                    </label>
                    <div class="mt-2 ">
                        <input
                            id="title"
                            type="text"
                            name="title"
                            value="{{$title}}"
                            placeholder="Software Engineer"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm"
                            required
                        />
                        @error('title')
                            <p class="text-sm text-red-500 mt-2 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">
                        {{ $salaryLabel }}
                    </label>
                    <div class="mt-2">
                        <input
                            id="salary"
                            type="text"
                            name="salary"
                            value="{{ $salary }}"
                            placeholder="$5000"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm"
                            required
                        />
                        @error('salary')
                            <p class="text-sm text-red-500 mt-2 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button
                type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500"
            >
                {{ $submitText }}
            </button>

        </div>
    </div>
</form>
