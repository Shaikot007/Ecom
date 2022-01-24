<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $product;

    public function add(Request $request, $id)
    {
        $this->product = Product::find($id);

        Cart::add([
            'id'        => $this->product->id,
            'name'      => $this->product->name,
            'qty'       => $request->quantity,
            'price'     => $this->product->selling_price,
            'weight'    => 0,
            'options'   => ['image' => $this->product->image]
        ]);

        return redirect('/show-cart')->with('message', 'Product info add into the cart successfully.');
    }

    public function show()
    {
        return view('front.cart.cart', [
            'categories'    => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function update(Request $request, $id)
    {
        Cart::update($id, $request->quantity);
        return redirect()->back()->with('message', 'Cart product info update successfully.');
    }

    public function delete($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message', '<span class="text-danger">Cart product info delete successfully.</span>');
    }
}
