@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

 	    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(/unify/assets/img/safetytips.jpg);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-py-150">
        <span class="d-block g-font-weight-300 g-font-size-25 mb-3">SAFETY AND SECURITY TIPS</span>
        <h3 class="h1 text-uppercase mb-0"> Your Safet is a priority to us</h3>
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
              <h2 class="h3 g-color-black text-uppercase mb-2">SAFETY AND SECURITY TIPS </h2>
              <div class="d-inline-block g-width-35 g-height-2 g-bg-primary mb-2"></div>
              <p class="lead mb-0">We value our customers safety and security. Please review the security and safety tips below.</p><hr>
              <div class="col-md-6 offset-md-3">
                <img class="img-fluid rounded" src="{{asset('unify/assets/img/digit_gas_safety.png')}}" alt="Digit Gas Vision">
              </div>
            </div>
            <!-- End Heading -->
          </div>
        </div>

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Install an audible smoke detector.</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">A fact to be aware of is that having a filled gas cylinder at home invites risk. Most domestic fire outbreaks caused by other factors around the home are not usually detected earlier when there is no detector...
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal18" data-modal-target="#modal18" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal18" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Install an audible smoke detector</h4> 
                      <p>...Having a detector at home gives early warning signal to potential hazards that would only be magnified with the presence of a gas cylinder.</p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Know your distributors</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Granted, it’s not always possible to know every detail of the gas cylinder you purchase. Ensure to buy both the gas cylinder and gas from an authorised dealer or distributor. Also, check for cylinder validity based on manufacturing...
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal19" data-modal-target="#modal19" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal19" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Know your distributors</h4> 
                      <p>...The gas cylinder must be in good condition and not worn out at time of purchase.<br>When refilling the gas, do so with the same authorised gas distributor you formerly bought from. What people are not normally aware of is that gases may not always be from the same origin when buying from a different dealer.</p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Ensure proper storage of the gas cylinder</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Gas cylinders can be installed either outside or inside the home. When stored outside, keep it away from the sun and in a cool area. Take into consideration if the climate where you live is favourable....
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal20" data-modal-target="#modal20" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal20" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Ensure proper storage of the gas cylinder</h4> 
                      <p>...If you live in area where heavy storms and lightning are frequent, it is advisable that you get the gas cylinder concealed but with proper ventilation to avoid collecting gas during leakage. Storing it indoor requires that you keep the room well ventilated and away from heating source. Avoid placing it close to potential sources of ignition such as: electrical sockets, flammable substance, or even in areas where you receive transmissions from phone calls, TV, internet browsing and so forth. Additionally, you should make sure that the cylinder is stood on a solid and levelled surface where it is less likely to fall.  A compressed gas cylinder which falls to the ground may have its valve damaged and thereby cause rapid release of high pressured gas to the surrounding. This is potentially harmful to the extent of causing damage to property and lives. </p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Safely transport your cylinder</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Never roll a used gas cylinder on the ground regardless of it being empty or not; neither drop it on the ground with force. Transport it while sitting the cylinder upright and with the valve facing upwards
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal21" data-modal-target="#modal21" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal21" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Safely transport your cylinder</h4> 
                      <p></p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Perform the 5-point safety check at regular intervals</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Always get a qualified gas delivery man or distributor to help you perform the 5-point safety check. This is equally necessary when moving to a new home. The 5-point safety check usually requires the following:
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal22" data-modal-target="#modal22" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal22" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Perform the 5-point safety check at regular intervals</h4> 
                      <p>
                        <li> Checking the regulator to ensure that it is not faulty or worn out. They must not be used for over 5 years. Check the expiry dates.</li>
                        <li> Checking the rubber hose that is neither worn out nor expired.</li> 
                        <li> Checking the hose clips to ensure that it is firmly secured and in good condition.</li>
                        <li> Checking the gas cylinder to ensure that it is free from cracks, dents or rust.</li> 
                        <li> Checking for gas leaks through the use of liquid soap solution applied on cylinder joints. The presence of bubbles from the soap indicates a gas leakage. Never use a lighter to test for gas leakage.</li>
                    </p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Act wisely when you suspect a leak</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Do not ignore gas leakages. Always act wisely by remaining calm; neither switching ‘on’ nor switching ‘off’ any electrical appliances at that time. Ensure to turn off the regulator and open windows and doors...
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal23" data-modal-target="#modal23" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal23" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Act wisely when you suspect a leak</h4> 
                      <p>...to disperse the concentrated gas. Possibly leakages may still occur, in that case; carefully have the gas cylinder put out to an open, ventilated area outside.</p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
        <div class="row">
          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Cook safely</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">While cooking with gas, ensure that your kitchen is properly ventilated by having the windows opened.  Avoid placing plastics, pan handles or flammable items close to the flame. Never cook out of sight as the flames could build up;
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal24" data-modal-target="#modal24" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal24" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Cook safely</h4> 
                      <p>...food could overflow and extinguish the burner. Ensure to keep the regulator switched off when the gas cooker is not in use. This is most especially necessary at night or while away on holidays.
                    </p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-6 g-mb-30">
            <!-- Icon Blocks -->
            <div class="u-shadow-v19 g-bg-white rounded g-pa-30">
              <div class="media g-mb-15">
                <div class="d-flex mr-4">
                  <span class="g-color-gray-dark-v4 g-font-size-26">
                    <i class="icon-electronics-017 u-line-icon-pro"></i>
                  </span>
                </div>
                <div class="media-body">
                  <h3 class="h5 g-color-black mb-20">Heighten gas safety awareness with your household, roommate and neighbour.</h3>
                  <div class="g-width-30 g-brd-bottom g-brd-gray-dark-v5 g-my-15"></div>
                  <p class="g-color-gray-dark-v4 g-mb-0">Gas safety can only be successful on a collective effort. Ensure that your household or roommates are aware of the safety guidelines...
                    <br> <br>
                    <a class="btn u-btn-primary" href="#modal25" data-modal-target="#modal25" data-modal-effect="door"> Read More </a> 
                    <!-- Demo modal window --> 
                    <div id="modal25" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;"> 
                      <button type="button" class="close" onclick="Custombox.modal.close();"> <i class="hs-icon hs-icon-close"></i> </button> 
                      <h4 class="g-mb-20">Heighten gas safety awareness with your household, roommate and neighbour.</h4> 
                      <p>...guidelines in the use of gas cookers. Paste a copy of these reminders at visible area at your home and in the kitchen. Make it a matter of discussion at family meetings and general meetings with your co-tenants.</p> 
                       
                    </div> 
                    <!-- End Demo modal window --> 
                  </p>
                </div>
              </div>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
        <!-- End Icon Blocks -->



      </div>
    </section>
    <!-- End Icon Blocks -->

	@include('layouts.public.includes.footer')

@endsection