<x-admin.layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-weight-bolder text-xl text-grey-600">
                Edit Category
            </h2>
            <a href="{{ route('admin.categories.index') }}" class="text-white bg-blue-600 px-2">All categories</a>
            
        </div>
    </x-slot>

    <div class="body">
        <div class="w-full">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white border-b border-gray-200" >
                <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">       
            @csrf
            @method('PUT')
            <div class="mb-4">
            <label $for="name" class="text-xl text-gray-600">Category Name</label>
            <br>
            <input name="name" id="name" value="{{ $category->name }}" class="border-2 border-gray-200 p-2 w-full @error('name') is-invalid @enderror">
            @error('name')
            <div class="text-red-500 border-2 border-gray-200 p-2 w-full">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-4">
                <label $for="description" class="text-xl text-gray-600">Category Description</label>
                <input name="description" id="description" value="{{ $category->description }}"  class="border-2 border-gray-200 p-2 w-full @error('name') is-invalid @enderror">
            </div>


            <div class="mb-4">
                <label $for="status" class="text-xl text-gray-600">Category Statue</label>
                <select name="status" class="border-2 border-gray-200 p-2 w-full">
                    <option value="">Choose one...</option> 
                    @foreach([0=>"Not Active", 1=>"Active"] as $key => $val)
                        <option value="{{ $key }}" {{ ($category->status===$key)?'selected':'' }}>{{ $val }}</option> 
                    @endforeach
                </select>
            
            </div>
            
            <input name="submit" type="submit" class="bg-blue-500 text-white px-2 py-1" value="Update category">
        </form>
                </div>
            </div>
        
        </div>
        
        
        </div>
    </div>

</x-admin.layout>
