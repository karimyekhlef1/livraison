
@extends('layouts.app')

@php

     $title_page = $title ?? 'tout restaurants';
@endphp


@section('title', $title_page)

@section('content')




<div class="container">
    <div class="d-flex flex-wrap justify-content-around">
        @foreach ($restaurants as $restaurant)
            <div style="width:265px" class="m-3">
                @include('components.restaurant')
            </div>    
        @endforeach  
    </div>
</div>
@endsection


@section('scripts')
    
@endsection
