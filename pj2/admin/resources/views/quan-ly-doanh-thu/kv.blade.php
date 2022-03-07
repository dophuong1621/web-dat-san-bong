@extends('layouts.app')
@section('content')
    <div class="content">
    <h1 style="margin: -4px 0 34px">Doanh thu theo khu vực</h1>
    <div style="margin-bottom: 105px">
        <form class="navbar-form navbar-left navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $searchKV }}" name="search" class="form-control" placeholder="Search...">
                <span class="input-group-addon" style="margin-top: 55px">
                    <button  >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            
        </form>
    </div>
    <div class="card">
                    <div class="card-content">
                    <div class="toolbar">  
                </div>
        
            <table id="bootstrap-table" class="table" style="">
                <thead>
                    <th class="text-center">Mã khu vực</th>
                    <th class="text-center">Khu vực</th>
                    <th class="text-center">Doanh thu</th>
                </thead>
                <tbody>
                <tr @foreach($sumkv as $k)>
                    <td class="text-center">{{ $k->MaD }}</td>
                    <td class="text-center">{{ $k->District }}</td>
                    <td class="text-center">{{ $k->sum_price }}</td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection