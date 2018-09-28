@extends('website.layouts.websiteLayout')


@section('navbar')
    @include('website.blogWebLayout.navbar')
@endsection


@section('header')
blog
@endsection

@section('content')
    @include('website.blogWebLayout.blogsContent')
@endsection