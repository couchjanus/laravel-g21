<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('brand')->with('category')->with('pictures')->paginate();

        // dd($products);
        return view('web.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::whereId($id)->with('brand')->with('category')->with('pictures')->firstOrFail();

        // dd($products);
        return view('web.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function addProduct(Request $request, $quantity, $itemId)
    {
        $product = Product::whereId($request->productId)->with('brand')->with('category')->with('pictures')->firstOrFail();
        $options = ['picture' => $product->pictures[0]->cover_path];
        Cart::add($itemId, $product->name, $request->price, $quantity, $options);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        $quantity = $request->quantity ?? 1;
        $itemId = $request->productId;

        if(Cart::isEmpty()){
            $this->addProduct($request, $quantity, $itemId);
        }else{
            if(Cart::get($itemId)){
                Cart::update($itemId, [
                    'quantity' => $quantity
                ]);
            }else{
                $this->addProduct($request, $quantity, $itemId);
            }
            
        }

        return redirect()->back();
    }
}
