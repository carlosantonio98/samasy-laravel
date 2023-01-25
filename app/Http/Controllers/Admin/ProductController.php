<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Flavor;
use App\Models\Product;
use App\Models\Type;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product();
        $types   = Type::all();
        $flavors = Flavor::all();

        return view('admin.products.create', compact('product', 'types', 'flavors'));
    }

    public function store(StoreProduct $request)
    {
        $product = Product::create( $request->all() );
        return redirect()->route('admin.products.edit', $product);
    }


    public function edit(Product $product)
    {
        $types   = Type::all();
        $flavors = Flavor::all();

        return view('admin.products.edit', compact('product', 'types', 'flavors'));
    }

    public function update(UpdateProduct $request, Product $product)
    {
        $product->update( $request->all() );
        return redirect()->route('admin.products.edit', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
