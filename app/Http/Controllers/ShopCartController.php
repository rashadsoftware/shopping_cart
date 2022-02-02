<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ShopCartController extends Controller
{
    public function index(){
        $products=Products::all();
        return view('index', compact('products'));
    }
    // add to cart
	public function addToCart($id){
		$product=Products::find($id);

        if(!$product) {

            abort(404);
   
        }

        $quantity_product=$product->quantity;
        if($quantity_product > 0){
            $cart=session()->get('cart');
		
            // if cart is empty then this the first product
            if(!$cart) {

                $cart = [
                        $id => [
                            "name" => $product->name,
                            "category" => $product->category,
                            "quantity" => 1,
                            "description" => $product->description,
                            "price" => $product->price,
                            "photo" => $product->photo
                        ]
                ];
    
                session()->put('cart', $cart);
    
                return redirect()->back()->with('success', 'added to cart successfully!');
            }

            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {

                $cart[$id]['quantity']++;

                session()->put('cart', $cart); // this code put product of choose in cart

                return redirect()->back()->with('success', 'Product added to cart successfully!');

            }

            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->name,
                "category" => $product->category,
                "quantity" => 1,
                "description" => $product->description,
                "price" => $product->price,
                "photo" => $product->photo
            ];

            session()->put('cart', $cart); // this code put product of choose in cart

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        } else {
            return redirect()->back()->with('error', 'This product is out of stock!');
        }
	}

    public function card(){
        return view('card');
    }
    // update product of choose in cart
	public function updateToCart(Request $request){		
		if($request->id and $request->quantity){
			$cart=session()->get('cart');
			$cart[$request->id]['quantity']=$request->quantity;
			session()->put('cart', $cart);
			session()->flash('success', 'Card updated successfully');
		}
	}
    public function removeFromCart(Request $request){
        if($request->id){
            $cart=session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Card removed successfully');
        }
    }

    public function checkout(){
        return view('checkout');
    }
}
