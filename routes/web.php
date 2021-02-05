<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Http\Request;



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


Route::get('withdraw_form', function (Request $request) {

    $slip = 'photo.jpg';


    return "<a href='withdraw?
    slip=$slip
    '>แจ้งถอน</a>";
})->name('auth.withdraw_form')->middleware('isLogged');


Route::get('test', function () {
    return view('master.user');
});
Route::get('home', function () {
    return view('home');
})->name('auth.home')->middleware('isLogged');

// Redirect to github to authenticate
Route::get('logout', [AccountController::class, 'logout']);
Route::get('facebook', [AccountController::class, 'facebook_redirect']);
// Get back to redirect url
Route::get('account/facebook', [AccountController::class, 'facebook']);
Route::get('add_data_detail', [AccountController::class, 'add_acc_detail']);
Route::get('withdraw', [WithdrawController::class, 'withdraw'])->name('auth.withdraw')->middleware('isLogged');
