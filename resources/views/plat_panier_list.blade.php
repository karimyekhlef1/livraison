@extends('layouts.dash')


@php
    $page_name = "Panier Plats" ; 
    // $page_name .= $restaurant ?  ' ( ' . $restaurant->title . ' ) ' : '';
@endphp

@section('title')
    {{$page_name}} 
@endsection

@section('styles')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection


@section('card-header')
<div class="row">
    <p class="col-10">{{$page_name}}</p>
    {{-- @auth
        @if (auth()->user()->id == $restaurant->created_by or auth()->user()->is_admin)
            <a type="button" class="col-2 btn btn-warning float-right"
                href="{{ route('restaurants.edit', ['restaurant' => $restaurant->id]) }}" 
        >Edit</a>
        @endif
    @endauth --}}
    
    
</div>
    
@endsection

@section('card-body')
    <div class="d-flex flex-wrap justify-content-around">
        @foreach ($plats as $plat)
            <div style="width:265px" class="m-3">
                @include('components.plat')
            </div>    
        @endforeach  
    </div>
@endsection

