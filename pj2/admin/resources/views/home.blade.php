@extends('layouts.app')
@section('content')
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<div class="content">
	<h1>Xin chào</h1>
</div>
@endsection

