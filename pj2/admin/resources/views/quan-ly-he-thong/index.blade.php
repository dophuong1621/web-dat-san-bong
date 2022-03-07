@extends('layouts.app')
@section('content')
    <div class="content">
    <h1 style="margin: -4px 0 34px">Danh sách người dùng</h1>
    <div style="margin-bottom: 65px">
        <form class="navbar-form navbar-left navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $searchUser }}" name="search" class="form-control" placeholder="Search...">
                <span class="input-group-addon" style="margin-top: 55px">
                    <button  >
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div> 
        </form>
    </div>
    <div class="text-right">
        <a rel="tooltip" title="" class="btn btn-simple btn-info btn-icon table-action view" href="{{ route('quan-ly-he-thong.create') }}" data-original-title="Create">
        <i class="ti-plus"> Add </i>
    </a>
    </div>
    <div class="card">
        <div class="card-content">
        <div class="toolbar">
            <table id="bootstrap-table" class="table" >
                <thead>
                    <th class="text-center">ID</th>
                    <th class="text-center">Họ Tên</th>
                    <th class="text-center" data-sortable="true">Email</th>
                    <th class="text-center" data-sortable="true">Mật khẩu</th>
                    <th class="text-center" data-sortable="true">Ngày Sinh</th>
                    <th class="text-center"> Số điện thoại</th>
                    <th class="text-center"> Trạng thái</th>
                    <th class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">Chức năng</th>
                </thead>
                <tbody>
                    <tr @foreach ($indexqlht as $qlht)>   
                        <td class="text-center">{{ $qlht->MaU }}</td>
                        <td class="text-center">{{ $qlht->TenU }}</td>
                        <td class="text-center">{{ $qlht->EmailU }}</td>
                        <td class="text-center">*********</td>
                        <td class="text-center">{{ $qlht->DoBU }}</td>
                        <td class="text-center">{{ $qlht->SdtU }}</td>
                        <td class="text-center">{{ $qlht->BanUser }}</td>
                        <td>
                            <div class="text-center">
                                {{-- <a rel="tooltip" title="" class="btn btn-simple btn-success btn-icon table-action edit" href="{{ route('quan-ly-san-bong.show', $qlsb->MaL) }}" data-original-title="Show">
                                <i class="ti-eye"></i>
                                </a> --}}
                                <a rel="tooltip" title="" class="btn btn-simple btn-warning btn-icon table-action edit" href="{{ route('quan-ly-he-thong.edit', $qlht->MaU) }}" data-original-title="Edit">
                                <i class="ti-pencil-alt"></i>
                                </a>
                                {{-- <form action="{{ route('quan-ly-he-thong.destroy', $qlht->MaU) }}" method="post" class="btn btn-simple btn-danger btn-icon table-action remove">
                                    @method('DELETE')
                                    @csrf
                                    <button><a rel="tooltip" title="" class="btn btn-simple btn-danger btn-icon table-action remove" href="{{ route('quan-ly-he-thong.destroy', $qlht->MaU) }}" data-original-title="Remove">
                                        <i class="ti-close"></i></a>
                                    </button>
                                </form> --}}
                                
                            </div>
                        </td>
                        
                    </tr @endforeach> 
                </tbody>
                
            </table>
{{--search--}}
    <div class="text-center">
    {{ $indexqlht->appends([
        'searchUser' => $searchUser
    ])->links()}}
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection