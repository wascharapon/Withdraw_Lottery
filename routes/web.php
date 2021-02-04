<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AccountController;
use App\Models\acc_detail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
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

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('login');
});

Route::get('acc_detail', function (Request $request) {

    $id_status=$request->session()->get('status');
    $first_name='wascharapon';
    $last_name	='akkhahad';
    $phone='0912345678'; #10
    $bank='KTB';
    $id_bank='0912345678'; #10

    return "<a href='add_data_detail?
    id_status=$id_status&&
    first_name=$first_name&&
    last_name=$last_name&&
    phone=$phone&&
    bank=$bank&&
    id_bank=$id_bank&&
    '>เพิ่มข้อมูล</a>";
});


Route::get('welcome', function () {
    return view('welcome');
})->name('auth.welcome')->middleware('isLogged');

// Redirect to github to authenticate
Route::get('logout', [AccountController::class, 'logout']);
Route::get('facebook', [AccountController::class, 'facebook_redirect']);
// Get back to redirect url
Route::get('account/facebook', [AccountController::class, 'facebook']);
Route::get('add_data_detail', [AccountController::class, 'add_acc_detail']);
