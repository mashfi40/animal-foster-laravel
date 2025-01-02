<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginctrl;

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

Route::get('/home', function () {
    return view('home');
});

/*Route::get('/login', [loginctrl::class,'index']);
Route::post('/login',[loginctrl::class,'login']);
Route::get('/login/view',[loginctrl::class,'view']);
Route::post('/login',[loginctrl::class,'store']);*/

//Route::get('/admin/adminlogin', [loginctrl::class, 'showLoginForm'])->name('admin.adminlogin.form');
//Route::get('/admin/adminregister', [loginctrl::class, 'showRegisterForm'])->name('admin.adminregister.form');
Route::view('/adminreg','admin.adminreg')->name('adminreg');
Route::view('/adminlogin','admin.adminlogin')->name('adminlogin');
Route::view('/login','auth.login')->name('login');
Route::get('/registration',[loginctrl::class,'registration']);
Route::post('/register-user',[loginctrl::class,'registerUser'])->name('register-user');
Route::post('login-user',[loginctrl::class,'loginUser'])->name('login-user');
Route::post('/register-admin',[loginctrl::class,'registerAdmin'])->name('register-admin');
Route::post('login-admin',[loginctrl::class,'loginAdmin'])->name('login-admin');
Route::get('/pet',[loginctrl::class,'pet']);
Route::get('/shop',[loginctrl::class,'shop']);
Route::get('/provide',[loginctrl::class,'provide']);

Route::view('/adminhome','admin.adminhome')->name('adminhome');
Route::get('/users',[loginctrl::class,'user']);
Route::get('/deleteuser/{id}',[loginctrl::class,'deleteuser']);
Route::get('/items',[loginctrl::class,'item']);
Route::get('/deleteitem/{id}',[loginctrl::class,'deleteitem']);
Route::post('/uploaditem',[loginctrl::class,'upload']);
Route::get('/updateitem/{id}',[loginctrl::class,'updateitem']);
Route::post('/update2/{id}',[loginctrl::class,'update2']);
Route::get('/adminorder',[loginctrl::class,'adminorder']);
Route::get('/adminadp',[loginctrl::class,'adminadp']);

Route::get('/petsurl',[loginctrl::class,'pets']);
Route::post('/uploadpet',[loginctrl::class,'upload_p']);
Route::get('/deletepet/{id}',[loginctrl::class,'deletepet']);
Route::get('/updatepet/{id}',[loginctrl::class,'updatepet']);
Route::post('/update1/{id}',[loginctrl::class,'update1']);

Route::post('/addcart/{id}', [loginctrl::class,'addcart']);
Route::get('/showcart', [loginctrl::class,'showcart']);
Route::get('/remove/{id}', [loginctrl::class,'remove']);
Route::post('/orderconfirm', [loginctrl::class,'orders'])->name('orders');

Route::post('/addanimal/{id}', [loginctrl::class,'addanimal']);
Route::get('/showanimal', [loginctrl::class,'showanimal']);
Route::get('/remove1/{id}', [loginctrl::class,'remove1']);
Route::post('/orderconfirm', [loginctrl::class,'adopts'])->name('adopts');
