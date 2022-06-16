@extends('layouts.dash')

@php
    $page_name = "Page Name Here";    
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
@endsection



@section('scripts')
    
@endsection

