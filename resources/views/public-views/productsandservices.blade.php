@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

 	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(/unify/assets/img/productsandservices.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <span class="d-block g-font-weight-500 g-font-size-50 mb-3">Digit Gas</span>
        <h3 class="h1 text-uppercase mb-0"></h3>
      </div>
      <!-- Promo Block Content -->
    </section>

    <!-- Icon Blocks -->
    <section class="g-bg-secondary">
      <div class="container g-py-100">
        <div class="row justify-content-center g-mb-60">
          <div class="col-lg-7">
            <!-- Heading -->
            <div class="text-center">
              <h2 class="h3 g-color-black text-uppercase mb-2">PRODUCTS AND SERVICES</h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="lead mb-0">Cylinder sales and swap, gas delivery, cooker sales and servicing, cylinder maintenance.</p><hr>
              <p>
                <a href="{{url('register')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">LOGIN TO ORDER</a>
                <span class="align-middle g-color-primary mx-1">or</span>
                <a href="https://courses.gosgem.com/" target="_blank" class="btn btn-md u-btn-inset u-btn-deeporange g-mr-10 g-mb-15">CONTACT US</a>
              </p>
            </div>
            <!-- End Heading -->
          </div>
        </div>



        <!-- Heading -->
        <div class="text-center">
          <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">Cylinder sales and swap, gas delivery, cooker sales and servicing, cylinder maintenance.</p><hr>
          <p>
            <a href="{{url('register')}}" class="btn btn-md u-btn-inset u-btn-yellow g-mr-10 g-mb-15">LOGIN TO ORDER</a>
            <span class="align-middle g-color-primary mx-1">or</span>
            <a href="https://courses.gosgem.com/" target="_blank" class="btn btn-md u-btn-inset u-btn-deeporange g-mr-10 g-mb-15">CONTACT US</a>
          </p>
        </div>
        <!-- End Heading -->
      </div>
    </section>
    <!-- End Icon Blocks -->

	@include('layouts.public.includes.footer')

@endsection