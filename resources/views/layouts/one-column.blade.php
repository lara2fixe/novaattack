@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
    @yield('center-column')
@endsection

@section('footer')
    @include('parts.contact')
    @include('parts.footer')
    @include('parts.map')
@endsection
