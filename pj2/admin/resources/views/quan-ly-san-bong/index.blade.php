@extends('layouts.app')
@section('content')
{{-- @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif --}}
    <div class="content">
    <h1 style="margin: -4px 0 34px">Danh sách sân bóng</h1>
    <div style="margin-bottom: 65px">
        <form class="navbar-form navbar-left navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $searchSB }}" name="search" class="form-control" placeholder="Search...">
                <span class="input-group-addon" style="margin-top: 55px">
                    <button  >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            
        </form>
    </div>
    <div class="text-right">
        <a rel="tooltip" title="" class="btn btn-simple btn-info btn-icon table-action view" href="{{ route('quan-ly-san-bong.create') }}" data-original-title="Create">
        <i class="ti-plus"> Add </i>
    </a>
    </div>
    <div class="card">
        <div class="card-content">
        <div class="toolbar">  
    </div>
            <table id="bootstrap-table" class="table" >
                <thead>
                    <th class="text-center">ID</th>
                    <th class="text-center">Tên sân</th>
                    <th class="text-center" data-sortable="true">Địa điểm sân</th>
                    <th class="text-center">Quận</th>
                    <th class="text-center" data-sortable="true">Mô tả</th>
                    <th class="text-center"> Ảnh</th>
                    <th class="text-center"> Tình trạng</th>
                    <th class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">Chức năng</th>
                </thead>
                <tbody>
                    <tr @foreach ($districtIJ as $qlsb)>
                        <td class="text-center">{{ $qlsb->MaL }}</td>
                        <td class="text-center">{{ $qlsb->TenSan}}</td>
                        <td class="text-center">{{ $qlsb->Location }}</td>
                        <td class="text-center">{{ $qlsb->District }}
                        </td>
                        {{-- <td class="text-center">{{ $qlsb->District}}</td> --}}
                        <td class="text-center">{{ $qlsb->Describe }}</td>
                        <td class="text-center"><img src="{{ $qlsb->Image }}" width="100px"></td>
                        <td class="text-center">{{ $qlsb->TinhTrang }}</td>
                        <td > 
                            <div class="text-center">
                                {{-- <a rel="tooltip" title="" class="btn btn-simple btn-success btn-icon table-action edit" href="{{ route('quan-ly-san-bong.show', $qlsb->MaL) }}" data-original-title="Show">
                                <i class="ti-eye"></i>
                                </a> --}}
                                
                                <a rel="tooltip" title="" class="btn btn-simple btn-warning btn-icon table-action edit" href="{{ route('quan-ly-san-bong.edit', $qlsb->MaL) }}" data-original-title="Edit">
                                <i class="ti-pencil-alt"></i>
                                
                                </a>
                                {{-- <form action="{{ route('quan-ly-san-bong.destroy', $qlsb->MaL) }}" method="post" class="btn btn-simple btn-danger btn-icon table-action remove">
                                    @method('DELETE')
                                    @csrf
                                    <button>
                                        <a rel="tooltip" title="" class="btn btn-simple btn-danger btn-icon table-action remove" href="{{ route('quan-ly-san-bong.destroy', $qlsb->MaL) }}" data-original-title="Remove">
                                        <i class="ti-close"></i></a>
                                    </button>
                                </form> --}}
                            <div>
                        </td>
                        
                        
                    </tr @endforeach> 
                    {{-- <tr class="text-center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2">Điểm trung bình cả lớp</td>
                    </tr> --}}
                </tbody>
                
            </table>
{{--search--}}
    <div class="text-center">
    {{ $districtIJ->appends([
        'searchSB' => $searchSB
    ])->links()}}
    </div>
            
        </div>
    </div>
    </div>
@endsection