<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto">
                       <div>
                         
                        
                       </div>
                        {{-- <li class="nav-item">  
                            @include('components.categories_list')
                        </li> --}}
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('products.index') }}">{{ __('Products') }}</a> --}}
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('Products') }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                {{-- <a class="dropdown-item" href="{{route('products.index')}}">{{ __('All') }}</a>
                                <a class="dropdown-item" href="{{route('products.index', ['valid' => 'yes'])}}">{{ __('Valid') }}</a>
                                <a class="dropdown-item" href="{{route('products.index', ['valid' => 'no'])}}">{{ __('Not Valid') }}</a> --}}
                                </div>
                            </div>
                        </li>
                        
                        {{-- المستخدم يجب ان يكون داخل --}}
                        {{-- @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.create') }}">{{ __('Add Product') }}</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.my') }}">{{ __('My Products') }}</a>
                            </li>   
                        
                                   <li class="nav-item">
                                <a class="nav-link" href="{{ route('panier.my') }}">{{ __('panier') }}</a>
                            </li>
                         
                         
                        @endauth --}}
                        
                        {{-- المستخدم يجب ان يكون له الإظن باالوصول  --}}
                        @auth
                            @if(auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users.index') }}">{{ __('Users') }}</a>
                            </li>
                            @endif
                        @endauth
                        
                        
                        
                    </ul>
                    {{-- <form class="form-inline my-2 my-lg-0" action=" {{ route('products.search') }}" method="POST">
                        @csrf
                        <input class="form-control mr-sm-2" name="search" value="{{ Request::get('search') }}" type="search" placeholder="Search Product" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('users.profile', ['user' => Auth::id() ]) }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>
