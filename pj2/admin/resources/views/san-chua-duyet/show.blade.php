@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="POST" action="{{ route('thong-tin-dat-san/chua-duyet.show', $invoice->MaI) }}">
        @method("PUT")
        @csrf

        
        <div class="card-header">
            <h4 class="card-title">
                <i class="ti-pencil"> Hoá đơn chi tiết</i>
            </h4>
        </div>
        <div class="card-content">

            <div class="form-group">
                Tên :<input readonly name="TenU" class="form-control" value="{{ $invoice->TenU }}">
            </div>
            <div class="form-group">
                Email:<input readonly name="EmailU"  class="form-control" value="{{ $invoice->EmailU }}">
            </div>
            <div class="form-group">
                Số điện thoại:<input readonly name="SdtU" class="form-control" value="{{ $invoice->SdtU }}">
            </div>
            <div class="form-group">
                Địa điểm sân:<input readonly name="Location" class="form-control" value="{{ $invoice->Location }}">
            </div>
            <div class="form-group">
                Tên Sân:<input readonly name="TenSan" class="form-control" value="{{ $invoice->TenSan }}">
            </div>
            <div class="form-group">
                Quận: <input readonly name="District" class="form-control" value="{{ $invoice->District }}">
            </div>
            <div class="form-group">
                Sân số:<input readonly name="SoSan" class="form-control" value="{{ $invoice->SoSan }}">
            </div>
            
            <div class="form-group">
                Thời gian:<input readonly name="time" class="form-control" value="{{ $invoice->StartTime .'->' .$invoice->HourEnds.'(' .$invoice->Ngaydat .')' }}">
            </div>
            <div class="form-group">
                Tổng tiền: <input readonly name="Price" class="form-control" value="{{ $invoice->Price }}">
            </div>
            
           
        </div>
    </form>
</div>
</div>
@endsection