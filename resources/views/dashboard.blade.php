
@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
    {{-- Container1  Start --}}
<div class="container-fluid bg-dark containerDashboard">
    <div class="row">
        <div class="col-md-2 pl-5 offset-md-5 text-center">
            <h2 class="mt-5 text-white user_name">User name</h2>
            <p class="text-white">Memaber since: </p>
        </div>
        <div class="userImg col-md-3 offset-md-5 pl-5">
            <img
            @if (isset(Auth::user()->user_image))
               src="{{ asset('/images/user_image/'.Auth::user()->user_image) }}"
            @else

              src="{{ asset('/images/user_image/noimage.png') }}"

            @endif

            class="img-fluid p-4 pl-5 ml-3 user-image mt-1 rounded-circle">
        </div>
     
    </div>

</div>
{{-- Conatiner1 End --}}

{{-- Conatiner2 Start --}}
<div class="container-fluid">
    <div class="row">
        <div class="col home-title">
              <h2 class="mt-5 mb-5 text-center text-muted">All your orders</h2>
        </div>
    </div>
</div>
{{-- Conatiner2 End --}}


@endsection


