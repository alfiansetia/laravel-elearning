<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CategoryController extends Controller
{
    public function showProductByCategory(Category $category)
    {
        // dd($category);
        $products = DB::table('products')
            ->join('categories', 'products.CategoryID', '=', 'categories.CategoryID')
            ->select('products.*')
            ->where('products.CategoryID', '=', $category->CategoryID)
            ->paginate(8);
        return view('pages.productcategory', [
            'title' => $category->categoryName,
            'products' => $products,
            'category' => $category,
        ]);
    }
}
