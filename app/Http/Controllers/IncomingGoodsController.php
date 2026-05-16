<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\IncomingGoods;
use Illuminate\Http\Request;

class IncomingGoodsController extends Controller
{
    public function index()
    {
        $incomingGoods = IncomingGoods::with('product', 'supplier')
            ->latest()
            ->get();

        return view('incoming-goods.index', compact('incomingGoods'));
    }

    public function create()
    {
        $products = Product::all();

        $suppliers = Supplier::all();

        return view('incoming-goods.create', compact('products', 'suppliers'));
    }

    public function store(Request $request)
    {
        IncomingGood::create([
            'product_id' => $request->product_id,
            'supplier_id' => $request->supplier_id,
            'qty' => $request->qty,
            'date' => $request->date,
        ]);

        return redirect()
            ->route('incoming-goods.index')
            ->with('success', 'Barang masuk berhasil ditambahkan');
    }
}