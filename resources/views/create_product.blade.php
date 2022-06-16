@extends('layouts.dash')

@php
    $page_name = "Create New Product";    
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
    @include('forms.product.form')
@endsection



@section('scripts')
    
@endsection

