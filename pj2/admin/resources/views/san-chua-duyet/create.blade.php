@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="post" action="{{ route('thong-tin-dat-san/chua-duyet.store') }}">
        @csrf
        <div class="card-header">
            <h3 class="card-title">
                <i class="ti-plus" > Đặt sân</i>
            </h3>
        </div>
        <div class="card-content">
            {{--user--}}
            <div class="form-group">
                <input name="TenU" type="text" placeholder="Tên người đặt" class="form-control">
            </div>
            <div class="form-group">
                <input name="EmailU" type="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input name="SdtU" type="number" placeholder="Số điện thoại" class="form-control">
            </div>
            {{--location--}}
            {{-- <div class="form-group">
                <input name="TenSan" type="email" placeholder="Tên Sân" class="form-control">
            </div> --}}
            
            {{-- ground --}}
            {{-- <div class="form-group">
                <input name="SoSan" type="number" placeholder="Số sân" class="form-control">
            </div>
            <div class="form-group">
                <input name="Price" type="number" placeholder="Giá" class="form-control">
            </div>
            <div class="form-group">
                <input name="Time" type="datetime" placeholder="Thời gian" class="form-control">
            </div>
            <div class="form-group">
                <input name="Note" type="text" placeholder="Ghi chú" class="form-control">
            </div> --}}
            <button type="submit" class="btn btn-fill btn-info">Đặt sân</button>
        </div>
    </form>
</div>
</div>
@endsection