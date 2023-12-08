<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        return view('pages.productcategory', [
            'title'     => $category->name,
            'category'  => $category->load('products'),
            'products'  => Product::where('category_id', $category->id)->paginate(8),
        ]);
    }
}
