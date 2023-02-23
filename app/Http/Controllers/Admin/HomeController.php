<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flavor;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Type;
use App\Models\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.home')->only('index');
    }

    public function index()
    {

        $user = User::find(Auth()->user()->id);

        if ($user->hasRole('Admin')) {
            $amountSales    = Sale::count();
            $amountProducts = Product::count();
            $amountTypes    = Type::count();
            $amountFlavors  = Flavor::count();
            
            $amountSalesByDay    = Sale::whereYear('sales.created_at', date('Y')) 
                                    ->whereMonth('sales.created_at', date('m'))
                                    ->whereDay('sales.created_at', date('d'))
                                    ->count();

            $totalMoney     = Sale::join('products', 'sales.product_id', '=', 'products.id')
                                    ->selectRaw('SUM(products.price) as total_money')
                                    ->get()[0]
                                    ->total_money;

                                    

            $monthMoney     = Sale::join('products', 'sales.product_id', '=', 'products.id')
                                    ->whereYear('sales.created_at', date('Y'))
                                    ->whereMonth('sales.created_at', date('m'))
                                    ->selectRaw('SUM(products.price) as month_money, MONTH(sales.created_at) as date_month')
                                    ->groupby('date_month')
                                    ->get();


            $dayMoney       = Sale::join('products', 'sales.product_id', '=', 'products.id')
                                    ->whereYear('sales.created_at', date('Y')) 
                                    ->whereMonth('sales.created_at', date('m'))
                                    ->whereDay('sales.created_at', date('d'))
                                    ->selectRaw('SUM(products.price) as day_money, DAY(sales.created_at) as date_day')
                                    ->groupby('date_day')
                                    ->get();


            $monthMoney = $monthMoney->count() > 0 ? $monthMoney[0]->month_money : 0;
            $dayMoney   = $dayMoney->count() > 0 ? $dayMoney[0]->day_money : 0;
            


            // Chart one - Sales current year by months
            $totalMoneyByMonths   = Sale::join('products', 'sales.product_id', '=', 'products.id')
                                    ->whereYear('sales.created_at', date('Y'))
                                    ->selectRaw('SUM(products.price) as month_money, MONTH(sales.created_at) as date_month')
                                    ->groupby('date_month')
                                    ->get();

            $dataChartOne = array_fill(0, 12, 0);

            foreach($totalMoneyByMonths as $item) {
                $dataChartOne[$item['date_month'] - 1] = $item['month_money'];
            }

            $chartOne = json_encode(
                [
                    'series' => [
                        'name' => 'Sales',
                        'data' => $dataChartOne,
                    ],
                    'categories' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
                ]
            );


            // Chart two - Number of sales products
            $numberProductsByType = Sale::join('products', 'sales.product_id', '=', 'products.id')
                                        ->selectRaw('products.name,  COUNT(*) as salesTotal')
                                        ->groupby('products.name')
                                        ->get();

            $seriesChartTwo = [];
            $labelsChartTwo = [];

            foreach ($numberProductsByType as $product) {
                array_push($seriesChartTwo, $product['salesTotal']);
                array_push($labelsChartTwo, $product['name']);
            }

            $chartTwo = json_encode(
                [
                    'series' => $seriesChartTwo,
                    'labels' => $labelsChartTwo
                ]
            );

            $sales = Sale::with('product')->latest()->limit(5)->get();

            return view('admin.index', compact('amountSales', 'amountProducts', 'amountTypes', 'amountFlavors', 'amountSalesByDay', 'totalMoney', 'monthMoney', 'dayMoney', 'chartOne', 'chartTwo', 'sales', 'user'));
        }

        return view('admin.index', compact('user'));
    }
}
