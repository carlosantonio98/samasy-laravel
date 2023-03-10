<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flavor;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Type;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.home')->only('index');
    }

    public function index()
    {

        $user = auth()->user();

        $amountSales    = new Sale();
        $amountProducts = Product::count();
        $amountTypes    = Type::count();
        $amountFlavors  = Flavor::count();

        $amountSalesByDay = Sale::whereYear('sales.created_at', date('Y')) 
            ->whereMonth('sales.created_at', date('m'))
            ->whereDay('sales.created_at', date('d'));


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


        $sales = Sale::with('product')->latest()->limit(5);


        if (!$user->hasRole('Admin')) {
            $amountSales      = $amountSales->whereUserId($user->id);
            $amountSalesByDay = $amountSalesByDay->whereUserId($user->id);
            $totalMoney       = $totalMoney->where('sales.user_id', $user->id);
            $monthMoney       = $monthMoney->where('sales.user_id', $user->id);
            $dayMoney         = $dayMoney->where('sales.user_id', $user->id);
            $sales            = $sales->whereUserId($user->id);
        }


        $amountSales      = $amountSales->count();
        $amountSalesByDay = $amountSalesByDay->count();
        $totalMoney       = number_format($totalMoney->get()[0]->total_money, 2);
        $monthMoney       = $monthMoney->groupby('date_month')->get();
        $dayMoney         = $dayMoney->groupby('date_day')->get();
        $sales            = $sales->get();

        $monthMoney = number_format($monthMoney[0]->month_money ?? 0, 2);
        $dayMoney   = number_format($dayMoney[0]->day_money ?? 0, 2);

        $chartOne = $this->getDataChartOne();
        $chartTwo = $this->getDataChartTwo();

        return view('admin.index', compact('amountSales', 'amountProducts', 'amountTypes', 'amountFlavors', 'amountSalesByDay', 'totalMoney', 'monthMoney', 'dayMoney', 'chartOne', 'chartTwo', 'sales', 'user'));
    }
    
    public function getDataChartOne()
    {
        $user = auth()->user();

        // Sales current year by months
        $totalMoneyByMonths = Sale::join('products', 'sales.product_id', '=', 'products.id')
            ->selectRaw('SUM(products.price) as month_money, MONTH(sales.created_at) as date_month')
            ->whereYear('sales.created_at', date('Y'));

        if (!$user->hasRole('Admin')) {
            $totalMoneyByMonths = $totalMoneyByMonths->where('sales.user_id', $user->id);
        }

        $totalMoneyByMonths = $totalMoneyByMonths->groupby('date_month')->get();

        // Data
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

        return $chartOne;
    }

    public function getDataChartTwo()
    {
        $user = auth()->user();

        // Number of sales products
        $numberProductsByType = Sale::join('products', 'sales.product_id', '=', 'products.id')
            ->selectRaw('products.name,  COUNT(*) as salesTotal');

        if (!$user->hasRole('Admin')) {
            $numberProductsByType = $numberProductsByType->where('sales.user_id', $user->id);
        }

        $numberProductsByType = $numberProductsByType->groupby('products.name')->get();

        // Data
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

        return $chartTwo;
    }
}