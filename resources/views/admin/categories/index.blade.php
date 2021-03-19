<x-admin.layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-weight-bolder text-xl text-grey-600">
                All Catrgories
            </h2>
            <a href="{{ route('admin.categories.create') }}" class="text-white bg-blue-600 px-2">Add New</a>
        </div>
    
    </x-slot>

    <div class="body">
        <div class="w-full">
        @livewire('admin.categories-table')
        
        </div>
    </div>

</x-admin.layout>


