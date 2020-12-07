@extends('layout.layouthome')


@section('header')
    @include('component.header')
@endsection

@section('nav')
    @include('component.nav')
@endsection

@section('content')
    @include('auth.login_form')
@endsection

@section('footer')
    @include('component.footer')
@endsection