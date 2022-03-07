@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="post" action="{{ route('thong-tin-dat-san/chua-duyet.update', $invoice->MaI) }}">
        @method("PUT")
        @csrf
        <div class="card-header">
            <h4 class="card-title">
                <i class="ti-pencil"> Cập nhật</i>
            </h4>
        </div>
        <div class="card-content">
            
            <div class="form-group">
                <input name="TenU" type="text" class="form-control" value="{{ $invoice->TenU }}">
            </div>
            <div class="form-group">
                <input name="SdtU" type="number" class="form-control" value="{{ $invoice->SdtU }}">
            </div>
            <div class="form-group">
                <select class="form-control" name="TenSan">
                    <option>{{ $invoice->TenSan }}</option>
                    <option value="{{ $invoice->MaL}}"> 
                        {{ $invoice->TenSan }} 
                    </option>  
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="SoSan">
                    <option>{{ $invoice->SoSan }}</option>
                    <option value="{{ $invoice->MaIG}}"> 
                        {{ $invoice->SoSan }} 
                    </option>  
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="StartTime">
                    <option>{{ $invoice->StartTime -> $invoice->HourEnds }}</option>
                    <option value="{{ $invoice->MaIT}}"> 
                        {{ $invoice->StartTime -> $invoice->HourEnds }} 
                    </option>  
                </select>
            </div>
            {{-- <div class="form-group">
                <select class="form-control" name="HourEnds">
                    <option>{{ $invoice->HourEnds }}</option>
                    <option value="{{ $invoice->MaIT  }}"> 
                        {{ $invoice->HourEnds }} 
                    </option>  
                </select>
            </div> --}}
            <div class="form-group">
                <input name="Price" type="number" class="form-control" value="{{ $invoice->Price }}">
            </div>
            <div class="form-group">
                <input name="Note" type="text" class="form-control" value="{{ $invoice->Note }}">
            </div>
            
            <button type="submit" class="btn btn-fill btn-info">Sửa</button>
        
        </div>
    </form>
    
</div>
</div>
@endsection