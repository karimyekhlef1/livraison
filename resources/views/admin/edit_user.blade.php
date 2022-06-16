
@extends('layouts.dash')

@section('title', 'Edit User')


@section('card-header')
    {{ _('Edit User') }}
@endsection

@section('card-body')
    @include('forms.user.edit')
@endsection
