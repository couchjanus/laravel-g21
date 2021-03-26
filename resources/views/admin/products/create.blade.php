<x-admin.layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-weight-bolder text-xl text-grey-600">
                All Products
            </h2>
            <a href="{{ route('admin.products.index') }}" class="text-white bg-blue-600 px-2">All products</a>
        </div>
    
    </x-slot>

    @livewire('admin.create-product')

</x-admin.layout>
