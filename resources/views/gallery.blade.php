@extends('layouts.main')

@section('title')
    Gallery
@endsection

@section('content')
    
   <div class="container mb-5">

        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <h2 class="text-center bold mt-5"><strong>Welcome to my gallery</strong></h2>
                <p class="text-center mt-5 font mb-5">
              Here you’ll find a selection of my previous headshot retouching work — simple photos turned into clean, 
              professional portraits.Take a look and see what’s possible. Your photo could be next.<br><br>
                    <span id="zoom"><b>Click on image to zoom in</b></span></p>
            </div>

        </div>
        <div class="row">

            @foreach(File::glob(public_path('images/design_images').'/*') as $path)
                <div class="col-sm-6 col-lg-4 col-xl-3 mt-3">
                <img src="{{ str_replace(public_path(), '', $path) }}"
                class="img-fluid thumb small-img" style="width: 100%"
                    onclick="change(this)">
                </div>

            @endforeach

        </div>

</div>

@endsection
@section('page-scripts')

   <script>

   function change(element){
    element.classList.toggle("fullsize");
   }

   </script>

@endsection
