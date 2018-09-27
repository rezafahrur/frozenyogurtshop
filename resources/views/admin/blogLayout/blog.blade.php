@extends('admin.layouts.appLayout')

@section('pageTitle')
<title>Kelola Blog | FROZEN YOGURT SHOP</title>
@endsection

@section('sideBar')
    @include('admin.blogLayout.sideBar')
@endsection

@section('contentTitle')
    Kelola Blog
@endsection
@section('content')
    @include('admin.blogLayout.content')
@endsection

@section('script')
    @include('admin.blogLayout.script')
@endsection


