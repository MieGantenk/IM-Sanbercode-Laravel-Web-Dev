<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index() {
        $products = Product::with('transactions')->get();
        return view('src.template.transaction', compact('products'));
    }

    public function create() {
        $products = Product::with('transactions')->get();
        return view('src.template.formtransaction', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:in,out',
            'amount' => 'required|integer',
            'notes' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);

        if ($request->type === 'in') { 
            $product->stock += $request->amount; 
        } elseif ($request->type === 'out') { 
            if ($product->stock < $request->amount) 
                { return redirect()->back()->with('error', 'Stok tidak mencukupi!'); 
            } 
            $product->stock -= $request->amount; 
        }

        $product->save();

        Transaction::create([
            'product_id' => $product->id, 
            'user_id' => auth()->id(),
            'type' => $request->type, 
            'amount' => $request->amount, 
            'notes' => $request->notes,
        ]);

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil');
    }
}
