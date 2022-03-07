<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Location;
use App\Models\District;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchSB = $request->get('search');
        // $quan = location::where('District');
        $districtIJ = Location::select('*')
            ->where('TenSan', 'like', '%' . $searchSB . '%')
            ->join('district',  'location.District', '=', 'district.MaD')
            ->paginate(3);
        // dd($districtIJ);

        return view('quan-ly-san-bong.index ', [
            // "indexqlsb" => $indexqlsb,
            'searchSB' => $searchSB,
            'districtIJ' => $districtIJ
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $district = District::all();
        // dd($district);
        return view('quan-ly-san-bong.create', compact('district'));
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
        //     'District' => 'required',
        //     'TenSan' => 'required',
        //     'Location' => 'required',
        //     'Describe' => 'required',
        //     'Image' => 'required',
        // ]);
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        // ]);
        $image = $request->file('Image');

        $nameImage = $image->getClientOriginalName();
        $LuuAnh = 'assets/image';
        $image->move($LuuAnh, $nameImage);

        $name = $request->get('name');
        $location = new Location();
        $location->District = $request->District;
        $location->TenSan = $request->TenSan;
        $location->Location = $request->Location;
        $location->Describe = $request->Describe;
        $location->Image = $LuuAnh . '/' . $nameImage;
        // dd($request);
        $location->save();
        return Redirect::route('quan-ly-san-bong.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //where
        // $location = Location::where('MaL', '=', '$id->first()');

        $location = Location::find($id);
        return $location;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $district = District::all();
        $location = Location::join('district', 'location.District', '=', 'district.MaD')
            ->where('location.MaL', '=', $id)->first();

        return view('quan-ly-san-bong.edit', [
            "location" => $location,
            "district" => $district
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
        $location = Location::find($id);
        $location->Status = $request->get('TinhTrang');
        $location->District = $request->District;
        $location->TenSan = $request->TenSan;
        $location->Location = $request->Location;
        $location->Describe = $request->Describe;
        $location->save();
        return Redirect::route('quan-ly-san-bong.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Location::find($id)->delete();
        // return Redirect::route('quan-ly-san-bong.index');
    }
}
