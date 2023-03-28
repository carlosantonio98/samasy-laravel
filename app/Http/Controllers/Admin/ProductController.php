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

    public function __construct()
    {
        $this->middleware('can:admin.products.index')->only('index');
        $this->middleware('can:admin.products.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.products.create
        $this->middleware('can:admin.products.edit')->only('edit', 'update');
        $this->middleware('can:admin.products.destroy')->only('destroy');
    }

    public function index()
    {
        $products = Product::latest()->paginate();
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
        Product::create( $request->all() + [ 'user_id' => Auth()->user()->id ] );
        return redirect()->route('admin.products.index')->with('info', ['type' => 'success', 'title' => 'Product created!', 'text' => 'Product created successfully.']);
    }


    public function edit(Product $product)
    {
        $types   = Type::all();
        $flavors = Flavor::all();

        return view('admin.products.edit', compact('product', 'types', 'flavors'));
    }

    public function update(UpdateProduct $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('info', ['type' => 'success', 'title' => 'Product updated!', 'text' => 'Product updated successfully.']);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('info', ['type' => 'success', 'title' => 'Product deleted!', 'text' => 'Product deleted successfully.']);
    }
}
