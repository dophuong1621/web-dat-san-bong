@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="post" action="{{ route('quan-ly-san-bong.store')}}"  enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h3 class="card-title">
                <i class="ti-plus" > Thêm sân bóng</i>
            </h3>
        </div>
        <div class="card-content">
            <div class="form-group">
                <select class="form-control" name="District">
                    <option>Select District</option>
                    @foreach ($district as $value)
                      <option value="{{ $value->MaD }}"> {{ $value->District }} </option>
                    @endforeach    
                </select>
            </div>
            <div class="form-group">
                <input name="TenSan" type="text" placeholder="Tên Sân" class="form-control">
            </div>
            <div class="form-group">
                <input name="Location" type="text" placeholder="Địa điểm" class="form-control">
            </div>
            <div class="form-group">
                <input name="Describe" type="text" placeholder="Mô tả" class="form-control">
            </div>
            <div class="form-group">     
                Ảnh: <input name="Image" type="file"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-fill btn-info">Thêm</button>
        </div>
    </form>
</div>
</div>
@endsection