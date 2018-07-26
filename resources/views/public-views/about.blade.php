@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

 	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(/unify/assets/img/about_us.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <span class="d-block g-font-weight-300 g-font-size-80 mb-3">Digit Gas</span>
        <h3 class="h1 text-uppercase mb-0">Making the whole LPG handling and distribution network feel better, one cylinder at a time</h3>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->
    <section class="container g-pt-100 g-pb-70">
      <div class="row justify-content-center g-mb-60">
        <div class="col-lg-7">
          <!-- Heading -->
          <div class="text-center">
            <h2 class="h3 g-color-black text-uppercase mb-2">ABOUT Digit Gas</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="lead mb-0">Digit Gas is an intensely renowned LPG and allied products handling and distribution company set up by a group of technically-inclined professionals that are heartily desirous about filling the yawning gap in the sector and create innovative changes that will positively alter the skyline of domestic gas handling and distribution in Nigeria.</p>
          </div>
          <!-- End Heading -->
        </div>
      </div>

      <div class="row g-mb-30">
        <div class="col-lg-6 g-mb-30">
          <div class="mb-5">
            <p>AIn the last couple of years we have built brands and set standards which the pool of our clientele as well as our competitors unceasingly attest to. Our top-of-the-range products and services, complimented by our very impressive staff content, are purposefully tailored to meet the best of standards around the world. On the strength of our track records and the testimonials from our clients, we make bold to say that we are the leading LPG handling and distribution company in Nigeria.</p>
            <p>While the network of our services and products cut across the nation, we have physical presence in the cities of Abuja, Lagos, Kano, Kaduna, Port Harcourt, Enugu, Owerri and Warri.</p>
          </div>
          <a class="btn btn-md u-btn-outline-black g-font-size-default rounded-0 g-py-10 mr-2" href="{{url('contact')}}">Contact Us</a>
          <a class="btn btn-md u-btn-primary g-font-size-default rounded-0 g-py-10" href="{{url('register')}}">Register Now</a>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <img class="img-fluid w-100 rounded" src="{{asset('unify/assets/img/digit_gas_about_1.png')}}" alt="Digit Gas Mission">
          </div>
        </div>
      </div>
    </section>
    <!-- About -->
    <section class="g-pt-100 g-pb-100">
      <div class="container">
        <!-- Image, Text Block -->
        <div class="row d-flex align-items-lg-center flex-wrap g-mb-60 g-mb-0--lg">
          <div class="col-md-6 col-lg-8">
            <img class="img-fluid rounded" src="{{asset('unify/assets/img/digit_gas_vision.png')}}" alt="Digit Gas Vision">
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="g-mt-minus-30 g-mt-0--md g-ml-minus-100--lg">
              <div class="g-mb-20">
                <h2 class="g-color-black g-font-weight-600 g-font-size-25 g-font-size-35--lg g-line-height-1_2 mb-4">Our Vision
                  </h2>
                <p class="g-font-size-16">To be the fastest growing, most rewarding, most innovative and most transformative LPG handling and distribution company in Nigeria and sub-Saharan Africa. To be the sought-after quick service LPG handling and distribution company available. To be the best. Being the best means providing outstanding quality and guaranteeing value that will always make the pool of our clientele smile. To be the company people go to when they get frustrated with their delivery agents.</p>
              </div>
              <a class="btn u-btn-primary g-brd-2 g-brd-white g-font-size-13 g-rounded-50 g-pl-20 g-pr-15 g-py-9" href="#!">
                  Contact Us
                  <span class="align-middle u-icon-v3 g-width-16 g-height-16 g-color-black g-bg-white g-font-size-11 rounded-circle ml-3">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
            </div>
          </div>
        </div>
        <!-- End Image, Text Block -->
      </div>

      <div class="container">
        <!-- Image, Text Block -->
        <div class="row d-flex justify-content-between align-items-lg-center flex-wrap g-mt-minus-50--lg">
          <div class="col-md-6 order-md-2">
            <div class="g-brd-around--md g-brd-10 g-brd-white rounded">
              <img class="img-fluid w-100 rounded" src="{{asset('unify/assets/img/digit_gas_mission.png')}}" alt="Digit Gas Mission">
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ml-auto order-md-1">
            <div class="g-mt-minus-30 g-mt-0--md g-ml-minus-100--lg">
              <div class="g-mb-20">
                <h2 class="g-color-black g-font-weight-600 g-font-size-25 g-font-size-35--lg g-line-height-1_2 mb-4">Our Mission
                  </h2>
                <p class="g-font-size-16">Making the whole LPG handling and distribution network feel better, one cylinder at a time.</p>
              </div>
              <a class="btn u-btn-primary g-brd-2 g-brd-white g-font-size-13 g-rounded-50 g-pl-20 g-pr-15 g-py-9" href="#!">
                  Contact Us
                  <span class="align-middle u-icon-v3 g-width-16 g-height-16 g-color-black g-bg-white g-font-size-11 rounded-circle ml-3">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
            </div>
          </div>
        </div>
        <!-- End Image, Text Block -->
      </div>
    </section>
    <!-- End About -->

    <!-- Black Call To Action -->
    <div class="g-mb-50">
      <div id="shortcode32">
        <div class="shortcode-html">
          <div class="g-bg-img-hero" style="background-image: url(/unify/assets/include/svg/svg-bg3.svg);">
            <div class="container g-pt-60 g-pb-30">
              <div class="row justify-content-lg-center align-items-md-center">
                <div class="col-md-9 col-lg-7 g-mb-30">
                  <!-- Media -->
                  <div class="media align-items-center g-pr-15--lg">
                    <div class="d-flex mr-5">
                      <span class="u-icon-v3 u-icon-size--lg g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                        <i class="material-icons">toys</i>
                      </span>
                    </div>

                    <div class="media-body">
                      <h3 class="h2">DigitGas Mobile.</h3>
                      <p>Never run out of gas again. Get your gas when you need it and when it matters. Simply download DigitGas app from the app store.</p>
                    </div>
                  </div>
                  <!-- End Media -->
                </div>

                <div class="col-5 col-md-3 col-lg-2 mx-auto g-mx-0--lg g-mb-30">
                  <button class="btn btn-block u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-25 g-py-13" type="button">Register Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End Black Call To Action -->

    <section class="container g-py-100">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <!-- Heading -->
          <div class="text-center g-mb-60">
            <h2 class="h3 g-color-black text-uppercase mb-2">Video intro</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="mb-0">We get your gas to you where every you are, when you need it, and on time. This is our promise. Watch the video below for more information.</p>
          </div>
          <!-- End Heading -->
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <!-- Article -->
          <article class="u-shadow-v21 g-bg-size-cover g-bg-pos-bottom-center text-center" style="background-image: url(/unify/assets/img/what-we-do/digitgas_intro_video_image.jpg);">
            <div class="g-pos-rel g-z-index-1 g-px-50 g-py-200">
              <a class="js-fancybox d-block" href="javascript:;" data-src="//www.youtube.com/embed/Bzn9dMX7ISs?autoplay=1" data-speed="350" data-caption="Single Image">
                <span class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-font-size-18 g-rounded-50x g-cursor-pointer">
                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                  </span>
              </a>
            </div>
          </article>
          <!-- End Article -->
        </div>
      </div>
    </section>


    <!-- Team Blocks -->
    <section class="container g-pt-100 g-pb-70">
      <div class="row justify-content-center g-mb-60">
        <div class="col-lg-7">
          <!-- Heading -->
          <div class="text-center">
            <h2 class="h3 g-color-black text-uppercase mb-2">Meet your creative team</h2>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
            <p class="mb-0">Digit Gas is run by a group of technically-inclined professionals that are heartily desirous about filling the yawning gap in the sector and create innovative changes that will positively alter the skyline of domestic gas handling and distribution in Nigeria.</p>
          </div>
          <!-- End Heading -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img1.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Photographer</em>
            <h4 class="h5 g-color-black g-mb-5">Katalina Watson</h4>
            <p class="g-font-size-13">head photographer</p>
            <!-- End Figure Info-->
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img2.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Designer</em>
            <h4 class="h5 g-color-black g-mb-5">Tina Krueger</h4>
            <p class="g-font-size-12">art director</p>
            <!-- End Figure Info-->
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img3.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Co-Founder</em>
            <h4 class="h5 g-color-black g-mb-5">David Olsson</h4>
            <p class="g-font-size-12">creative director</p>
            <!-- End Figure Info-->
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 g-mb-30">
          <div class="text-center u-block-hover">
            <!-- Figure -->
            <figure class="u-block-hover g-mb-25">
              <!-- Figure Image -->
              <img class="w-100" src="{{asset('unify/assets/img-temp/400x550/img4.jpg')}}" alt="Image Description">
              <!-- End Figure Image -->

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-primary-opacity-0_9 g-flex-middle g-px-10">
                <q class="u-quote-v1 g-flex-middle-item g-color-white g-font-weight-700 g-font-size-16 text-uppercase">changing your mind and changing world</q>

                <!-- Figure Social Icons -->
                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item g-mx-3">
                    <a class="u-icon-v3 u-icon-size--xs g-bg-white g-color-primary g-color-primary--hover g-bg-black--hover" href="#!">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Figure Social Icons -->
              </figcaption>
              <!-- End Figure Caption -->
            </figure>
            <!-- End Figure -->

            <!-- Figure Info -->
            <em class="d-block g-font-style-normal g-font-size-11 text-uppercase g-color-primary g-mb-5">Co-Founder</em>
            <h4 class="h5 g-color-black g-mb-5">Sara Lisbon</h4>
            <p class="g-font-size-12">marketing director</p>
            <!-- End Figure Info-->
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Blocks -->

	@include('layouts.public.includes.footer')

@endsection