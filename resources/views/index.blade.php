@extends('layouts.main')

@section('title')

  Home
    
@endsection

@section('content')
<div class="container"><br>
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
  <section class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h1 class="mb-4 text-center">How to Take the Ideal Headshot Photo Before Retouching</h1>
        <br><br>
      </div>  
      <div class="row justify-content-center">
          <div class="offset-1 col-md-6">      
            <p>A great headshot starts with a <b>good quality photo.</b> For successful retouching, the initial image should be clear, well-lit, and professional-looking — even if taken at home with a smartphone.</p>
            <br><br>
            <img src="/images/homepage_images/selfie10.jpg" class="img-fluid mt-4 rounded" width="200px" alt="">
            <img src="/images/homepage_images/selfie7.jpg" class="img-fluid mt-4 ms-4 rounded" width="200px" alt="">
          </div>
          <div class="col-md-4 offset-1 align-items-end">  
            <img src="/images/homepage_images/selfie2.jpg" class="img-fluid rounded" width="200px" alt="">    
          </div>
      </div>
        <br>
      <div class="row justify-content-center">
          <div class="col-lg-10">
            <h3 class="mt-4 text-center">1. Proper Lighting</h3><br>
          </div> 
          <div class=" col-lg-10">  
            <p class="text-center">Natural light next to a window is ideal. Avoid direct sunlight and shadows that cover the face. Make sure the eyes are clearly visible and well-lit.</p><br><br>
          </div>
          <div class="col-4">  
            <img src="/images/homepage_images/headshot4.jpg" class="img-fluid rounded" alt=""><br><br>
          </div>
      </div>
        
      <div class="row justify-content-center">
          <div class="col-lg-10">
            <h3 class="mt-4 text-center">2. Background and Contrast</h3>
            <br><br>
          </div>
          <div class="col-lg-10">
            <p class="text-center">Use a plain background, such as a white wall. It's important to have <b>good contrast</b> between the person and the background, especially if the background will be replaced later. This helps with clean edge masking and hair refinement.</p>
            <br><br>
          </div>
          <div class="col-4">  
            <img src="/images/homepage_images/headshot2.jpg" class="img-fluid rounded" alt="">
          </div>
          <div class="col-4">  
            <img src="/images/homepage_images/headshot7.jpg" class="img-fluid rounded" alt="">
            <br><br>
          </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3 class="mt-4 text-center">3. Background Replacement</h3><br><br>
        </div>  
        <div class="col-lg-10">
            <p class="text-center">If you'd like a different background, you can choose one from <a href="{{ route('backgrounds') }}?backgrounds={{ "active" }}">our collection</a> or send your preferred one. High contrast between the subject and the background makes it easier to remove and replace it accurately.</p>
            <br>
            <p class="text-center"><b>You can see examples of headshot photos with changed backgrounds in the carousel below.</b></p>
        </div>
      </div>
    </div>   
  </section>

</div><br><br>



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
<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">    
      <h3 class="mt-4 text-center">4. Clothing and Appearance</h3><br>
    </div>
    <div class="col-lg-10">  
      <p class="text-center">We recommend a professional look – blazer, shirt, or blouse. However, you may opt for a casual outfit as well – it's your choice. Just make sure the clothes are simple, with no text or loud patterns.</p>
      <br><br>
      
    </div>  
      <div class="col-3">
        <img src="/images/homepage_images/headshot13.jpg" class="img-fluid rounded" alt="">
      </div> 
       <div class="col-3">
        <img src="/images/homepage_images/headshot11.jpg" class="img-fluid rounded" alt="">
      </div> 
      <div class="col-3"> 
        <img src="/images/homepage_images/headshot10.jpg" class="img-fluid rounded" alt="">
        <br><br>
      </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h3 class="mt-4 text-center">5. How to Take the Photo</h3><br>
      </div> 
      <div class="col-lg-10"> 
        <p class="text-center">You can use a smartphone, a digital camera, or have someone else take the photo for you. A selfie works just fine – modern phones have cameras good enough for headshot photography. Make sure the camera is at eye level, and pose in a natural, confident, and professional way.</p>
        <br><br>
      </div>
      <div class="col-4">
        <img src="/images/homepage_images/headshot0.jpg" class="img-fluid rounded" alt="">
      </div> 
      <div class="col-4"> 
        <img src="/images/homepage_images/selfie0.jpg" class="img-fluid rounded" alt="">
        <br><br>
      </div>
        
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
         <h3 class="mt-4 text-center">6. Image Quality</h4><br>
      </div>
      <div class="col-lg-10 d-flex justify-content-center">
          <ul class="text-center list-unstyled">
            <li><b>The image should be sharp, not blurry</b></li>
            <li><b>No filters or pre-applied effects</b></li>
            <li><b>High resolution (1000px or more)</b></li>
            <li><b>Good lighting and contrast</b></li>
          </ul>
      </div> 
    </div>   
    <div class="row justify-content-center">
          <div class="col-lg-8">
             <p class="mt-4 text-center"><b>Follow these guidelines to ensure your photo provides the perfect base for a professionally retouched headshot.</b></p>
          </div>
    </div>
  </div>
</section>

@endsection

@yield('page-scripts')