<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class User_Login_Controller extends Controller
{
    public function login()
    {
        return view('login_user');
    }
    public function login_process(Request $request)
    {
        $EmailU = $request->get('EmailU');
        $PassU = $request->get('PassU');

        try {
            $login = UserDB::where('EmailU', $EmailU)->where('PassU', $PassU)->firstOrFail();
            if ($login->BanU == 1) {
                return Redirect::route("login")->with('error', [
                    "message" => 'Tài khoản đã bị khoá !'
                ]);
            } else {
                $request->session()->put('MaU', $login->MaU);
                $request->session()->put('FullNameU', $login->FullNameU);
                $request->session()->put('BanU', $login->BanU);
                return Redirect::route('quan-ly-san-bong.index');
            }
        } catch (Exception $e) {
            return Redirect::route("login")->with('error', [
                "message" => 'Đăng nhập lỗi',
                "EmailU" => $EmailU
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
