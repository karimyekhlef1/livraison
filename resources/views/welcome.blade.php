<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name') }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div>
    </body>
</html>

{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        
        <link href="assets/css/all.min.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                
    </head>
    <body>
       
<header class="section-header">
<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
    </ul>
    <ul class="navbar-nav">
    <li  class="nav-item"><a href="#" class="nav-link"> Call: +0000000000 </a></li>
    <li class="nav-item dropdown">
       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
        <li><a class="dropdown-item" href="#">Arabic</a></li>
        <li><a class="dropdown-item" href="#">Russian </a></li>
        </ul>
    </li>
  </ul> <!-- list-inline //  -->
  
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->
<section class="header-main border-bottom">
  <div class="container">
<div class="row align-items-center">
  <div class="col-lg-2 col-6">
    <a href="#" class="brand-wrap">
      Company Name
    </a> <!-- brand-wrap.// -->
  </div>
  <div class="col-lg-6 col-12 col-sm-12">
    <form action="#" class="search">
      <div class="input-group w-100">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
    </form> <!-- search-wrap .end// -->
  </div> <!-- col.// -->
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
        <span class="badge badge-pill badge-danger notify">0</span>
      </div>
      <div class="widget-header icontext">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
        <div class="text">
          <span class="text-muted">Welcome!</span>
          <div> 
            <a href="#">Sign in</a> |  
            <a href="#"> Register</a>
          </div>
        </div>
      </div>
    </div> <!-- widgets-wrap.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>    All category</strong></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Furnitures</a>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header> <!-- section-header.// -->
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
<div class="container">
<div class="intro-banner-wrap">
  <img src="assets/images/1.jpg" class="img-fluid rounded">
</div>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
<div class="container">
<article class="card card-body">
<div class="row">
  <div class="col-md-4">  
    <figure class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">Fast delivery</h5>
        <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore </p>
      </figcaption>
    </figure> <!-- iconbox // -->
  </div><!-- col // -->
  <div class="col-md-4">
    <figure  class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>  
      <figcaption class="pt-3">
        <h5 class="title">Creative Strategy</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         </p>
      </figcaption>
    </figure> <!-- iconbox // -->
  </div><!-- col // -->
    <div class="col-md-4">
    <figure  class="item-feature">
      <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
      <figcaption class="pt-3">
        <h5 class="title">High secured </h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         </p>
      </figcaption>
    </figure> <!-- iconbox // -->
  </div> <!-- col // -->
</div>
</article>
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Popular products</h3>
</header><!-- sect-heading -->
  
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Just another product name</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Some item name here</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Great product name here</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Just another product name</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">New arrived</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/5.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Just another product name</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/6.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Some item name here</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/7.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Great product name here</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/9.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Just another product name</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 34 reviws</span>
        </div>
        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-bottom-sm">
<div class="container">
<header class="section-heading">
  <a href="#" class="btn btn-outline-primary float-right">See all</a>
  <h3 class="section-title">Recommended</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Just another product name</a>
        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Some item name here</a>
        <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Great product name here</a>
        <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">Just another product name</a>
        <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Our Brands</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-2 col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo1.png"></a>
      <figcaption class="border-top pt-2">36 Products</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo2.png"></a>
      <figcaption class="border-top pt-2">980 Products</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo3.png"></a>
      <figcaption class="border-top pt-2">25 Products</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo4.png"></a>
      <figcaption class="border-top pt-2">72 Products</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo5.png"></a>
      <figcaption class="border-top pt-2">41 Products</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
  <div class="col-md-2  col-6">
    <figure class="box item-logo">
      <a href="#"><img src="assets/images/logos/logo2.png"></a>
      <figcaption class="border-top pt-2">12 Products</figcaption>
    </figure> <!-- item-logo.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->
<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y">
<div class="container">
<h3 class="mb-3">Download app demo text</h3>
<a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
<a href="#"><img src="assets/images/misc/appstore.png" height="40"></a>
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
  <div class="container">
    <section class="footer-top  padding-y">
      <div class="row">
        <aside class="col-md col-6">
          <h6 class="title">Brands</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Adidas</a></li>
            <li> <a href="#">Puma</a></li>
            <li> <a href="#">Reebok</a></li>
            <li> <a href="#">Nike</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Company</h6>
          <ul class="list-unstyled">
            <li> <a href="#">About us</a></li>
            <li> <a href="#">Career</a></li>
            <li> <a href="#">Find a store</a></li>
            <li> <a href="#">Rules and terms</a></li>
            <li> <a href="#">Sitemap</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Help</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contact us</a></li>
            <li> <a href="#">Money refund</a></li>
            <li> <a href="#">Order status</a></li>
            <li> <a href="#">Shipping info</a></li>
            <li> <a href="#">Open dispute</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Account</h6>
          <ul class="list-unstyled">
            <li> <a href="#"> User Login </a></li>
            <li> <a href="#"> User register </a></li>
            <li> <a href="#"> Account Setting </a></li>
            <li> <a href="#"> My Orders </a></li>
          </ul>
        </aside>
        <aside class="col-md">
          <h6 class="title">Social</h6>
          <ul class="list-unstyled">
            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
          </ul>
        </aside>
      </div> <!-- row.// -->
    </section>  <!-- footer-top.// -->
    <section class="footer-bottom row">
      <div class="col-md-2">
        <p class="text-muted">   2021 Company name </p>
      </div>
      <div class="col-md-8 text-md-center">
        <span  class="px-2">info@com</span>
        <span  class="px-2">+000-000-0000</span>
        <span  class="px-2">Street name 123, ABC</span>
      </div>
      <div class="col-md-2 text-md-right text-muted">
        <i class="fab fa-lg fa-cc-visa"></i> 
        <i class="fab fa-lg fa-cc-paypal"></i> 
        <i class="fab fa-lg fa-cc-mastercard"></i>
      </div>
    </section>
  </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
        
    </body>
</html>

 --}}