<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Invoice;
use App\Models\Location;
use App\Models\UserDB;
use App\Models\Ground;
use App\Models\Time;

use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Include_;

class QLTTDSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $duyet = Invoice::find($id);
        $searchTTDS = $request->get('search');
        $invoice = Invoice::select('invoice.*', 'user.TenU', 'user.SdtU', 'location.TenSan', 'ground.SoSan', 'time.StartTime', 'time.HourEnds')
            ->join('user',  'invoice.MaIU', '=', 'user.MaU')
            ->join('ground', 'invoice.MaIG', '=', 'ground.MaG')
            ->join('location', 'ground.MaGL', '=', 'location.MaL')
            ->where('SdtU', 'like', "%$searchTTDS%")
            ->join('time', 'invoice.MaIT', '=', 'time.MaT')
            ->where('invoice.Status', '=', 0)
            ->paginate(3);
        // ->get();
        // dd($invoice);

        return view('san-chua-duyet.index', [
            // "searchQLTTDS" => $searchQLTTDS,
            'searchTTDS' => $searchTTDS,
            'invoice' => $invoice
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     $ground = Ground::all();
        //     $location = Location::all();
        //     $user = UserDB::all();
        //     // $invoice = Invoice::all();
        //     return view('quan-ly-thong-tin-dat-san.create', [
        //         'ground' => $ground,
        //         'location' => $location,
        //         'user' => $user,
        //         // 'invoice' => $invoice,
        //     ]);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        //     // $name = 
        //     $name = $request->get('name');
        //     // $invoice = new Invoice();
        //     // $invoice->MaIL = $request->MaIL;
        //     // $invoice->MaIG = $request->MaIG;
        //     // $invoice->Note = $request->Note;
        //     // $invoice->save();
        //     $user = new UserDB();
        //     $user->TenU = $request->TenU;
        //     $user->EmailU = $request->EmailU;
        //     $user->SdtU = $request->SdtU;
        //     $user->save();
        //     return Redirect::route('quan-ly-thong-tin-dat-san.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id)
            ->join('user',  'invoice.MaIU', '=', 'user.MaU')
            ->join('ground', 'invoice.MaIG', '=', 'ground.MaG')
            ->join('location', 'ground.MaGL', '=', 'location.MaL')
            ->join('time', 'invoice.MaIT', '=', 'time.MaT')
            ->where('invoice.Status', '=', 0)
            ->where('invoice.MaI', '=', $id)
            ->select('invoice.*', 'user.*', 'location.*', 'ground.*', 'time.StartTime', 'time.HourEnds')
            ->first();
        // dd($invoice);
        // return $invoice;
        return view('san-chua-duyet.show', [
            'invoice' => $invoice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $invoice = Invoice::find($id)
            ->join('user',  'invoice.MaIU', '=', 'user.MaU')
            ->join('ground', 'invoice.MaIG', '=', 'ground.MaG')
            ->join('location', 'ground.MaGL', '=', 'location.MaL')
            ->join('time', 'invoice.MaIT', '=', 'time.MaT')
            ->where('invoice.Status', '=', 0)
            ->select('invoice.*', 'user.*', 'location.*', 'ground.*', 'time.*')
            ->get();
        // dd($invoice);

        return view('san-chua-duyet.edit', [
            'invoice' => $invoice
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

        $duyet = Invoice::find($id);
        $duyet->Status = $request->get('TrangThai');

        $duyet->save();
        return Redirect::route('thong-tin-dat-san/chua-duyet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invoice::find($id)->delete();
        return Redirect::route('thong-tin-dat-san/chua-duyet.index');
    }
}
