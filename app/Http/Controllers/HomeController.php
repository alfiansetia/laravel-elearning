<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $query = Category::query();
        if ($request->filled('search')) {
            $query->orWhere('name', 'like', "%$request->search%");
            $query->orWhereRelation('products', 'name', 'like', "%$request->search%");
        }
        $category = $query->with('products')->withCount('products')->paginate(8)->withQueryString();
        return view('pages.home', compact('category'))->with(['title' => 'Home']);
    }
}
