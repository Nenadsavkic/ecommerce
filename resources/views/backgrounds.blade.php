@extends('layouts.main')

@section('title')
    Backgrounds
@endsection

@section('content')
  <div class="container mb-5">

        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <h2 class="text-center bold mt-5"><strong>Choose Your Background</strong></h2>
                <p class="text-center mt-5 font mb-5">
                A great background can elevate your headshot to the next level.
                 Here you’ll find a curated selection of professional backdrops — from clean studio-style settings to 
                 modern office environments and soft gradients.Whether you're going for a corporate, creative, 
                 or casual look, simply pick the background that best matches your style — 
                 or send us your own, and we’ll take care of the rest..<br><br>
                    <span id="zoom"><b>Click on image to zoom in</b></span>
                    </p>
            </div>

        </div>
        <div class="row">

            @foreach(File::glob(public_path('images/backgrounds').'/*') as $path)
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