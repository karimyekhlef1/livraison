@extends('layouts.dash')


@php
    $page_name = "Product Details" ; 
    $page_name .= $product ?  ' ( ' . $product->title . ' ) ' : '';
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
        @if (auth()->user()->id == $product->created_by or auth()->user()->is_admin)
            <a type="button" class="col-2 btn btn-warning float-right"
                href="{{ route('products.edit', ['product' => $product->id]) }}" 
        >Edit</a>
        @endif
    @endauth
    
    
</div>
    
@endsection

@section('card-body')
    {{-- @include('components.product') --}}
    <div class="wrapper row">
        <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="/storage/images/{{$product->photo}}" width="300" height="300" /></div>

            </div>

            
        </div>
        <div class="details col-md-6">
            <h3 class="product-title"> {{ $product->title }} </h3>
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
            <p class="product-description"> {{ $product->description }} </p>
            <h6>Quantity Stock : {{ $product->quantity }}</h6>
            <h6>Created By  : <a href="{{ route('users.profile', ['user' => $product->created_by]) }}" class="font-weight-bold">{{ $product->user->name }}</a> </h6>
            <h6>Category : <a href="{{ route('products.index', ['category' => $product->category_id]) }}" class="font-weight-bold">{{ $product->category->name }}</a> </h6>
            <h4 class="price">current price: <span> {{ $product->price }} (DZD)</span></h4>
            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
            
            <h5 class="sizes">{{ $product->is_valid ? 'Product Valid' : 'Product Not Valid' }}
            </h5>
            <div class="action">
            <a class="btn btn-success" href="{{ route('products.order', ['product' => $product->id]) }}" type="button">
                @if ( $product->type_transaction === 'sale')
                    Buy Now (Achater)
                @else   
                    @if ($product->type_transaction === 'rent')
                        Book now (Louer)
                    @else    
                        Exchange Now (Changer)
                    @endif 
                @endif
            </a>
                <button class="btn btn-danger" type="button"><span class="fa fa-heart"></span></button>
            </div>
        </div>
    </div>
@endsection


{{-- @section('scripts')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection --}}