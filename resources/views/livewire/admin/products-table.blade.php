<div>
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4" placeholder="Search Brans...">
        </div>
        <div class="w-1/6 mx-1 relative">
            <select wire:model="sortField" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded">
                <option value="id">Id</option>
                <option value="name">Name</option>
                <option value="name">Price</option>
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
            <button wire:click="deleteProducts" class="block w-full bg-red-200 border border-gray-200 text-white py-3 px-4 pr-8 rounded">
                Delete
            </button>
        </div>
    
    </div>

    @if(!empty($products))
        <table class="table-auto w-full mb-6">
            <tr>
                <th class="px-4 py-2"></th>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Brand</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Created At</th>
                <th class="px-4 py-2">Actions</th>
            </tr>

            @foreach($products as $product)
            <tr>
                
                <td class="border px-4 py-2">
                    <input type="checkbox" value="{{ $product->id }}">
                </td>
                <td class="border px-4 py-2">{{ $product->id }}</td>
                <td class="border px-4 py-2">{{ $product->name }}
                </td>
                <td class="border px-4 py-2">{{ $product->price }}
                </td>
                 <td class="border px-4 py-2">{{ $product->brand->name }}
                </td>
                 <td class="border px-4 py-2">{{ $product->category->name }}
                </td>
                 <td class="border px-4 py-2">{{ App\Enums\ProductStatus::getKey($product->status) }}
                </td>
                <td class="border px-4 py-2">{{ $product->created_at->diffForHumans() }}
                </td>
                <td>
                <a href="{{ route('admin.products.show', $product->id) }}"><button type="submit" class="text-white bg-purple-600 hover:bg-purple-900 px-2">View</button></a>
                <a href="{{ route('admin.products.edit', $product->id) }}"><button type="submit" class="text-white bg-yellow-600 hover:bg-yellow-900 px-2">Edit</button></a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are You Sure');" style="display:inline-block;">
                @method("DELETE") @csrf <button type="submit" class="text-white bg-red-500" value="delete">delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $products->links() }}
    @else
        <h3 class="text-center">Whoops! No products were found</h3>
    @endif
</div>
