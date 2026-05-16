<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\OutgoingGoods;
use Illuminate\Http\Request;

class OutgoingGoodsController extends Controller
{
    public function index()
    {
        $outgoingGoods = OutgoingGoods::latest()->get();

        return view('outgoing-goods.index', compact('outgoingGoods'));
    }

    public function create()
    {
        $products = Product::all();

        return view('outgoing-goods.create', compact('products'));
    }

    public function store(Request $request)
    {
        OutgoingGoods::create([
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'date' => $request->date,
            'destination' => $request->destination,
        ]);

        $product = Product::find($request->product_id);

        $product->stock -= $request->qty;

        $product->save();

        return redirect()->route('outgoing-goods.index');
    }
}