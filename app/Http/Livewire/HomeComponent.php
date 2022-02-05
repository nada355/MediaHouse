<?php

namespace App\Http\Livewire;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Category;
use Cart;


use Livewire\Component;

class HomeComponent extends Component
{

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }
    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
    }

    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $mcategories = Category::orderBy('created_at','DESC')->get()->take(7);
        $popular_products=Product::inRandomOrder()->limit(7)->get();
        $best_sale=Product::inRandomOrder()->limit(3)->get();
        $related_products = Product::inRandomOrder()->limit(5)->get();
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);


        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'mcategories'=>$mcategories,'popular_products'=>$popular_products,'related_products'=>$related_products,'best_sale'=>$best_sale,'sproducts'=>$sproducts])->layout('layouts.base');
    }
}
