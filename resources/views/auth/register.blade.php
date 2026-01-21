<x-layout>
<x-slot:heading>Register</x-slot:heading>

<form method="POST" action="/register" class="max-w-md mx-auto">
    @csrf
    
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            
            <div class="flex flex-col gap-y-8">
                <x-form-field>
                    <x-form-label for="first_name" class="text-center block">First Name</x-form-label>
                    
                    <div class="mt-2">
                        <x-form-input name="first_name" id="first_name" placeholder="Alwaleed" class="text-center py-2" required/>
                        
                        <x-form-error name="first_name" />
                    </div>
                </x-form-field>
                
                <x-form-field>
                    <x-form-label for="last_name" class="text-center block">Last Name</x-form-label> 
                    
                    <div class="mt-2">
                        <x-form-input name="last_name" id="last_name" placeholder="Alfuhaid" class="text-center py-2" required/>
                        
                        <x-form-error name="last_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email" class="text-center block">Email Address</x-form-label> 
                    
                    <div class="mt-2">
                        <x-form-input type="email" name="email" id="email" placeholder="example@gmail.com" class="text-center py-2" required/>
                        
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

                <x-form-field>
                    <x-form-label for="password_confirmation" class="text-center block">Password Confirmation</x-form-label> 
                    
                    <div class="mt-2">
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation" class="text-center py-2" required/>
                        
                        <x-form-error name="password_confirmation" />
                    </div>
                </x-form-field>

            </div>
        </div>
    </div>
    
    <div class="mt-6 flex items-center justify-center gap-x-6">
        <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
        <x-form-button :logout=false >Register</x-form-button>
    </div>
</form>
</x-layout>