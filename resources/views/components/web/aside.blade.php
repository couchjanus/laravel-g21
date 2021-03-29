<aside class="col-span-2 h-screen py-5 bg-white">
    <div class="mt-5">
        <div class="bg-blue-50 rounded rounded-r-3xl py-3 pl-5">
            <button class="text-blue-500 flex items-center focus:outline-none">Categores</button>
        </div>
        @foreach($categories as $category)
            {{--  --}}
            @if($category->status !== 1)
                @continue
            @endif 
            <div class="mt-1 rounded rounded-r-3xl pl-6 py-3">
                <button class="text-gray-600 flex items-center focus:outline-none">
                <input type="checkbox">&nbsp;&nbsp;{{ $category->name }}
                </button>
            </div>
        
    @endforeach
    </div>
    
</aside>