<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('product')->latest()->get();
        return view('admin.sales.index', compact('sales'));
    }

    public function create()
    {
        $sale     = new Sale();
        $products = Product::latest()->get();
        return view('admin.sales.create', compact('sale', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required'
        ]);

        $sale = Sale::create( $request->all() );

        return redirect()->route('admin.sales.edit', $sale);
    }

    public function edit(Sale $sale)
    {
        $products = Product::latest()->get();
        return view('admin.sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'product_id' => 'required'
        ]);

        $sale->update( $request->all() );

        return redirect()->route('admin.sales.edit', $sale);
    }

    public function registerByQr(Request $request)
    {
        $request->validate([
            'product_id' => 'required'
        ]);

        Sale::create( $request->all() );

        return response('Success', 201);
    }
}
