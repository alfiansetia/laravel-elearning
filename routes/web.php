<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes([
    'reset' => false,
    'verify' => false,
]);

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('cart', ProductController::class);

//About
Route::get('/about', [AboutController::class, 'about'])->name('about.us');

// //Login & Register
// Route::middleware(['guest'])->group(function () {
//     Route::prefix('/login')->group(function () {
//         Route::get('', [LoginController::class, 'login'])->name('login');
//         Route::post('', [LoginController::class, 'authenticate']);
//     });
//     Route::prefix('/register')->group(function () {
//         Route::get('', [RegisterController::class, 'register'])->name('register');
//         Route::post('', [RegisterController::class, 'store']);
//     });
// });

// //logout
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Main Pages (Home, Product Detail, Search, profile)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/productdetail/{products:ProductID}', [ProductController::class, 'showProductdetail'])->name('productdetail');
// Route::get('/search', [ProductController::class, 'search'])->name('search');
// Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

// //Category (Product by Category)
// Route::get('/category/{category:CategoryID}', [CategoryController::class, 'showProductByCategory'])->name('category');

// //Admin
// Route::get('/manage', [AdminController::class, 'manage'])->name('admin')->middleware('admin');
// Route::get('/manage/add', [ProductController::class, 'add'])->name('add')->middleware('admin');
// Route::post('/manage/add', [ProductController::class, 'store'])->name('store')->middleware('admin');
// Route::get('/manage/update/{product:ProductID}', [ProductController::class, 'update'])->name('update')->middleware('admin');
// Route::post('/manage/update/{product:ProductID}', [ProductController::class, 'storeUpdate'])->name('storeUpdate')->middleware('admin');
// Route::post('/manage/delete/{product:ProductID}', [ProductController::class, 'deleteProductAdmin'])->name('delete')->middleware('admin');

// //Customer
// Route::get('/cart', [CartController::class, 'cart'])->name('cart')->middleware('user');
// Route::post('/productdetail/purchase/{product:ProductID}', [ProductController::class, 'purchase'])->name('purchase')->middleware('user');
// Route::post('/productdetail/{product:ProductID}', [CartController::class, 'addToCart'])->name('addToCart')->middleware('user');
// Route::post('/carts/{cart:CartID}', [CartController::class, 'removeFromCart'])->name('removeFromCart')->middleware('user');
// Route::post('/{totalprice}', [TransactionController::class, 'checkout'])->name('checkout')->middleware('user');
// Route::get('/history', [TransactionController::class, 'history'])->name('history')->middleware('user');


//404 PAGE
// Route::fallback([ErrorController::class, 'error404'])->name('404');




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
