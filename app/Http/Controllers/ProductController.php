<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\HeaderTransaction;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function home()
    {
        $category = Category::all();
        return view('pages.home', [
            'title' => 'Home',
            'Categories' => $category,  
        ]);
    }

    public function showProductdetail(Product $products)
    {
        // dd($products);
        return view('pages.productdetail', [
            'title' => $products->name,
            'product' => $products,
        ]);
    }

    public function search(){
        $data = Product::query();
        return view('pages.search', [
            'title' => 'Search',
            'products' => $data->filter(request(['search']))->paginate(8)->withQueryString(),
        ]);
    }

    public function add()
    {
        $this->authorize('admin');
        return view('admin.add', [
            'title' => 'Add Product',
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->detail);
        // return $request;
        $validateData = $request->validate([
            'name' => 'required|min:1|max:255|unique:products',
            'CategoryID' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        // $validateData['UserID'] = auth()->user()->UserID; //sesuai sama akun yang login

        //cara 1
        // $validateData['photo'] = $request->file('photo')->getClientOriginalName();
        // $request->file('photo')->storeAs('images', $validateData['photo'], 'public');

        //cara 2
        $files = $request->file('photo');
        $fileFullName = $files->getClientOriginalName();
        $fileName = pathinfo($fileFullName, PATHINFO_FILENAME);
        $fileExtension = $files->getClientOriginalExtension();
        $fileToStore = $fileName . '-' . time() . '.' . $fileExtension;
        $files->storeAs('/public/images', $fileToStore);
        $validateData['photo'] = $fileToStore;

        Product::create($validateData);
        return redirect('/manage')->with('success', 'Product Successfully Added!');
    }

    public function update(Product $product)
    {
        // dd($product);
        $this->authorize('admin');
        return view('admin.update', [
            'title' => 'Update Product',
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function storeUpdate(Request $request, Product $product)
    {
        $this->authorize('admin');
        // return $request;
        // dd($product);
        $request->validate([
            'name' => 'required',
            'CategoryID' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:4096|nullable',
        ]);

        // $validateData['photo'] = $request->file('photo')->getClientOriginalName();
        // $request->file('photo')->storeAs('images', $validateData['photo'], 'public');

        // Image
        $product = Product::where('ProductID', $product->ProductID)->first();
        // dd($request);
        if ($request->has('photo')) {
            if ($product->photo != null) {
                Storage::delete('/public/images/' . $product->photo);
            }
            $files = $request->file('photo');
            $fileFullName = $files->getClientOriginalName();
            $fileName = pathinfo($fileFullName, PATHINFO_FILENAME);
            $fileExtension = $files->getClientOriginalExtension();
            $fileToStore = $fileName . '-' . time() . '.' . $fileExtension;
            $files->storeAs('/public/images', $fileToStore);
            $product->photo = $fileToStore;
        }
        // Store To DB
        $product->name = $request->name;
        $product->CategoryID = $request->CategoryID;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->save();
        return redirect('/manage')->with('success', 'Product Updated!');
    }

    public function deleteProductAdmin(Product $product){
        // dd($product);
        // dd($request->all(), $product);
        $this->authorize('admin');
        //cara 1
        // $product->delete();
        // return redirect('/manage')->with('success', 'Product Successfully Deleted!');

        //cara 2
        Product::destroy($product->ProductID);
        return redirect('/manage')->with('success', 'Product Successfully Deleted!');
    }

    public function purchase(Request $request, Product $product)
    {
        $data = Product::where('ProductID', $product->ProductID)->get();
        // dd($product->ProductID);
        $headerTransaction = HeaderTransaction::create([
            'UserID' => Auth::user()->UserID,
            'totalprice' => $product->price * $request->quantity,
        ]);

        foreach($data as $item){
            $transactionDetail = new TransactionDetail();
            // $product = Product::where('ProductID', $item->ProductID)->first();
            // $product->save();
            $transactionDetail->HeaderTransactionID = $headerTransaction->HeaderTransactionID;
            $transactionDetail->ProductID = $item->ProductID;
            $transactionDetail->quantity = $request->quantity;
            $transactionDetail->subtotal = $item->price * $request->quantity;
            $transactionDetail->save();
        }
        return redirect()->back()->with('purchase', 'You Have Been Purchase This Product Successsfully!');
    }
}
