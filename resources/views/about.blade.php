@extends('layouts.main')

@section('title')
    Galery
@endsection

@section('content')
    
   <div class="container mb-5">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center bold mt-5"><strong>Welcome to my gallery</strong></h2>
                <p class="text-center mt-5 font mb-5"><strong>
                Hello, on this page you can see some of my Graphic Design works
                    in Adobe Illustrator, InDesign and Photoshop. My narrow specialty is editing and retouching
                    images in Photoshop.<br><br>
                    <span id="zoom">Click on image to zoom in</span>
                    </strong></p>
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
