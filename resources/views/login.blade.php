@extends('home.layout')


@section('header')
    @include('home.header')
@endsection

@section('nav')
    @include('home.nav')
@endsection

@section('content')
    @include('auth.login_form')
@endsection

@section('footer')
    @include('home.footer')
@endsection