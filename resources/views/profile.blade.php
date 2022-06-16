@extends('layouts.dash')

@php
    $page_name = "User Profile";   
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
    @auth
        @if (auth()->user()->id == $user->id or auth()->user()->is_admin)
            <a type="button" class="col-2 btn btn-warning float-right"
                href="{{ route('admin.users.edit', ['user' => $user->id]) }}" 
        >Edit</a>
        @endif
    @endauth
</div>
@endsection



@section('card-body')
    {{-- @include('sub_page') like form or component --}}
    @include('components.user_details') 

@endsection



@section('scripts')
    
@endsection

