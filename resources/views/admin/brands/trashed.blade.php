<x-admin.layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-weight-bolder text-xl text-grey-600">
                Trashed Brands
            </h2>
            <a href="{{ route('admin.brands.index') }}" class="text-white bg-blue-600 px-2">All Brands</a>
        </div>
    
    </x-slot>

    <div class="body">
        <div class="w-full">
        @livewire('admin.trashed-brands-table')
        
        </div>
    </div>

</x-admin.layout>


