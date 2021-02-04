<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\accountModel;
use App\Models\acc_detail;
use Illuminate\Validation\Validator;

class AccountController extends Controller
{
    public function facebook_redirect()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function facebook()
    {
        try {
            $user = Socialite::with('facebook')->user();
            $account = new accountModel();
            // All providers...
            $account_count = $account->where('id_fb', $user->getId())->count();
            $Hash_acc = Hash::make($user->getId() . $user->getEmail() . 'NO');
            if ($account_count == 0) {
                $account->id_fb = $user->getId();
                $account->name = $user->getName();
                $account->email = $user->getEmail();
                $account->avatar = $user->getAvatar();
                $account->status = $Hash_acc;
                $account->save();
                $account_count = 1;
            }
            if ($account_count == 1) {
                $account_count = $account->where('id_fb', $user->getId())->first();
                session()->put('id_fb', $account_count->id_fb);
                session()->put('email_fb', $account_count->email);
                session()->put('status', $account_count->status);
                return redirect()->route('auth.home');
            }
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }


    public function logout()
    {
        if (session()->has('id_fb') && session()->has('status')) {
            session()->pull('id_fb');
            session()->pull('status');
            return redirect('/');
        }
    }


    public function add_acc_detail(Request $request)
    {
        $data_detail = $request->validate([
            'id_status' => ['required', 'unique:acc_detail'],
            'first_name' => ['required', 'max:50', 'min:1', 'regex:/([A-Za-z])/'],
            'last_name' => ['required', 'max:50', 'min:1', 'regex:/([A-Za-z])/'],
            'phone' => ['required', 'max:10', 'min:10', 'regex:/(0)[0-9]{9}/'],
            'bank' => ['required', 'min:2', 'max:7', 'regex:/([A-Za-z])/'],
            'id_bank' => ['required', 'max:10', 'min:10', 'regex:/[0-9]{10}/'],
        ]);
        $data_detail['id_status'] = str_ireplace(" ", "", $data_detail['id_status']);
        $data_detail['id_fb'] = $request->session()->get('id_fb');
        $data_detail['email_fb'] = $request->session()->get('email_fb');
        $check_status = Hash::check($data_detail['id_fb'] . $data_detail['email_fb'] . 'NO', $data_detail['id_status']);
        if ($check_status == true) {
            $create_status = Hash::make($data_detail['id_fb'] . $data_detail['email_fb'] . 'YES');
            $accountModel = new accountModel();
            $acc_detail = new acc_detail();
            try {
                $accountModel = $accountModel->where('id_fb', $data_detail['id_fb'])->first();
                $check_status_db = Hash::check($accountModel->id_fb . $accountModel->email . 'YES', $accountModel->status);
                if ($check_status_db == false) {
                    //เพิ่มข้อมูลรายละเอียด
                    $acc_detail->id_status = $create_status;
                    $acc_detail->first_name = $data_detail['first_name'];
                    $acc_detail->last_name = $data_detail['last_name'];
                    $acc_detail->phone = $data_detail['phone'];
                    $acc_detail->bank = $data_detail['bank'];
                    $acc_detail->id_bank = $data_detail['id_bank'];
                    if ($acc_detail->save()) {
                        $accountModel->where('id_fb', $data_detail['id_fb'])->update(['status' => $create_status]);
                        session()->put('status', $create_status);
                        return redirect()->route('auth.home');
                    }
                    else
                    {
                        return("e3");
                    }
                } else {
                    return redirect()->route('auth.home');
                }
            } catch (\Exception $e) {
                return dd('e2');
            }
        } else {
            return dd('e1');
        }
    }
}
