@extends('admin.layouts.appLayout')

@section('pageTitle')
<title>Kelola Produk | FROZEN YOGURT SHOP</title>
@endsection

@section('sideBar')
    @include('admin.produkLayout.sideBar')
@endsection

@section('contentTitle')
    Kelola Produk
@endsection
@section('content')
    @include('admin.produkLayout.content')
@endsection

@section('script')
    @include('admin.produkLayout.script')
@endsection


