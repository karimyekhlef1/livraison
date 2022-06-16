@extends('layouts.dash')

@php
    $page_name = "Order Pdoduct";
    $page_name .= $product ?  ' ( ' . $product->title . ' ) ' : '';
@endphp

@section('title')
    {{$page_name}}
@endsection

@section('styles')
    
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

@endsection


@section('card-header')
    {{$page_name}}
@endsection

@section('card-body')
    {{-- @include('sub_page') like form or component --}}
    @switch($product->type_transaction)
        @case('sale')
            {{-- @include('forms.order.sale') --}}
            @include('payment')
            @break
        @case('rent')
            {{-- @include('forms.order.rent') --}}
            @include('payment')
            @break
        @case('exchange')
            @include('forms.order.exchange')
            @break
        @default
            @include('forms.order.sale')
    @endswitch
    
@endsection


@section('scripts')
    
@endsection