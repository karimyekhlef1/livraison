@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }} comme: <span style="font-size: 20px">{{ $type }}</span></div>

                

                <div class="card-body">
                    <form method="POST" action="{{ route('register.type', ['type'=> $type]) }}">
                        @csrf
                        
                        <input type="hidden" id="user_type" name="type" value="{{$type}}">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="prenom" autofocus>

                                @error('adresse')
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
                            <label for="nom_de_restaurant" class="col-md-4 col-form-label text-md-right">{{ __('Name Restaurant') }}</label>

                            <div class="col-md-6">
                                <input id="nom_de_restaurant" type="text" class="form-control @error('nom_de_restaurant') is-invalid @enderror" name="nom_de_restaurant" value="{{ old('name_restaurant') }}" required autocomplete="name_restaurant" autofocus>

                                @error('nom_de_restaurant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                         @if ($type === 'restaurant')
                              <div class="form-group row">
                            <label for="registre_commerce" class="col-md-4 col-form-label text-md-right">{{ __('Register Commerce') }}</label>

                            <div class="col-md-6">
                                <input id="registre_commerce" type="text" class="form-control @error('registre_commerce') is-invalid @enderror" name="registre_commerce" value="{{ old('registre_commerce') }}" required autocomplete="registre_commerce" autofocus>

                                @error('registre_commerce')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                      <label for="type_restaurant" class="col-md-4 col-form-label text-md-right">{{ __('Type de restaurant') }}</label>

                      <div class="col-md-6">
                          <input id="type_restaurant" type="text" class="form-control @error('type_restaurant') is-invalid @enderror" name="type_restaurant" value="{{ old('type_restaurant') }}" required autocomplete="type_restaurant" autofocus>

                          @error('type_restaurant')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                        @endif
                        @if ($type === 'livreur')
                              <div class="form-group row">
                            <label for="vehicule" class="col-md-4 col-form-label text-md-right">{{ __('Vehicule') }}</label>

                            <div class="col-md-6">
                                <input id="vehicule" type="text" class="form-control @error('vehicule') is-invalid @enderror" name="vehicule" value="{{ old('vehicule ') }}" required autocomplete="vehicule " autofocus>

                                @error('vehicule')
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
