<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acc_detail;
use App\Models\accountModel;
use App\Models\withdrawModel;

class WithdrawController extends Controller
{
    public function withdraw(Request $request)
    {
        //validate data post
        try {
            $data_detail = $request->validate([
                'slip' => ['required'],
            ]);
        //upload slip
        
        //inset to database table withdrawmodels
            $withdrawModel = new withdrawModel();
            $withdrawModel->acc_id = session()->get('id_fb');
            $withdrawModel->slip = $data_detail['slip'];
            $withdrawModel->status = 'W';
            if($withdrawModel->save())
                {
                    $withdrawModel = $withdrawModel->first();
                   //line notify 8KjMM1yp6C6C6A3FlD8Ii95JgRWA7hWFnMK57iAe1kI
                    return view('notify-line',['id_withdraw'=>$withdrawModel->id]);
                }
            else
            {
                return dd('withdraw_e1');
            }
        } catch (\Exception $e) {
            return redirect()->route('auth.withdraw_form');
        }
    }
}
