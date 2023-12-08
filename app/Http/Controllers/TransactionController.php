<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HeaderTransaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function history()
    {
        $this->authorize('user');
        $data = HeaderTransaction::where('UserID', auth()->id())->get();
        // dd($data->all());
        return view('customer.history', [
            'title' => 'History',
            'products' => $data->all(),
        ]);
    }

    public function checkout($totalprice)
    {
        $this->authorize('user');
        $data = Cart::all();
        // dd($data);
        $headerTransaction = HeaderTransaction::create([
            'UserID' => Auth::user()->UserID,
            'totalprice' => $totalprice,
        ]);
        //store to
        foreach ($data as $item) {
            $transactionDetail = new TransactionDetail();
            $product = Product::where('ProductID', $item->ProductID)->first();
            $product->save();
            // dd($product);
            $transactionDetail->HeaderTransactionID = $headerTransaction->HeaderTransactionID;
            $transactionDetail->ProductID = $item->ProductID;
            $transactionDetail->quantity = $item->quantity;
            $transactionDetail->subtotal = $item->totalprice;
            $transactionDetail->save();
        }
        Cart::truncate();
        return redirect(route('cart'))->with('checkout', 'Checkout success!');
    }
}
