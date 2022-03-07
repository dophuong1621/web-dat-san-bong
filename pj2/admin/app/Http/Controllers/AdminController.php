<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function login()
    {
        return view('panda-login.dist.login');
    }
    public function login_process(Request $request)
    {
        $EmailA = $request->get('EmailA');
        $PassA = $request->get('PassA');

        try {
            $login = Admin::where('EmailA', $EmailA)->where('PassA', $PassA)->firstOrFail();
            // if ($login->block == 1) {
            //     return Redirect::route("login")->with('error', [
            //         "message" => 'Tài khoản đã bị khoá !'
            //     ]);
            // } else {
            $request->session()->put('MaA', $login->MaA);
            $request->session()->put('FullNameA', $login->FullNameA);
            // $request->session()->put('BanA', $login->BanA);
            return Redirect::route('quan-ly-san-bong.index');
            // }
        } catch (Exception $e) {
            return Redirect::route("login")->with('error', [
                "message" => 'Đăng nhập lỗi',
                "EmailA" => $EmailA
            ]);
        }
    }
    public function logout(Request $request)
    {
        //Xoá session
        $request->session()->flush();
        return Redirect::route("login");
    }
}
