@extends('layouts.app')
@section('content')
    <div class="content">
    <h1 style="margin: -4px 0 34px">Doanh thu theo từng sân</h1>
    <div class="card">
                    <div class="card-content">
                    <div class="toolbar">  
                </div>
        
            <table id="bootstrap-table" class="table" style="">
                <thead>
                    <th class="text-center">Mã sân</th>
                    <th class="text-center">Tên Sân</th>
                    <th class="text-center">Địa điểm</th>
                    <th class="text-center">Quận</th>
                    <th class="text-center">Doanh thu</th>
                </thead>
                <tbody>
                <tr @foreach($sb as $s)>
                    <td class="text-center">{{ $s->MaL }}</td>
                    <td class="text-center">{{ $s->TenSan }}</td>
                    <td class="text-center">{{ $s->Location }}</td>
                    <td class="text-center">{{ $s->District }}</td>
                    <td class="text-center">{{ $s->sum_price }}</td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection