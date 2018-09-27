@extends('admin.layouts.appLayout')

@section('pageTitle')
    @include('admin.blogLayout.pageTitle')
@endsection

@section('sideBar')
    @include('admin.blogLayout.sideBar')
@endsection

@section('content')
    @include('admin.blogLayout.content')
@endsection

@section('script')
    @include('admin.blogLayout.script')
@endsection


