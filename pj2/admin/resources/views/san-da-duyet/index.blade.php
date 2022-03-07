@extends('layouts.app')
@section('content')
    <div class="content">
    <h1 style="margin: -4px 0 34px">Danh sách sân đã duyệt</h1>
    <div style="margin-bottom: 105px">
        <form class="navbar-form navbar-left navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $searchTTDS }}" name="search" class="form-control" placeholder="Search...">
                <span class="input-group-addon" style="margin-top: 55px">
                    <button  >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            
        </form>
    </div>
    {{-- <div class="text-right">
        <a rel="tooltip" title="" class="btn btn-simple btn-info btn-icon table-action view" href="{{ route('quan-ly-thong-tin-dat-san.create') }}" data-original-title="Create">
        <i class="ti-plus"> Add </i>
    </a>
    </div> --}}
    <div class="card">
        <div class="card-content">
        <div class="toolbar">        
            <table id="bootstrap-table" class="table" >
                <thead>
                    <th class="text-center">Mã đơn</th>
                    <th class="text-center">Tên người đặt</th>
                    <th class="text-center">Số điện thoại</th>
                    <th class="text-center">Tên sân</th>
                    <th class="text-center">Sân số</th>
                    <th class="text-center" data-sortable="true">Thời gian</th>
                    <th class="text-center" data-sortable="true">Giá</th>
                    <th class="text-center"> Ghi chú</th>
                    {{-- <th class="text-center"> Trạng thái</th> --}}
                    {{-- <th class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">Chức năng</th> --}}
                </thead>
                <tbody>
                    <tr @foreach ($invoice1 as $i)>
                        <td class="text-center">{{ $i->MaI }}</td>
                        <td class="text-center">{{ $i->TenU }}</td>
                        <td class="text-center">{{ $i->SdtU }}</td>
                        <td class="text-center">{{ $i->TenSan }}</td>
                        <td class="text-center">{{ $i->SoSan }}</td>
                        <td class="text-center">{{ $i->StartTime .'->' .$i->HourEnds }}</td>
                        <td class="text-center">{{ $i->Price    }}</td>
                        <td class="text-center">{{ $i->Note }}</td>
                        {{-- <td class="text-center">{{ $i->TrangThai }}</td> --}}
                        {{-- <td>
                            <div  class="text-center">
                            
                            <form method="post" action="{{ route('quan-ly-thong-tin-dat-san.update', $i->MaI) }}">
                            @method("PUT")
                            @csrf
                            {{-- <a rel="tooltip" title=""  href="{{ route('quan-ly-thong-tin-dat-san.update', $i->MaI)}} "data-original-title="Duyệt">
                               
                            </a> --}}
                                {{-- <input type="hidden" name="TrangThai" value="1">
                                <button class="btn btn-simple btn-success btn-icon table-action Duyệt"><i class="ti-check" <?= $i->Status == 1 ? "checked" : "" ?>></i></button>
                            </form>
                            
                            <a rel="tooltip" title="" class="btn btn-simple btn-warning btn-icon table-action edit" href="{{ route('quan-ly-thong-tin-dat-san.edit', $i->MaI) }}" data-original-title="Edit">
                                <i class="ti-pencil-alt"></i>
                            </a> --}}
                            {{-- <a rel="tooltip" title="" class="btn btn-simple btn-success btn-icon table-action edit" href="{{ route('quan-ly-thong-tin-dat-san.show', $i->MaI) }}" data-original-title="Show">
                                <i class="ti-eye"></i>
                                </a> --}}
                            </div>
                        </td> 
                    </tr @endforeach>
                </tbody>
                
            </table>
    <div class="text-center">
    {{ $invoice1->appends([
        'searchTTDS' => $searchTTDS
    ])->links()}}
    </div>
    </div>        
    </div>
    </div>
    </div>
@endsection