@extends('web.v1.layouts.app')
@section('title', 'Home')
@section('content')
   <!-- Main Section Start -->
   <div class="main-section">
      <!-- Home Pages Elements Strat -->
      <!-- Main Search Start -->
      <div class="page-section nopadding cs-nomargin" style="padding-top: 200px; padding-bottom: 150px; margin-bottom: 0px; background: url(assets/extra-images/bg-image1.jpg) no-repeat center / cover;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="element-title">
                     <h1 style="font-size: 40px; color: #505050; text-transform: uppercase; line-height: 50px; margin-bottom: 25px; text-align:center;">

                     	{{ __('web.Shorten') }}
                        We are in the business of food<br>our restaurants do
                     </h1>
                     <p style="font-size: 18px; letter-spacing: 1px; color: #505050; text-align:center;">
                        Ridiculus sociosqu
                        cursus neque cursus curae ante scelerisque vehicula.
                     </p>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                  <div class="main-search fancy bg-holder">
                     <form>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                              <div class="field-holder">
                                 <input type="text" placeholder="Resturant name">
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                              <div class="field-holder">
                                 <ul>
                                    <li class="select-location">
                                       <div class="foodbakery-locations-fields-group foodbakery-focus-out">
                                          <span class="foodbakery-search-location-icon"><i class="icon-location"></i></span>
                                          <span id="foodbakery_radius_location_open333" class="foodbakery-radius-location"><i class="icon-target5"></i></span>
                                          <input type="text" class="location-field-text filter" placeholder="All Locations">
                                       </div>
                                       <div class="select-location" id="foodbakery-radius-range333" style="display: none;">
                                          <div class="select-popup popup-open">
                                             <a id="location_close_popup333" href="javascript:0;" class="location-close-popup">
                                             <i class="icon-times"></i></a>
                                             <input type="hidden" class="foodbakery-radius" name="foodbakery_radius" value="10">
                                             <p>Show with in</p>
                                             <input id="ex16b333" type="text" data-value="10" value="10" style="display: none;">
                                             <script>
                                                jQuery(document).ready(function () {
                                                	var elem = jQuery("#ex16b333");
                                                	if (elem.length != "") {
                                                		elem.slider({
                                                			step: 1,
                                                			min: 0,
                                                			max: 500,
                                                			value: 10,
                                                		});
                                                		elem.on("slideStop", function () {
                                                			var rang_slider_val = elem.val();
                                                			jQuery("#ex16b333CurrentSliderValLabel").html(rang_slider_val);
                                                			jQuery("#range-hidden-foodbakery-radius333").val(rang_slider_val);
                                                			//foodbakery_restaurant_content("333");
                                                		});
                                                		elem.on("slide", function () {
                                                			jQuery("#ex16b333CurrentSliderValLabel").html(elem.val());
                                                		});
                                                	}
                                                
                                                	$("#foodbakery_radius_location_open333").click(function () {
                                                		$("#foodbakery-radius-range333").show();
                                                	});
                                                	$("#location_close_popup333").click(function () {
                                                		$("#foodbakery-radius-range333").hide();
                                                	});
                                                });
                                             </script>
                                             <span>Miles: <span id="ex16b333CurrentSliderValLabel">10</span></span><br>
                                             <p class="my-location">of <i class="cs-color icon-location-arrow"></i><a id="foodbakery-geo-location-all" class="cs-color foodbakery-geo-location313324" href="javascript:void(0)">My location</a></p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              <div class="field-holder">
                                 <input type="submit" value="Search">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="counter-sec">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-4 ">
                           <div class="counter-holder counter-one">
                              <div class="text-holder">
                                 <i class="icon- icon-check-circle"></i>
                                 <strong class="count">16</strong>
                                 <span>Restaurant</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-4 ">
                           <div class="counter-holder counter-two">
                              <div class="text-holder">
                                 <i class="icon- icon-check-circle"></i>
                                 <strong class="count">151</strong>
                                 <span>People Served</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-4 ">
                           <div class="counter-holder counter-three">
                              <div class="text-holder">
                                 <i class="icon- icon-check-circle"></i>
                                 <strong class="count">40</strong>
                                 <span>Registered Users</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Main Search End -->
      <div id="mangora_step_sec" class="page-section  cs-page-sec-443872  nopadding cs-nomargin">
         <!-- Container Start -->
         <div class="container ">
            <div class="row">
               <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px;margin-bottom: 50px">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="element-title">
                           <h3 style="color:#000000 !important; font-size: 35px !important; letter-spacing: 0px !important; line-height: 28px !important; text-align:Center; font-style:normal;">So einfach geht es!</h3>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:50px">
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 50px">
                        <div class="main-post">
                           <div class="media-holder center">
                              <figure><img alt="Gib deinen Standort an" src="https://mangora.it/wp-content/uploads/2020/07/trackme.png"></figure>
                           </div>
                           <br>
                           <div class="text-center">
                              <h4>Gib deinen Standort an</h4>
                              Gib deine Adresse ein oder lasse uns deine Position bestimmen.      
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 50px">
                        <div class="main-post">
                           <div class="media-holder center">
                              <figure><img alt="Restaurant und Speisen auf mangora.it auswählen" src="https://mangora.it/wp-content/uploads/2020/07/choose-restaurant.png"></figure>
                           </div>
                           <br>
                           <div class="text-center">
                              <h4>Restaurant und Speisen auf mangora.it auswählen</h4>
                              Was trifft deinen Geschmack? Klicke dich durch zahlreiche Menüs und Bewertungen.      
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 50px">
                        <div class="main-post">
                           <div class="media-holder center">
                              <figure><img alt="In einigen Restaurants kannst du deinen Tisch online reservieren!" src="https://mangora.it/wp-content/uploads/2020/07/choose-table.png"></figure>
                           </div>
                           <br>
                           <div class="text-center">
                              <h4>In einigen Restaurants kannst du deinen Tisch online reservieren!</h4>
                              Du brauchst einen Tisch? In einigen Restaurants kannst du deinen Tische kostenlos online reservieren.   
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 50px">
                        <div class="main-post">
                           <div class="media-holder center">
                              <figure><img alt="Bezahlen und liefern lassen oder abholen" src="https://mangora.it/wp-content/uploads/2020/07/shipped.png"></figure>
                           </div>
                           <br>
                           <div class="text-center">
                              <h4>Bezahlen und liefern lassen oder abholen</h4>
                              Bezahle bar oder online mit Kreditkarte, PayPal. Guten Appetit!     
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end section row -->
               </div>
            </div>
         </div>
         <!-- End Container Start -->
      </div>
      <!-- Client logo Section End -->
      <!-- Home Pages Elements End  -->
   </div>
   <!-- Main Section End -->
	
@endsection