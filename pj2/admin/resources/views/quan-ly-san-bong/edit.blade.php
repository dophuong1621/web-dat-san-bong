@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="POST" action="{{ route('quan-ly-san-bong.update', $location->MaL) }}">
        @csrf
        @method("PUT")
        
        <div class="card-header">
            <h4 class="card-title">
                <i class="ti-pencil"> Cập nhật</i>
            </h4>
        </div>
        <div class="card-content">
            <div class="form-group">
                <input name="TenSan" type="text" class="form-control" placeholder="Tên Sân" value="{{ $location->TenSan }}">
            </div>
            <div class="form-group">
                <input name="Location" type="text" class="form-control" placeholder="Địa điểm" value="{{ $location->Location }}">
            </div>
            <div class="form-group">
                <select class="form-control" name="District">
                    <option value="{{ $location->MaD }}" selected>{{ $location->District }}</option>
                    @foreach ($district as $d)
                      <option value="{{ $d->MaD  }}"> 
                        {{ $d->District }} 
                        </option>
                    @endforeach    
                </select>
            </div>
            <div class="form-group">
                <input name="Describe" type="text"  class="form-control" placeholder="Mô tả" value="{{ $location->Describe }}">
            </div>
            <div class="form-group">
                <label>Tình trạng </label>
                    <div class="radio">
                        <input type="radio" name="TinhTrang" value="1" <?= $location->Status == 1 ? "checked" : "" ?>>
                        <label>Hoạt động</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="TinhTrang" value="0" <?= $location->Status == 0 ? "checked" : "" ?>>
                        <label>Không hoạt động</label>
                    </div>
            </div>
            {{-- <div class="form-group">
                <input name="Image" type="file" class="form-control" placeholder="Ảnh" value="{{ $location->Image }}">
                
            </div> --}}
            <button type="submit" class="btn btn-fill btn-info">Sửa</button>
        </div>
    </form>
</div>
</div>
@endsection