<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Models\About;
use Laravel\Jetstream\Rules\Role;

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

//user
// Route::middleware(['auth:sanctum', 'verified'])->group(function (){

// });
// //admin
// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [AdminController::class, 'product']);
Route::get('/profile', [AdminController::class, 'profile']);
Route::get('/products', [HomeController::class, 'products']);
Route::get('/menuser', [HomeController::class, 'menuser']);
Route::get('/womenuser', [HomeController::class, 'womenuser']);
Route::get('/kiduser', [HomeController::class, 'kiduser']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contactstore', [HomeController::class, 'contactstore']);
Route::get('/showproduct', [AdminController::class, 'showproduct']);
Route::get('/menproduct', [AdminController::class, 'menproduct']);
Route::get('/womenproduct', [AdminController::class, 'womenproduct']);
Route::get('/kidproduct', [AdminController::class, 'kidproduct']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
Route::delete('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
Route::get('/editproduct/{id}', [AdminController::class, 'editproduct']);
Route::put('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
Route::post('/search', [HomeController::class, 'search']);
Route::post('/searchh', [HomeController::class, 'searchh']);
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart', [HomeController::class, 'showcart']);
Route::get('/showabout',[AboutController::class,'showabout']);
Route::get('/creatabout', [AboutController::class, 'create']);
Route::post('/storeabout',[AboutController::class ,'storeabout']);
Route::get('/editabout/{id}', [AboutController::class, 'edit']);
Route::delete('/deleteabout/{id}', [AboutController::class, 'destroy']);
Route::put('/updateabout/{id}', [AboutController::class, 'update']);
Route::get('/contactshow',[ContactController::class,'index']);
Route::delete('/deletecontact/{id}', [ContactController::class, 'destroy']);

Route::get('/categoryshow',[CategoryController::class, 'categoryshow']);
Route::get('/categorycreate',[CategoryController::class, 'categorycreate']);
Route::post('/categorystore', [App\Http\Controllers\CategoryController::class, 'categorystore']);
Route::delete('/deletecategory/{id}', [CategoryControlle::class, 'deletecategory']);
Route::get('/editcategory/{id}', [App\Http\Controllers\CategoryController::class, 'editcategory']);
Route::put('/updatecategory/{id}', [App\Http\Controllers\CategoryController::class, 'updatecategory']);
