<x-admin.layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-weight-bolder text-xl text-grey-600">
                All Brands
            </h2>
            <a href="{{ route('admin.brands.create') }}" class="text-white bg-blue-600 px-2">Add New</a>
        </div>
    
    </x-slot>

    <div class="body">
        <div class="w-full">
        @livewire('admin.brands-table')
        
        </div>
    </div>

</x-admin.layout>


