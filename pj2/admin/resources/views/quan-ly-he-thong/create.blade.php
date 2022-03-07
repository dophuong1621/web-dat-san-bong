@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="post" action="{{ route('quan-ly-he-thong.store')}}">
        @csrf
        <div class="card-header">
            <h3 class="card-title">
                <i class="ti-plus" >Thêm khách hàng</i>
            </h3>
        </div>
        <div class="card-content">
            <div class="form-group">
                <input name="TenU" type="text" placeholder="Họ Tên" class="form-control">
            </div>
            <div class="form-group">
                <input name="EmailU" type="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input name="PassU" type="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                <input name="DoBU" type="date" placeholder="Ngày sinh" class="form-control">
            </div>
            <div class="form-group">
                <input id="mobile" name="SdtU" type="tel" placeholder="Số điện thoại" class="form-control">
            </div>

            <button type="submit" class="btn btn-fill btn-info">Thêm</button>
        </div>
    </form>
</div>
</div>
{{--sdt--}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click','.checkmobile', function() {
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#mobile').val();
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false) 
            {
                alert('Số điện thoại của bạn không đúng định dạng!');
            }else{
                alert('Số điện thoại của bạn hợp lệ!');
            }
        }else{
            alert('Bạn chưa điền số điện thoại!');
        }
        });
    });
    </script> --}}
@endsection