@extends('website.layouts.websiteLayout')


@section('navbar')
    @include('website.singlePostLayout.navbar')
@endsection


@section('header')
Single Post
@endsection

@section('content')
    @include('website.singlePostLayout.singlePostContent')
@endsection