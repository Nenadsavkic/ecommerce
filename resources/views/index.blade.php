@extends('layouts.main')

@section('title')

  Home
    
@endsection

@section('content')
<div class="container">
<!-- Carousel inner Focus -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/coverImages/cover_image1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="carousel-text">Welcome to 
          <img class="img-focus" src="{{asset('/images/logo/logo-ceo.png')}}" width="200px" alt=""> 
          <span class="focused-text">- Headshots</span></h1>
        <h1 class="carousel-text">the best web platform for headshot retouching.</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/coverImages/cover_image1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="carousel-text">Join us</h1>
        <h1 class="carousel-text">and let's build something amazing together.</h1>
      </div>
    </div>
  </div>

  <!-- Controls (optional) -->
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>

<!-- Carousel Inner End -->
 </div>

 <div class="container">
  <br><br>
  <h1 class="text-center">LOREM IPSUM</h1>
  <br><br>
  <p class="text-dark w-75 mx-auto">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut est ac velit rutrum pellentesque nec a leo. Cras vulputate tristique sapien, sit amet hendrerit metus malesuada vel. Nullam bibendum metus at viverra tempor. Sed at dui a ipsum imperdiet tempor. Quisque ut dolor blandit, finibus odio at, eleifend libero. Maecenas placerat lectus quam. Proin lobortis ex ut ex consequat congue.

Quisque vitae venenatis mauris, ut pellentesque est. Morbi nec erat a urna malesuada tempor at et ex. Aliquam ut sapien ut arcu posuere efficitur. Vestibulum quam velit, malesuada id iaculis at, fermentum sed justo. Nunc porttitor malesuada ante, eu vulputate urna cursus ut. Morbi odio elit, accumsan sed nunc ac, faucibus rhoncus nunc. Maecenas a elit aliquam, aliquam nibh vitae, faucibus velit. Duis pellentesque euismod sollicitudin. Mauris porta quam ac libero ullamcorper tempus.

Mauris consequat, arcu at accumsan commodo, lacus felis rhoncus augue, ac tristique velit libero vel massa. Donec in faucibus purus. Phasellus tortor quam, eleifend id vehicula eu, viverra sit amet ipsum. Duis sem nulla, bibendum fermentum blandit quis, gravida interdum augue. Etiam nec auctor erat. Nulla cursus mi sed ullamcorper placerat. Aenean gravida, libero ornare lobortis eleifend, nisi nibh semper lectus, nec tempor urna turpis eu dolor. Nulla non tortor feugiat, fringilla lacus eget, fringilla lorem.

Maecenas pretium augue a erat dapibus, in sollicitudin augue finibus. Ut facilisis quis lectus at vestibulum. Duis pretium sollicitudin facilisis. Proin nec congue tortor, sed hendrerit quam. Mauris elementum viverra vulputate. Aenean non elit lectus. Integer sollicitudin ligula dui, sed tincidunt metus lobortis ut. Etiam vel viverra tortor. Donec augue sapien, pulvinar blandit aliquam quis, sagittis ac erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In porttitor metus eu lectus rhoncus, non gravida sem iaculis. Mauris fermentum malesuada eros maximus ultricies. Pellentesque vulputate turpis eget nunc dictum suscipit. Mauris dolor dui, mattis vel rutrum euismod, porta eget leo. Duis dapibus at arcu in ultricies.

Aenean pulvinar lorem metus, id pretium velit accumsan at. Nunc auctor risus non dolor pellentesque, non gravida arcu consectetur. Sed sit amet finibus quam. Duis at elit non magna imperdiet sagittis. Pellentesque et pretium purus, non pharetra nulla. Cras egestas ligula et diam viverra, fringilla efficitur nisl pretium. Nunc auctor risus tincidunt lectus eleifend, viverra vehicula quam accumsan. Etiam id leo ac risus fringilla posuere. Integer sit amet enim nec metus semper mattis sed ac lorem. Mauris faucibus nibh quis vehicula placerat. Nam tincidunt felis varius, commodo diam sit amet, tempor magna. Maecenas id tincidunt ante, at gravida lacus. Sed condimentum libero felis, eget rhoncus ligula elementum quis. Aenean dui metus, hendrerit sed mattis quis, tincidunt sed magna. Nunc ut bibendum leo. Nam tempus dictum tincidunt.

Phasellus consequat velit vel mauris blandit, sit amet fermentum tortor finibus. Suspendisse tincidunt augue nec neque semper hendrerit. Morbi tincidunt congue velit in interdum. Curabitur quis cursus dolor. Nulla ut magna tincidunt, imperdiet arcu at, convallis elit. In sem est, pellentesque ac faucibus hendrerit, lacinia eget nibh. Suspendisse in leo sodales, pellentesque augue non.
  </p>
  <br><br>
 </div>



<div class="container">
  <div id="carouselHeadshots" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="0" class="active" aria-current="true" 
       aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselHeadshots" data-bs-slide-to="6" aria-label="Slide 7"></button>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/headshots/headshot1.jpg" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot2.jpg" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot3.jpg" class="d-block w-100" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot4.jpg" class="d-block w-100" alt="Image 4">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot5.jpg" class="d-block w-100" alt="Image 5">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot6.jpg" class="d-block w-100" alt="Image 6">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot7.jpg" class="d-block w-100" alt="Image 7">
      </div>
    </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeadshots" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHeadshots" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>  
</div>   
<br><br>
@endsection

@yield('page-scripts')