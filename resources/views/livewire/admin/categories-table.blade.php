<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4" placeholder="Search Categories...">
        </div>
        <div class="w-1/6 mx-1 relative">
            <select wire:model="sortField" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded">
                <option value="id">Id</option>
                <option value="name">Name</option>
                <option value="created_at">Added Date</option>
            </select>
            
        </div>

        <div class="w-1/6 mx-1 relative">
            <select wire:model="sortAsc" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
               
            </select>
        </div>

        <div class="w-1/6 mx-1 relative">
        
            <button wire:click="deleteBrands" class="block w-full bg-red-200 border border-gray-200 text-white py-3 px-4 pr-8 rounded">
                Delete
            </button>
        </div>
    
    </div>
    @if(!empty($categories))
     
        <table class="table-auto w-full mb-6">
            <tr>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>

         @foreach($categories as $category)
            <tr>
                @if($loop->even)
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                @elseif($loop->odd)
                    <td class="border px-4 py-2 bg-gray-100">{{ $category->id }}</td>
                    <td class="border px-4 py-2 bg-gray-100">{{ $category->name }}</td>
                @endif

                <td>
                <a href="{{ route('admin.categories.show', $category->id) }}"><button class="text-white bg-purple-600 hover:bg-purple-900 px-2">View</button></a>
                <a href="{{ route('admin.categories.edit', $category->id) }}"><button class="text-white bg-yellow-600 hover:bg-yellow-900 px-2">Edit</button></a>
                <button>Delete</button></td>
            </tr>
            @endforeach
        </table>

     {{ $categories->links() }}
    @else($categories)
     <p class="text-center">No categories yet</p>
    @endif
    
</div>
