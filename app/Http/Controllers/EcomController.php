<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubImage;
use Cart;
use Illuminate\Http\Request;

class EcomController extends Controller
{
    public function index()
    {
        return view('front.home.home', [
            'brands'        => Brand::orderBy('id', 'desc')->get(),
            'categories'    => Category::all(),
            'products'      => Product::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function about()
    {
        return view('front.about.about', [
            'categories'    => Category::all(),
            'brands'        => Brand::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function story()
    {
        return view('front.story.story', [
            'categories'    => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function team()
    {
        return view('front.team.team', [
            'categories'    => Category::all(),
            'brands'        => Brand::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function gallery()
    {
        return view('front.gallery.gallery', [
            'categories'    => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function faq()
    {
        return view('front.faq.faq', [
            'categories'    => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function subCategoryProduct($id)
    {
        return view('front.product.list', [
            'products'      => Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get(),
            'categories'    => Category::all(),
            'sub_category'  => SubCategory::find($id),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function brandProduct($id)
    {
        return view('front.product.list', [
            'products'      => Product::where('brand_id', $id)->orderBy('id', 'desc')->get(),
            'categories'    => Category::all(),
            'sub_category'  => Brand::find($id),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function productDetails($id)
    {
        return view('front.product.details', [
            'categories'    => Category::all(),
            'product'       => Product::find($id),
            'sub_images'    => SubImage::where('product_id', $id)->get(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function search(Request $request)
    {
        return view('front.product.search', [
            'products'      => Product::where('name', 'like', '%'.$request->input('query').'%')->get(),
            'categories'    => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }
}
