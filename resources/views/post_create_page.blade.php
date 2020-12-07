@extends('layout.layouthome')


@section('header')
    @include('component.header')
@endsection

@section('content')
    @include('create.post_create')
@endsection

@section('footer')
    @include('component.footer')
@endsection