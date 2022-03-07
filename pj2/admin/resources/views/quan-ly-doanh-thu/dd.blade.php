@extends('layouts.app')
@section('content')
    <div class="content">
    <h1 style="margin: -4px 0 34px">Khung giờ đã đặt</h1>
    {{-- <div style="margin-bottom: 105px">
        <form class="navbar-form navbar-left navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $searchSDD}}" name="search" class="form-control" placeholder="Search...">
                <span class="input-group-addon" style="margin-top: 55px">
                    <button  >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            
        </form>
    </div> --}}
    <div class="card">
                    <div class="card-content">
                    <div class="toolbar">  
                </div>
        
            <table id="bootstrap-table" class="table" style="">
                <thead>
                    <th class="text-center">Mã hoá đơn</th>
                    <th class="text-center">Giờ đã đặt</th>
                    <th class="text-center">Ngày</th>
                    <th class="text-center">Tên Sân</th>
                    <th class="text-center">Địa chỉ</th>
                    <th class="text-center">Quận</th>

                </thead>
                <tbody>
                <tr @foreach($dd as $d)>
                    <td class="text-center">{{ $d->MaI }}</td>
                    <td class="text-center">{{ $d->StartTime . '->' . $d->HourEnds }}</td>
                    <td class="text-center">{{ $d->NgayDat }}</td>
                    <td class="text-center">{{ $d->TenSan }}</td>
                    <td class="text-center">{{ $d->Location }}</td>
                    <td class="text-center">{{ $d->District }}</td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection