<?php

use App\Http\Controllers\website\CartController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ChatController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SubController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\website\auth\LoginController;
use App\Http\Controllers\website\auth\registerController;
use App\Http\Controllers\website\auth\social\googleController;
use App\Http\Controllers\website\checkController;
// use App\Http\Controllers\website\CartController as WebsiteCartController;
use App\Http\Controllers\website\ProdController;
use App\Http\Controllers\website\ReviewController;
use App\Http\Controllers\website\shopController;
use App\Models\Reviews;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    return "Cleared!";
});

Route::get('/', function () {
    return view('website.home.home');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/category',[CategoryController::class, 'index'])->name('dash-category');
    Route::post('/dashboard/category',[CategoryController::class, 'create'])->name('main-category');
    Route::post('/dashboard/subcategory', [SubController::class, 'create'])->name('sub-category');
    Route::get('/dashboard/update/category/{id}',[CategoryController::class,'show'])->name(('update.category'));
    Route::post('/dashboard/update/category/{id}',[CategoryController::class,'update']);
    Route::get('/get-subcategories/{category}', [SubController::class, 'matchcat'])->name('get-subcategories');
    // product routes
    Route::get('/dashboard/addproduct',[ProductController::class, 'index'])->name('add-product');
    Route::post('/dashboard/addproduct',[ProductController::class, 'create']);
    Route::get('/dashboard/products', [ProductController::class, 'products'])->name('all-products');
    Route::get('/dashboard/updatepro/{id}', [ProductController::class, 'edit'])->name('update-product');
    Route::post('/dashboard/updatepro/{id}', [ProductController::class, 'update']);
    Route::delete('/dashboard/delpro/{id}', [ProductController::class, 'destroy'])->name('delete-product');
    Route::post('/genrate', [ProductController::class, 'generate'])->name('generate');
    
    // profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // chat room
    Route::get('/dashboard/chat',[ChatController::class, 'index'])->name('chat-room');
    Route::post('/dashboard/chat',[ChatController::class, 'send']);
});
// website routes
// guest base routes
Route::middleware('guest')->group(function () {
// website auth Login and Register
Route::get('/register',[registerController::class, 'index'])->name('web-register');
Route::post('/register',[registerController::class, 'create']);
Route::get('/login',[LoginController::class, 'index'])->name('web-login');
Route::post('/login',[LoginController::class, 'create']);
// social access auth
Route::get('login/google',[googleController::class, 'redirectToGoogle'])->name('google-login');
Route::get('login/google/callback',[googleController::class, 'handleGoogleCallback']);
// now for facebook
Route::get('login/facebook',[googleController::class, 'redirectToFacebook'])->name('facebook-login');
Route::get('login/facebook/callback',[googleController::class, 'handleFacebookCallback']);
// sigle page details
Route::get('product/{id}/{slug}',[ProdController::class, 'show'])->name('web-sproduct');
// Reviews
Route::post('/review',[ReviewController::class,'add'])->name('add-review');
Route::get('/review/{id}', [ReviewController::class, 'show'])->name('fetch-review');

// cart routes
Route::get('/cart', [CartController::class, 'index'])->name('web-cart');
Route::get('/cartajax', [CartController::class, 'indexajax']);
Route::post('/cart',[CartController::class, 'store'])->name('store-cart');
Route::post('/cart/remove',[CartController::class, 'destroy'])->name('web-cart-remove');
Route::post('/cart/update',[CartController::class, 'update'])->name('web-cart-update');
// shop category pages
Route::get('/shop/{slug?}/{subslug?}',[shopController::class, 'index'])->name('shop-category');
Route::get('profile', function(){
    return view('website.user.profile');
});

});
// protected routes
Route::group(['middleware' => 'customer'], function () {
    // Your customer-specific routes go here
    // webchat routes
    // sent message
Route::post('/sent', [ChatController::class, 'sent'])->name('sent-message');

    // Checkout route 
    Route::get('/checkout', [CheckController::class, 'checkout'])->name('web-checkout');
    Route::post('/checkout', [CheckController::class, 'processCheckout'])->name('web-process-checkout');

    
});

require __DIR__.'/auth.php';
