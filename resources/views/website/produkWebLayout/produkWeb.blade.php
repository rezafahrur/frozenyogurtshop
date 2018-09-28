@extends('website.layouts.websiteLayout')


@section('navbar')
    @include('website.produkWebLayout.navbar')
@endsection


@section('header')
products
@endsection

@section('content')
    @include('website.produkWebLayout.productsContent')
@endsection