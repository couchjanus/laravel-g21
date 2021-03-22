<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4" placeholder="Search Brans...">
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

    @if(!empty($brands))
        <table class="table-auto w-full mb-6">
            <tr>
                <th class="px-4 py-2"></th>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Created At</th>
                <th class="px-4 py-2">Actions</th>
            </tr>

            @foreach($brands as $brand)
            <tr>
                
                <td class="border px-4 py-2">
                    <input type="checkbox" value="{{ $brand->id }}">
                </td>
                <td class="border px-4 py-2">{{ $brand->id }}</td>
                <td class="border px-4 py-2">{{ $brand->name }}
                </td>
                <td class="border px-4 py-2">{{ $brand->created_at->diffForHumans() }}
                </td>
                <td>
                <a href="{{ route('admin.brands.show', $brand->id) }}"><button type="submit" class="text-white bg-purple-600 hover:bg-purple-900 px-2">View</button></a>
                <a href="{{ route('admin.brands.edit', $brand->id) }}"><button type="submit" class="text-white bg-yellow-600 hover:bg-yellow-900 px-2">Edit</button></a>
                <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Are You Sure');" style="display:inline-block;">
                @method("DELETE") @csrf <button type="submit" class="text-white bg-red-500" value="delete">delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $brands->links() }}
    @else
        <h3 class="text-center">Whoops! No brands were found</h3>
    @endif
</div>
