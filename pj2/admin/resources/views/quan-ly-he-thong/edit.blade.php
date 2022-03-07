@extends('layouts.app')
@section('content')
<div class="content">
<div class="card">
    <form method="post" action="{{ route('quan-ly-he-thong.update', $user->MaU) }}">
        @method("PUT")
        @csrf
        <div class="card-header">
            <h4 class="card-title">
                <i class="ti-pencil"> Cập nhật</i>
            </h4>
        </div>
        <div class="card-content">
            <div class="form-group">
                <input name="TenU" type="text" class="form-control" value="{{ $user->TenU }}">
            </div>
            <div class="form-group">
                <input name="EmailU" type="email" class="form-control" value="{{ $user->EmailU }}">
            </div>
            <div class="form-group">
                <input name="PassU" type="password"  class="form-control" value="{{ $user->PassU }}">
            </div>
            <div class="form-group">
                <input name="DoBU" type="date" class="form-control" value="{{ $user->DoBU }}">
            </div>
            <div class="form-group">
                <input name="SdtU" type="number" class="form-control" value="{{ $user->SdtU }}">
            </div>
            <div class="form-group">
                <label>Cấm </label>
                    <div class="radio">
                        <input type="radio" name="BanU" value="0" <?= $user->BanU == 0 ? "checked" : "" ?>>
                        <label>Hoạt động</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="BanU" value="1" <?= $user->BanU == 1 ? "checked" : "" ?>>
                        <label>Khoá</label>
                    </div>
            </div>
            <button type="submit" class="btn btn-fill btn-info">Cập nhật</button>
        </div>
    </form>
</div>
</div>
@endsection