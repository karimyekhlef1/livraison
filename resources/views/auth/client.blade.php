@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                {{ $type }}

                <div class="card-body">
                    <form method="POST" action="{{ route('register.type', ['type'=> $type]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                          @if ($type === 'restaurant')
                              <div class="form-group row">
                            <label for="name_restaurant" class="col-md-4 col-form-label text-md-right">{{ __('Name Restaurant') }}</label>

                            <div class="col-md-6">
                                <input id="name_restaurant" type="text" class="form-control @error('name_restaurant') is-invalid @enderror" name="name_restaurant" value="{{ old('name_restaurant') }}" required autocomplete="name_restaurant" autofocus>

                                @error('name_restaurant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                         @if ($type === 'restaurant')
                              <div class="form-group row">
                            <label for="num_register_commerce " class="col-md-4 col-form-label text-md-right">{{ __('Num Register Commerce ') }}</label>

                            <div class="col-md-6">
                                <input id="num_register_commerce " type="text" class="form-control @error('num_register_commerce ') is-invalid @enderror" name="num_register_commerce " value="{{ old('num_register_commerce ') }}" required autocomplete="num_register_commerce " autofocus>

                                @error('num_register_commerce ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        @if ($type === 'livreur')
                              <div class="form-group row">
                            <label for="type_vehicule " class="col-md-4 col-form-label text-md-right">{{ __('Type Vehicule ') }}</label>

                            <div class="col-md-6">
                                <input id="type_vehicule " type="text" class="form-control @error('type_vehicule ') is-invalid @enderror" name="type_vehicule " value="{{ old('type_vehicule ') }}" required autocomplete="type_vehicule " autofocus>

                                @error('type_vehicule ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
