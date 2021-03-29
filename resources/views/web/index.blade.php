<x-web.layout>
    @section('aside')
    <x-web.aside></x-web.aside>
    @endsection

    <div class="body-font text-gray-600">
        <div class="container px-5 py-10 mx-auto w-full">
            {{ $products->links() }}
            <div class="flex flex-wrap -m-4">
                @forelse($products as $product)
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/storage/{{ $product->pictures[0]->cover_path ?? null }}" alt="{{ $product->name }}">
                        <div class="p-6">
                            <div class="flex items-center flex-wrap ">
                                
                                <span class="title-font text-lg font-medium text-gray-900 mb-3 mr-3 inline-flex pr-3 border-r-2 border-gray-200">{{ $product->name }}</span>
                                <a class="title-font text-lg font-medium text-gray-900 mb-3 mr-3 inline-flex pr-3" href="{{ route('site.shop.product', $product->id) }}">Detail
                                    
                                </a>
                            </div>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Add To Cart
                                    
                                </a>
                                <span class="font-bold text-gray-700 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                                    ${{ $product->price }}
                                </span>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <h2>No products yet</h2>
                @endforelse
            </div>
            {{ $products->links() }}
        </div>
    </div>

</x-web.layout>
