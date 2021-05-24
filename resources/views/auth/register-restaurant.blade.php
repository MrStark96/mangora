@extends('web.v1.layouts.app')

@section('content')
<!-- Main Section Start -->
<div class="main-section">
   <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 60px;padding-bottom: 60px;margin-bottom: 0px;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
               <div class="user-dashboard loader-holder">
                  <div class="user-holder">
                     <ul class="restaurant-settings-nav progressbar-nav">
                        <li class="active processing"><a href="" class="cond-restaurant-settings1">Information</a></li>
                        <li><a href="#" class="cond-restaurant-settings1">Select Package</a></li>
                        <li><a href="#" class="cond-restaurant-settings1">Payment Information</a></li>
                        <li><a href="#" class="cond-restaurant-settings1">Activation</a></li>
                     </ul>
                     <div id="restaurant-sets-holder">
                        <form class="form-fields-set" method="post" action="{{route('post-register-restaurant')}}">
                            {{ csrf_field() }}
                           <ul class="register-add-restaurant-tab-container restaurant-information-tab-container">
                              <li>
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <div class="row">
                                          <ul class="has-seperator">
                                             <li>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Restaurant name</label><input type="text" placeholder="i.e Pizza Hut" class="foodbakery-dev-req-field" id="restaurant_name" name="restaurant_name">
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Restaurant phone</label><input type="text" placeholder="i.e +1 321 828 6662" id="restaurant_phone" name="restaurant_phone">
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Manager Name</label><input type="text" placeholder="i.e Alard Willaim" id="manager_name" name="manager_name">
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Manager Contact
                                                      phone</label><input type="text" placeholder="i.e +1 321 828 6662" id="manager_contact_phone" name="manager_contact_phone">
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Contact Email</label><input type="text" placeholder="i.e alard@example.com " id="contact_email" name="contact_email">
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <div class="element-title">
                                                      <h4>Location</h4>
                                                   </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <div class="opt-conts">
                                                      <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="field-holder">
                                                               <label>Country</label>
                                                               <div class="select-holder">
                                                                  <span class="loader-country-restaurant"></span>
                                                                  <select data-placeholder="Select Country" class="form-control" id="country" name="country">
                                                                     <option value="">
                                                                        Select
                                                                        Country
                                                                     </option>
                                                                     @foreach($countries as $country)
                                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                                     @endforeach
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="field-holder">
                                                               <label>State</label>
                                                               <div class="select-holder">
                                                                  <span class="loader-state-restaurant"></span>
                                                                  <select data-placeholder="Select State" class="form-control" id="state" name="state">
                                                                     <option value="">
                                                                        Select State
                                                                     </option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="field-holder">
                                                               <label>City</label>
                                                               <div class="select-holder">
                                                                  <span class="loader-city-restaurant"></span>
                                                                  <select data-placeholder="Select City" class="form-control" id="city" name="city">
                                                                     <option value="">
                                                                        Select
                                                                        City
                                                                     </option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="field-holder">
                                                               <label>Latitude</label>
                                                               <input type="text" placeholder="Latitude" class="form-control gllpLatitude" id="latitude" name="latitude" value="51.5073509">
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="field-holder">
                                                               <label>Longitude</label>
                                                               <input type="text" placeholder="Longitude" class="form-control gllpLongitude" id="longitude" name="longitude" value="-0.12775829999998223">
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <input type="hidden" id="foodbakery__loc_bounds_rest" name="" value=""><input type="hidden" id="foodbakery_add_new_loc" class="gllpSearchField" style="margin-bottom:10px;" name="" value=""><input type="hidden" id="foodbakery_post_loc_zoom" class="gllpZoom" name="" value="9">
                                                            <div class="field-holder">
                                                               <label>Find On Map</label>
                                                               <input type="text" onkeypress="foodbakery_gl_search_map(this.value)" placeholder="Type Your Address" class="foodbakery-search-location" id="address" name="address" autocomplete="off">
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="field-holder"></div>
                                                            <div class="field-holder search-location-map input-button-loader">
                                                               <input type="button" class="acc-submit cs-section-update cs-color csborder-color gllpSearchButton" id="foodbakery_map_search_btn" name="foodbakery_map_search_btn" value="Search Location">
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <!-- map start -->
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="cs-map-section" style="float:left; width:100%; height:284px;">
                                                               <div class="gllpMap" id="cs-map-location-fe-id">
                                                                  <img style="width:100%;height: 100%;" src="assets/extra-images/map-location.png" alt="">
                                                               </div>
                                                            </div>
                                                            <!--<p> For the precise location, you can drag and drop the pin.-->
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Delivery/Pickup</label>
                                                      <select class="chosen-select" id="deliver_type" name="deliver_type">
                                                         <option value="0">Delivery</option>
                                                         <option value="1">Pickup</option>
                                                         <option value="2">Delivery &amp; Pickup</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <div class="foodbakery-dev-appended-cats12">
                                                      <div class="field-holder">
                                                         <label>Cuisines</label>
                                                         <select data-placeholder="Choose some Cuisines" class="multiple form-control chosen-select" multiple="" id="cuisines_id" name="cuisines_id[]">
                                                            <!-- <option value="">Select Cuisines</option> -->
                                                            @foreach($cuisines as $cuisine)
                                                                <option value="{{$cuisine->id}}">{{$cuisine->name}}</option>
                                                            @endforeach
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <div class="element-title">
                                                      <h4>Signup Fields</h4>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Username</label>
                                                      <input type="text" placeholder="i.e alardwillaim" name="username" class="form-control">
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                   <div class="field-holder">
                                                      <label>Email</label>
                                                      <input type="text" placeholder="i.e alard@example.com" name="email" class="form-control">
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <div class="field-holder">
                                          <div class="payment-holder">
                                             <div class="checkbox-area">
                                                <label for="terms">
                                                <input type="checkbox" id="terms" name="terms" class="foodbakery-dev-req-field">
                                                By Registering You Confirm That You Accept The
                                                <a target="_blank" href="">Terms &amp; conditions </a>
                                                And <a target="_blank" href="">Privacy Policy </a>
                                                </label>
                                             </div>
                                             <input type="submit" value="Next" id="btn-next-restaurant-information" class="bgcolor">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Main Section End -->
