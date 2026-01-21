{{-- <x-layout>
     <x-slot:heading>
        Edit job {{ $job->title }}
    </x-slot:heading>
  
      <x-table>
            <x-slot:title>
                Enter the new title
            </x-slot:title>

            <x-slot:salary>
                Enter the new salary
            </x-slot:salary>

            <x-slot:submitt>
                Update
            </x-slot:submitt>

            <x-slot:titleValue>
                value="{{$job->title}}"
            </x-slot:titleValue>

            <x-slot:salaryValue>
                value="{{$job->salary}}"
            </x-slot:salaryValue>
            
      </x-table>
    
</x-layout> --}}

{{-- resources/views/jobs/edit.blade.php --}}
<x-layout>
    <x-slot:heading>Edit job: {{ $job->title }}</x-slot:heading>

    <x-table
        action="/jobs/{{ $job->id }}"
        method="POST"
        title-label="Enter the new title"
        salary-label="Enter the new salary"
        submit-text="Update"
        view="edit"
        :title="$job->title"
        :salary="$job->salary"
    />

    <form action="/jobs/{{$job->id}}" method="POST">
        @csrf
        @method("DELETE")
        <div class="mb-10">
                    <button type="submit" class=" rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow hover:bg-red-500">delete</button>
        </div>
    </form>

</x-layout>

