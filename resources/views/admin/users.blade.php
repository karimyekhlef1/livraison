
@extends('layouts.dash')

@section('title', 'Users Table')

@section('card-header')
    {{ _('Users') }}
@endsection

@section('card-body')
    @auth
        @if(auth()->user()->is_admin) 
            @include('tables.users')
        @else
            <p>Sorry, You don't have the permission for this page</p>    
        @endcan

    @endauth
    
@endsection
