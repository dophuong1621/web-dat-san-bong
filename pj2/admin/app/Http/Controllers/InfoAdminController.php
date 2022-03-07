<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;

class InfoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session()->get('MaA');
        // dd($id);
        $admin = Admin::find($id);
        return view('info-admin.index', [
            'admin' => $admin
        ]);
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('info-admin.index', [
            "admin" => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->FullNameA = $request->FullNameA;
        $admin->EmailA = $request->EmailA;
        $admin->PassA = $request->PassA;
        $admin->DoBA = $request->DoBA;
        $admin->SdtA = $request->SdtA;
        $admin->save();
        return Redirect::route('info-admin.index');
    }
}
