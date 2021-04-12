<x-admin.layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-weight-bolder text-xl text-grey-600">
                Dashboard
            </h2>
            <a href="{{ route('admin.users.create') }}" class="text-white bg-blue-600 px-2">Add New</a>
        </div>
    
    </x-slot>

    <div class="body">
        <div class="w-full">
            Admin Panel
        
        </div>
    </div>

</x-admin.layout>


