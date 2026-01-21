<x-layout>
     <x-slot:heading>
        Job info
    </x-slot:heading>
    <h1><strong>this is the job info</strong></h1>
    <hr>
    <br>
    <h2>job title is: <strong>{{ $job->title }}</strong>  </h2>
    <h2>job salary is: <strong>{{ $job->salary }}</strong> </h2>
      
@can('edit', $job)
     <x-button href="/jobs/{{$job->id}}/edit" class="bg-green-600 hover:bg-green-700 mt-10 ">Edit your job<x-slot:span>#</x-slot:span></x-button> 
@endcan
    
            
         
 
   
   
</x-layout>