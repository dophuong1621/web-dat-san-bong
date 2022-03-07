<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Ground;
use App\Models\District;
use App\Models\Location;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class QLDTController extends Controller
{
    public function kv(Request $request)
    {
        $searchKV = $request->get('search');
        $sumkv = DB::table('location')
            ->join('ground', 'ground.MaGL', '=', 'location.MaL')
            ->join('invoice', 'invoice.MaIG', '=', 'ground.MaG')
            ->join('district', 'location.District', '=', 'district.MaD')
            ->select(DB::raw('sum(Price) as sum_price'), 'district.District', 'district.MaD')
            ->where('invoice.Status', '=', '1')
            ->where('district.District', 'like', '%' . $searchKV . '%')
            ->groupBy('location.MaL')
            ->get();
        // dd($sumkv);
        return view('quan-ly-doanh-thu.kv', [
            'sumkv' => $sumkv,
            'searchKV' => $searchKV
        ]);
    }
    public function sb(Request $request)
    {
        $searchSB = $request->get('search');
        $sb = Location::select(DB::raw('sum(Price) as sum_price'), 'location.*', 'ground.*', 'invoice.*', 'district.*')
            ->join('ground', 'ground.MaGL', '=', 'location.MaL')
            ->join('invoice', 'invoice.MaIG', '=', 'ground.MaG')
            ->join('district', 'location.District', '=', 'district.MaD')
            ->where('invoice.Status', '=', '1')
            ->where('TenSan', 'like', '%' . $searchSB . '%')
            ->groupBy('location.MaL')
            ->get();
        // dd($sb);


        return view('quan-ly-doanh-thu.sb', [
            'sb' => $sb,
            'searchSB' => $searchSB,
        ]);
    }
    public function dd(Request $request)
    {
        $searchSDD = $request->get('search');
        $dd = DB::table('invoice')
            ->join('time', 'invoice.MaIT', '=', 'time.MaT')
            ->join('ground', 'ground.MaG', '=', 'invoice.MaIG')
            ->join('location', 'location.MaL', '=', 'ground.MaGL')
            ->join('district', 'location.District', '=', 'district.MaD')
            // ->where('invoice.StartTime', 'like', '%' . $searchSDD . '%')
            ->where('invoice.Status', '=', '1')
            ->select('invoice.MaI', 'time.StartTime', 'time.HourEnds', 'invoice.NgayDat', 'location.TenSan', 'location.Location', 'district.District')
            ->get();
        // dd($dd);

        return view('quan-ly-doanh-thu.dd', [
            'dd' => $dd,
            'searchSDD' => $searchSDD
        ]);
    }
    public function tnn(Request $request)
    {
    }
}
