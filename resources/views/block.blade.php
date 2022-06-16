@extends('layouts.dash')

@php
    $page_name = "Block page";   
    $page_name .= $user ?  ' ( ' . $user->name . ' ) ' : ''; 
@endphp

@section('title')
    {{$page_name}}
@endsection

@section('styles')
    
@endsection


@section('card-header')
<div class="row">
    <p class="col-10">{{$page_name}}</p>
</div>
@endsection



@section('card-body')
    {{-- @include('sub_page') like form or component --}}
    @include('components.block_page') 

@endsection



@section('scripts')
    
@endsection
