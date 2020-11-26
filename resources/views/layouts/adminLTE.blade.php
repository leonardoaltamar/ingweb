@extends('adminlte::page')

@section('title', 'portal arteCol')

@section('content_header')
    @yield('content_header-child')
@stop

@section('content')
    @yield('content-child')
@endsection

@section('css')
    @yield('css-chield')
@endsection

@section('js')
    @yield('js-child')
@endsection
