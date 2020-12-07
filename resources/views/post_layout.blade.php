@extends('layout.layouthome')


@section('header')
    @include('component.header')
@endsection

@section('nav')
    @include('component.nav')
@endsection

@section('content')
    @include('table.posts_table')
@endsection

@section('footer')
    @include('component.footer')
@endsection