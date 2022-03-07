@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="post" action="{{ route('info-admin.update', $admin->MaA) }}">
        @method("PUT")
        @csrf
        <div class="card-header">
            <h4 class="card-title">
                <i class="ti-pencil"> Cập nhật</i>
            </h4>
        </div>
        <div class="card-content">

            <div class="form-group">
                <input name="FullNameA" type="text" class="form-control" placeholder="Họ Tên" value="{{ $admin->FullNameA }}">
            </div>
            <div class="form-group">
                <input name="EmailA" type="email" class="form-control" placeholder="Email" value="{{ $admin->EmailA }}">
            </div>
            <div class="form-group">
                <input name="PassA" type="password" class="form-control" placeholder="Mật khẩu" value="{{ $admin->PassA }}">
            </div>
            <div class="form-group">
                <input name="DoBA" type="date"  class="form-control" placeholder="Ngày sinh" value="{{ $admin->DoBA }}">
            </div>
            <div class="form-group">
                <input name="SdtA" type="number" class="form-control" placeholder="Số điện thoại" value="{{ $admin->SdtA }}">
            </div>
            <button type="submit" class="btn btn-fill btn-info">Sửa</button>
        </div>
    </form>
</div>
</div>
@endsection