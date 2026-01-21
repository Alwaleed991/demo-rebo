<x-layout>
<x-slot:heading>Register</x-slot:heading>

<form method="POST" action="/login" class="max-w-md mx-auto">
    @csrf
    
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            
            <div class="flex flex-col gap-y-8">
                
               

                <x-form-field>
                    <x-form-label for="email" class="text-center block">Email Address</x-form-label> 
                    
                    <div class="mt-2">
                        <x-form-input type="email" name="email" id="email" class="text-center py-2" required :value="old('email')"/>
                        
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password" class="text-center block">Password</x-form-label> 
                    
                    <div class="mt-2">
                        <x-form-input type="password" name="password" id="password" class="text-center py-2" required/>
                        
                        <x-form-error name="password" />
                    </div>
                </x-form-field>

               

            </div>
        </div>
    </div>
    
    <div class="mt-6 flex items-center justify-center gap-x-6">
        <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
        <x-form-button :logout=false >Login</x-form-button>
    </div>
</form>
</x-layout>