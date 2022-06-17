@extends('layouts.dash')


@php
    $page_name = "restaurant Details" ; 
    $page_name .= $restaurant ?  ' ( ' . $restaurant->title . ' ) ' : '';
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
    @auth
        @if (auth()->user()->id == $restaurant->created_by or auth()->user()->is_admin)
            <a type="button" class="col-2 btn btn-warning float-right"
                href="{{ route('restaurants.edit', ['restaurant' => $restaurant->id]) }}" 
        >Edit</a>
        @endif
    @endauth
    
    
</div>
    
@endsection

@section('card-body')
    {{-- @include('components.restaurant') --}}
    <div class="wrapper row">
        <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="/storage/images/{{$restaurant->photo}}" width="300" height="300" /></div>

            </div>

            
        </div>
        <div class="details col-md-6">
            <h3 class="restaurant-title"> {{ $restaurant->nom_de_restaurant }} </h3>
            <div class="rating">
                <div class="stars">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <span class="review-no">41 reviews</span>
            </div>
            <p class="restaurant-description"> {{ $restaurant->description }} </p>
            <h6>Quantity Stock : {{ $restaurant->quantity }}</h6>
            {{-- <h6>Created By  : <a href="{{ route('users.profile', ['user' => $restaurant->created_by]) }}" class="font-weight-bold">{{ $restaurant->user->name }}</a> </h6> --}}
            {{-- <h6>Category : <a href="{{ route('restaurants.index', ['category' => $restaurant->category_id]) }}" class="font-weight-bold">{{ $restaurant->category->name }}</a> </h6> --}}
            <h4 class="price">current price: <span> {{ $restaurant->price }} (DZD)</span></h4>
            <p class="vote"><strong>91%</strong> of buyers enjoyed this restaurant! <strong>(87 votes)</strong></p>
            
            <h5 class="sizes">{{ $restaurant->is_valid ? 'restaurant Valid' : 'restaurant Not Valid' }}
            </h5>
            <div class="action">

            </div>
        </div>


        </div>
@endsection

@section('card-footer')
        <div class="d-flex flex-wrap justify-content-around">
        @foreach ($restaurant->plats as $plat)
            <div style="width:265px" class="m-3">
                @include('components.plat')
            </div>    
        @endforeach  
    </div>
@endsection  

{{-- @section('scripts')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection --}}