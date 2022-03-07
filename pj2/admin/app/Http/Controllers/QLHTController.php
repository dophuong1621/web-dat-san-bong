<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDB;
use Illuminate\Support\Facades\Redirect;
use Exception;

class QLHTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchUser = $request->get('search');
        $indexqlht = UserDB::where('TenU', 'like', "%$searchUser%")->paginate(3);
        return view('quan-ly-he-thong.index ', [
            "indexqlht" => $indexqlht,
            'searchUser' => $searchUser,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quan-ly-he-thong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'TenU' => 'required',
        //     'EmailU' => 'required',
        //     'PassU' => 'required',
        //     'DoBU' => 'required',
        //     'SdtU' => 'required',

        // ]);
        $name = $request->get('name');
        $user = new UserDB();
        $user->TenU = $request->TenU;
        $user->EmailU = $request->EmailU;
        $user->PassU = $request->PassU;
        $user->DoBU = $request->DoBU;
        $user->SdtU = $request->SdtU;
        $user->save();
        return Redirect::route('quan-ly-he-thong.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserDB::find($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserDB::find($id);
        return view('quan-ly-he-thong.edit', [
            "user" => $user
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

        $user = UserDB::find($id);
        $user->TenU = $request->TenU;
        $user->EmailU = $request->EmailU;
        $user->PassU = $request->PassU;
        $user->DoBU = $request->DoBU;
        $user->SdtU = $request->SdtU;
        $user->BanU = $request->BanU;
        $user->save();
        // dd($user);
        return Redirect::route('quan-ly-he-thong.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserDB::find($id)->delete();
        return Redirect::route('quan-ly-he-thong.index');
    }
    // public function login()
    // {
    //     return view('panda-login.dist.login');
    // }
}