@endsection

@push('script')
<script type="text/javascript">
$(document).on("change","#country",function(e){
    var id = $('#country option:selected').val();
    $.ajax({
        url: '{{ route('GetStateByCountry') }}',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {id:id},
        success: function(e){
            if(e !=  '') {
                $('#state').html(e);
                // e.status == true && e.message == "success"
                
            } else {
                // SimpleToast.fire({
                //   type:'error',
                //   title:e.message
                // });
            }
        },beforeSend(b) {
            // parent.children("label").children("center").children(".upload-viewer-loading").show();
        },complete(xhr,status) {
            // parent.children("label").children("center").children(".upload-viewer-loading").hide();
        }
    });
});

$(document).on("change","#state",function(e){
    var id = $('#state option:selected').val();
    $.ajax({
        url: '{{ route('GetCityByState') }}',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {id:id},
        success: function(e){
            if(e !=  '') {
                $('#city').html(e);
                // e.status == true && e.message == "success"
                
            } else {
                // SimpleToast.fire({
                //   type:'error',
                //   title:e.message
                // });
            }
        },beforeSend(b) {
            // parent.children("label").children("center").children(".upload-viewer-loading").show();
        },complete(xhr,status) {
            // parent.children("label").children("center").children(".upload-viewer-loading").hide();
        }
    });
});

$("form.form-fields-set").submit(function(e) {
    e.preventDefault();
    $( ".form-fields-set" ).validate({
        rules: {
            restaurant_name: {
                required: true
            },
            restaurant_phone: {
                required: true
            },
            manager_name: {
                required: true
            },
            manager_contact_phone: {
                required: true
            },
            contact_email: {
                required: true,
                email:true
            },
            country: {
                required: true
            },
            state: {
                required: true
            },
            city: {
                required: true
            },
            latitude: {
                required: true
            },
            longitude: {
                required: true
            },
            address: {
                required: true
            },
            deliver_type: {
                required: true
            },
            cuisines_id: {
                required: true
            },
            username: {
                required: true
            },
            email: {
                required: true,
                email:true
            },
            terms: {
                required: $('#terms').is(':checked'),
            }
        }
    }); 
    if($(".form-fields-set").valid()){
        console.log('Submit');
        $('.form-fields-set')[0].submit();
    };
});
</script>
@endpush