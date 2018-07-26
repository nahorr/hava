@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.nav-header')

  @include('layouts.public.includes.header')

    <!-- Icon Blocks -->
    <section class="g-py-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-081 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Register Now</h3>
              <p class="mb-0">Registration is very simple. We only need your name and email address and you are ready to order your first gas and have it delivered for free. click on the "register Now" button below to get started.</p>
              <hr>
              <a href="#!" class="btn btn-md u-btn-inset u-btn-primary g-mr-10 g-mb-15">Register Now</a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-finance-086 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Order Online</h3>
              <p class="mb-0">We know you are very busy. So we have simplified the order process. With just a few clicks. Your oder is complete and your gas on it's way. Be sure to keep your address up to date for faster service.</p>
              <hr>
              <a href="#!" class="btn btn-md u-btn-inset u-btn-primary g-mr-10 g-mb-15">Order Now</a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-057 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Get your Gas</h3>
              <p class="mb-0">We deliver your gas to your home before you know it. Our highly trained proffesional delivery drivers are the best. They will deliver your gas on time, safely, and with a good atitude.</p>
              <hr>
              <a href="#!" class="btn btn-md u-btn-inset u-btn-primary g-mr-10 g-mb-15">Track Your Order</a>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <hr class="g-brd-gray-light-v4 my-0">



    <!-- Call to Action --> 
    <div class="g-pos-rel"> 
      <div class="container text-center g-pt-50 g-pb-50">
       <img class="img-fluid img-thumbnail rounded-circle" src="{{asset('unify/assets/img/digit_gas_mobile.png')}}" alt="Sinach">
        <!-- Heading -->
         <div class="g-max-width-645 mx-auto g-mb-40"> 
          <h2 class="h1 mb-3">ABOUT DIGIT GAS</h2> 
          <p>Digit Gas is an intensely renowned LPG and allied products handling and distribution company set up by a group of technically-inclined professionals that are heartily desirous about filling the yawning gap in the sector and create innovative changes that will positively alter the skyline of domestic gas handling and distribution in Nigeria.</p> 
        </div> 
        <!-- End Heading --> 
        <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="{{url('about')}}">Read More</a> 
      </div> 
      <!-- SVG Background Shape --> 
      <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve"> 
        <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 "></polygon> 
        <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 "></polygon> 
      </svg> <!-- End SVG Background Shape --> </div> <!-- End Call to Action -->

  <hr class="g-brd-gray-light-v4 my-0">

    <!-- Projects -->
    <section class="container g-py-100">
      <div class="text-center g-mb-50">
        <h2 class="h1 g-color-black g-font-weight-600">Products and  Services</h2>
        <p class="lead">Cylinder sales and swap, gas delivery, cooker sales and servicing, cylinder maintenance.</p>
      </div>

      <div class="row no-gutters g-mx-minus-10">
        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-purple--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/digit_gas_sales_swap.png')}}" alt="vocals">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Cylinder Sales and Swap</h3>

            <a class="u-link-v2" href="{{url('mentorship')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/digit_gas_delivery.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Gas delivery</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-teal--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/digit_gas_servicing.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Cooker Sales and Servicing</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-lightred--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/digit_gas_cylinder_maintenance.png')}}" alt="Image Description">
            <!--<span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-tech</span>-->
            <h3 class="h4 g-font-weight-600 mb-0">Cylinder Maintenance</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>
      </div>
    </section>
    <!-- End Projects -->


    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(/unify/assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Get a 50% discount when you place your first order online</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" href="{{url('productsandservices')}}">More Information</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    @include('layouts.public.includes.footer')

@endsection