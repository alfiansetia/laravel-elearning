<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function manage(Request $request)
    {
        $products = Product::query();
        if ($request->filled('search')) {
            $products->orWhere('name', 'like', "%$request->search%");
            $products->orWhereRelation('category', 'categoryName', 'like', "%$request->search%");
        }
        $this->authorize('admin');
        return view('admin.manage', [
            'title' => 'Manage',
            'product' => $products->paginate(10)->withQueryString(),
        ]);
    }
}
