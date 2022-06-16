@extends('layouts.app')


@section('content')
<style>
div.fixed {
  position: fixed;
  bottom: 15px;
  right: 0;
  width: 260px;
}
</style>

<div class="fixed">
    <button type="button" class="btn btn-success"> Etablie </button>
    <button  type="button" class="btn 
    {{-- btn-danger --}}
    "> Annuler</button>

</div>


@endsection


