<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SaleResource;
use App\Models\Sale;
use App\Models\Stock;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function newSale(Request $request)
    {   
        $request->validate([
            'product_id' => 'required',
            'user_id'    => 'required'
        ]);

        $stock = Stock::where('product_id', $request['product_id'])->where('amount', '>=', 1)->first();

        if ($stock) {
            Sale::create( $request->all() );
            $stock->update([ 'amount' => $stock->amount - 1 ]);
        
            return response()->json(['message' => 'success'], 201);
        }

        return response()->json(['message' => 'unstock'], 422);
    }

    public function allSales(Request $request)
    {
        $user = $request->user();
        $sales = Sale::with('product')->latest();

        if (!$user->hasRole('Admin')) {
            $sales = $sales->whereUserId($user->id);
        }
        
        return SaleResource::collection(
            $sales->get()
        );
    }
    
    public function moneySales(Request $request)
    {
        $user = $request->user();

        $totalMoney = Sale::join('products', 'sales.product_id', '=', 'products.id')
            ->selectRaw('SUM(products.price) as total_money');

        $monthMoney = Sale::join('products', 'sales.product_id', '=', 'products.id')
            ->selectRaw('SUM(products.price) as month_money, MONTH(sales.created_at) as date_month')
            ->whereYear('sales.created_at', date('Y'))
            ->whereMonth('sales.created_at', date('m'));

        $dayMoney = Sale::join('products', 'sales.product_id', '=', 'products.id')
            ->selectRaw('SUM(products.price) as day_money, DAY(sales.created_at) as date_day')
            ->whereYear('sales.created_at', date('Y')) 
            ->whereMonth('sales.created_at', date('m'))
            ->whereDay('sales.created_at', date('d'));

        if (!$user->hasRole('Admin')) {
            $totalMoney = $totalMoney->where('sales.user_id', $user->id);
            $monthMoney = $monthMoney->where('sales.user_id', $user->id);
            $dayMoney   = $dayMoney->where('sales.user_id', $user->id);
        }

        $totalMoney = number_format($totalMoney->get()[0]->total_money, 2);
        $monthMoney = $monthMoney->groupby('date_month')->get();
        $dayMoney   = $dayMoney->groupby('date_day')->get();

        $monthMoney = number_format($monthMoney[0]->month_money ?? 0, 2);
        $dayMoney   = number_format($dayMoney[0]->day_money ?? 0, 2);

        return response()->json(compact('totalMoney', 'monthMoney', 'dayMoney'));
    }
}
