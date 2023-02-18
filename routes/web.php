<?php

use Illuminate\Support\Facades\Route;
use  App\Models\Prouduct;
use  App\Models\User;
use  App\Models\Category;
use  App\Http\Controllers\ProuductController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

// route::get('/profile',function(){
//      return view('profile');
// });
// route::get('/products',function(){
//     // $products=Prouduct::where('price','>=',300)->get();
//     $products=Prouduct::get();

//     echo '<pre>';
//     // var_dump($products);
//     //dump and die
//     // dd($products);
//     // echo 'nagwa';

//     //dump
//     // dump($products);
//     // echo 'nagwa';
//     return view('products',['name'=>'nagwa','age' =>'22']);


// //    return view('products',['products'=>$products]);
//     echo '</pre>';
// });

// route::get('/post',function(){
//     echo 'welcome from post page';
// });



//get
//put
//delete
//post

//crud

//to get all products from database
route::get('/products',[ProuductController::class,'index'])->name('products.index');

// to show product with this id
route::get('/products/show{id}',[ProuductController::class,'show'])->name('products.show');

//to delete product
route::delete('/products/destroy/{id}',[ProuductController::class,'destroy'])->name('products.destroy');
//to update product
route::get('/products/edit{id}',[ProuductController::class,'edit'])->name('products.edit');
route::put('/products/update{id}',[ProuductController::class,'update'])->name('products.update');
//to create new product
route::get('/products/create',[ProuductController::class,'create'])->name('products.create');
route::post('/products/store',[ProuductController::class,'store'])->name('products.store');


//user crud operation
// to get all users
route::get('/users',[UserController::class,'index'])->name('users.index');

// to show user with this id
route::get('/users/show{id}',[UserController::class,'show'])->name('users.show');

// to delete user with this id
route::delete('/users/destroy{id}',[UserController::class,'destroy'])->name('users.destroy');

//to update user info
route::get('/users/edit{id}',[UserController::class,'edit'])->name('users.edit');
route::put('/users/update{id}',[UserController::class,'update'])->name('users.update');

//to create new product
route::get('/users/create',[UserController::class,'create'])->name('users.create');
route::post('/users/store',[UserController::class,'store'])->name('users.store');

//relations
//product    category

//get all category
route::get('/categories',[CategoryController::class,'index'])->name('categories.index');

// to show category with this id
route::get('/categories/show{id}',[CategoryController::class,'show'])->name('categories.show');

//to update category info
route::put('/categories/edit{id}',[CategoryController::class,'edit'])->name('categories.edit');
route::put('/categories/update{id}',[CategoryController::class,'update'])->name('categories.update');


//   to see all orders
route::get('/orders',[OrderController::class,'index'])->name('orders.index');

//to show all orders
route::get('orders/show{id}',[OrderController::class,'show'])->name('orders.show');
