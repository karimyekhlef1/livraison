

@extends('layouts.dash')

@php
    $page_name = "No Content";    
@endphp

@section('title')
    {{$page_name}}
@endsection

@section('styles')
    
@endsection


@section('card-header')
    {{$page_name}}
@endsection



@section('card-body')
    {{-- @include('sub_page') like form or component --}}
        @include('components.no_products')
@endsection



@section('scripts')
    
@endsection

