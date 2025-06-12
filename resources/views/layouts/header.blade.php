<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('/images/logo/logo-img.png') }}" type="image/x-icon">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- Foontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <link rel="stylesheet" href="{{ asset('/css/tooplate-main.css') }}">
    

    <!-- OWL CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="{{ asset('/css/flex-slider.css') }}">


     <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  </head>

  <body> 
    
    <!-- Pre Header --> 
    <div id="pre-header" class="pre-header">
      <div class="container pre-header">
        <div class="row">
          <div class="col-md-12">
            <span>Welcome to Our Professional Headshot Retouching Service</span>
          </div>
        </div>
      </div>
    </div>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top logo-container">
      <div class="container">
        <!-- <a href="/"><img src="{{ asset('/images/logo/logo-img.png') }}"
          class="img-fluid rounded" style="width: 100px"></a> -->
        <a class="navbar-brand img-fluid logo-ceo" href="/"><img src="{{asset('/images/logo/logo-ceo.png')}}" width="350px" id="logo-ceo" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-home"></span>
    </button>
        <div class="collapse navbar-collapse mt-100px" id="navbarResponsive">
          <ul class="navbar-nav ml-auto mt-auto">
            <li class="text-center nav-item <?php if(isset(request()->home)){echo "active";}else{echo "";}?>">
              <a   href="{{ route('home') }}?home={{ "active" }}" class="nav-link">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="text-center  nav-item <?php if(isset(request()->products)){echo "active";}else{echo "";}?>">
              <a  href="{{ route('products') }}?products={{ "active" }}" class="nav-link ">Products</a>
            </li>
            <li class="text-center nav-item <?php if(isset(request()->about)){echo "active";}else{echo "";}?>">
              <a class="nav-link" href="{{ route('about') }}?about={{ "active" }}">Galery</a>
            </li>
            <li class="text-center nav-item <?php if(isset(request()->contact)){echo "active";}else{echo "";}?>">
              <a class="nav-link" href="{{ route('contact') }}?contact={{ "active" }}">Contact Us</a>
            </li>
            <li class="text-center nav-item mt-2 mb-2 <?php if(isset(request()->cart)){echo "active";}else{echo "";}?>">
              <a class="fa show fa-shopping-cart" href="{{ route('cart') }}?cart={{ "active" }}"></a>
            </li>
    
           </ul>
        </div>
      </div>
    </nav>
    

