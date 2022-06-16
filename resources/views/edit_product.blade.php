@extends('layouts.dash')

@php
    $page_name = "Edit Product" ; 
    $page_name .= $product ?  ' ( ' . $product->title . ' ) ' : '';
@endphp

@section('title')
    {{$page_name}} 
@endsection

@section('styles')
    
@endsection


@section('card-header')
    <p> {{$page_name }} </p>
@endsection



@section('card-body')
    @include('forms.product.form')
@endsection



@section('scripts')
    
@endsection

