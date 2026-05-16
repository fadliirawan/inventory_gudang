<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\IncomingGoods;
use App\Models\OutgoingGoods;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();

        $totalStock = Product::sum('stock');

        $lowStock = Product::where('stock', '<=', 5)->count();

        $totalValue = Product::sum(\DB::raw('stock * price'));

        // TOTAL BARANG MASUK
        $totalIncoming = IncomingGoods::sum('qty');

        // TOTAL BARANG KELUAR
        $totalOutgoing = OutgoingGoods::sum('qty');

        return view('dashboard', compact(
            'totalProducts',
            'totalStock',
            'lowStock',
            'totalValue',
            'totalIncoming',
            'totalOutgoing'
        ));
    }
}