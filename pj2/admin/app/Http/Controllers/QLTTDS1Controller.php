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

class QLTTDS1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $searchTTDS = $request->get('search');
        $invoice1 = Invoice::select('invoice.*', 'user.TenU', 'user.SdtU', 'location.TenSan', 'ground.SoSan', 'time.StartTime', 'time.HourEnds', 'invoice.Price', 'invoice.Note')
            ->join('user',  'invoice.MaIU', '=', 'user.MaU')
            ->join('ground', 'invoice.MaIG', '=', 'ground.MaG')
            ->join('location', 'ground.MaGL', '=', 'location.MaL')
            ->where('SdtU', 'like', "%$searchTTDS%")
            ->join('time', 'invoice.MaIT', '=', 'time.MaT')
            ->where('invoice.Status', '=', 1)
            ->paginate(3);
        // ->get();
        // dd($invoice);

        return view('san-da-duyet.index', [
            // "searchQLTTDS" => $searchQLTTDS,
            'searchTTDS' => $searchTTDS,
            'invoice1' => $invoice1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
