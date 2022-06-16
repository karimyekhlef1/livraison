@extends('layouts.dash')

@section('title', 'User Details')



@section('card-header')
    User Details
@endsection

@section('card-body')
    {{-- @include('') --}}
    <h1> {{ $user->name }} </h1>
    <h2> {{ $user->email }} </h2>
    <h2> {{ $user->is_admin ? 'Admin' : 'Not Admin'}} </h2>
    <h2> {{ $user->is_valid ? 'Valid' : 'Not Valid'}} </h2>
    <h2> {{ $user->is_blocked ? 'Blocked' : 'Active (Not Blocked)'}} </h2>
    <h2> {{ $user->is_blocked ? 'Blocked' : 'Active (Not Blocked)'}} </h2>
@endsection
