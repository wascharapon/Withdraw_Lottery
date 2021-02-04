<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\acc_detail;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('id_fb') && session()->has('status')) {
           try {
                $acc_detail = new acc_detail();
                $acc_detail_count = $acc_detail->Where('id_status',session()->get('status'))->count();
 
                if($acc_detail_count == 0)
                {
                    return redirect('acc_detail');
                }
                else if($acc_detail_count == 1)
                {
                    return $next($request);
                }
                else
                    {
                        return redirect('/')->with('error','บัญชีผู้ใช้ของท่านผิดพลาดกรุณาติดต่อผู้ให้บริการ');
                    }
           } catch (\Exception $e) {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}
