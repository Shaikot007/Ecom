<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Product;
use App\Models\SubImage;

class ProductController extends Controller
{
    private $products;
    private $product;
    private $categories;
    private $subCategories;
    private $brands;
    private $units;
    private $subImages;

    public function index()
    {
        $this->categories       = Category::all();
        $this->subCategories    = SubCategory::all();
        $this->brands           = Brand::all();
        $this->units            = Unit::all();

        return view('admin.product.add', [
            'categories'        => $this->categories,
            'subCategories'     => $this->subCategories,
            'brands'            => $this->brands,
            'units'             => $this->units
        ]);
    }

    public function create(Request $request)
    {
        $this->product = Product::newProduct($request);
        SubImage::newSubImage($this->product, $request);
        return redirect()->back()->with('message', 'Product info create successfully.');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function edit($id)
    {
        $this->product          = Product::find($id);
        $this->categories       = Category::all();
        $this->subCategories    = SubCategory::all();
        $this->brands           = Brand::all();
        $this->units            = Unit::all();
        $this->subImages        = SubImage::where('product_id', $id)->get();

        return view('admin.product.edit', [
            'product'           => $this->product,
            'categories'        => $this->categories,
            'subCategories'     => $this->subCategories,
            'brands'            => $this->brands,
            'units'             => $this->units,
            'subImages'         => $this->subImages
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product info updated successfully.');
    }

    public function delete(Request $request, $id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Product info deleted successfully.');
    }

    public function getSubCategory()
    {
        $this->subCategories = SubCategory::where('category_id', $_GET['id'])->get();
        return json_encode($this->subCategories);
    }
}
