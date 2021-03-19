<div class="w-full flex pb-19">
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

    
    @else($categories)
     <p class="text-center">No categories yet</p>
    @endif
    
</div>
