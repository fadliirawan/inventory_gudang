<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $products = Product::when($search, function ($query, $search) {

            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('code', 'like', "%{$search}%");

        })->latest()->paginate(10);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()
                ->route('products.index')
                ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()
                ->route('products.index')
                ->with('success', 'Produk berhasil diupdate');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
                ->route('products.index')
                ->with('success', 'Produk berhasil dihapus');
    }

    /*
    |--------------------------------------------------------------------------
    | EXPORT EXCEL
    |--------------------------------------------------------------------------
    */

    public function exportExcel()
    {
        return Excel::download(
            new ProductsExport,
            'products.xlsx'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | EXPORT PDF
    |--------------------------------------------------------------------------
    */

    public function exportPdf()
    {
        $products = Product::all();

        $pdf = Pdf::loadView(
            'products.pdf',
            compact('products')
        );

        return $pdf->download('products.pdf');
    }
}