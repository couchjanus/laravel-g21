<x-web.layout>

    <div class="body-font text-gray-600">
        <div class="container mt-6 px-5 py-10 mx-auto w-full">
           
            <div class="md:flex-1 px-4">
                @if(\Cart::isEmpty())
                    <div class="alert alert-warning">Your shopping cart is empty</div>
                @else
                    <div class="card">
                        <table class="table table-hover border">
                            <tr>
                                <th scope="col" class="px-4">Product</th>
                                <th scope="col" class="px-4">Quantity</th>
                                <th scope="col" class="px-4">Price</th>
                                <th scope="col" class="px-4">Action</th>
                            </tr>
                             @foreach(\Cart::getContent() as $product)
                             <tr class="border-2">
                             <td>
                             <figure class="media">
                             <figcaption class="media-body">
                             <h5 class="title text-truncate">{{ Str::words($product->name, 20) }}</h5>
                                @foreach($product->attributes as $ley => $value)
                                    <img src="/storage/{{ $value }}" width=100>
                                @endforeach
                             </figcaption>
                             
                             </figure>
                             </td>
                             <td  class="border-2">
                                {{ $product->quantity }}
                             </td>
                             <td  class="border-2">
                                {{ config('settings.currency_symbol').$product->price }}
                             </td>
                             <td class="text-right border-2">
                                <a href="{{ route('cart.item.remove', $product->id)  }}" class="button button-red">&times;</a>
                             </td>
                             </tr>

                             @endforeach
                        </table>
                    </div>
                @endif
                
            </div>
           
        </div>
    </div>

</x-web.layout>
