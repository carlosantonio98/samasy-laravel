<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Stock;

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
        $stocks   = Stock::with('product')->where('amount', '>=', 1)->get();
        $products = [];

        foreach($stocks as $stock) {
            array_push($products, $stock->product);
        }

        return view('admin.sales.create', compact('sale', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required'
        ]);

        $stock = Stock::where('product_id', $request['product_id'])->where('amount', '>=', 1)->first();

        if ($stock) {
            $sale = Sale::create( $request->all() + [ 'user_id' => Auth()->user()->id ] );
            $stock->update([ 'amount' => $stock->amount - 1 ]);
            
            return redirect()->route('admin.sales.edit', $sale);
        }

        return redirect()->route('admin.stock.create');
    }

    public function edit(Sale $sale)
    {
        $stocks   = Stock::with('product')->where('amount', '>=', 1)->get();
        $products = [];

        foreach($stocks as $stock) {
            array_push($products, $stock->product);
        }

        return view('admin.sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'product_id' => 'required'
        ]);

        $oldStock = Stock::where('product_id', $sale->product_id)->first();
        $newStock = Stock::where('product_id', $request['product_id'])->where('amount', '>=', 1)->first();

        if ($newStock) {
            $oldStock->update([ 'amount' => $oldStock->amount + 1 ]);
            $newStock->update([ 'amount' => $newStock->amount - 1 ]);

            $sale->update( $request->all() );
        }

        return redirect()->route('admin.sales.edit', $sale);
    }

    public function destroy(Sale $sale) {
        $stock = Stock::where('product_id', $sale->product_id)->first();
        
        $stock->update([ 'amount' => $stock->amount + 1 ]);
        $sale->delete();

        return redirect()->route('admin.sales.index');
    }

    public function registerByQr(Request $request)
    {
        $request->validate([
            'product_id' => 'required'
        ]);

        $stock = Stock::where('product_id', $request['product_id'])->where('amount', '>=', 1)->first();

        if ($stock) {
            Sale::create( $request->all() );
            $stock->update([ 'amount' => $stock->amount - 1 ]);
        
            return response('Success', 201);
        }

        return response('UnStock', 201);
    }
}
