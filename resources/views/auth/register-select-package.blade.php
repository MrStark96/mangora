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
                        <li class="active"><a href="register-restaurant.html" class="cond-restaurant-settings1">Information</a></li>
                        <li class="active processing"><a href="register-select-package.html" class="cond-restaurant-settings1">Select Package</a></li>
                        <li><a href="register-payment-info.html" class="cond-restaurant-settings1">Payment Information</a></li>
                        <li><a href="register-activation.html" class="cond-restaurant-settings1">Activation</a></li>
                     </ul>
                     <div id="restaurant-sets-holder">
                        <form class="form-fields-set" method="post" action="{{route('post-register-select-package')}}">
                           {{ csrf_field() }}
                           <ul class="register-add-restaurant-tab-container package-tab-container" style="display: block;">
                              <li>
                                 <ul class="membership-info-main">
                                    <li style="display: block;">
                                       <div class="row">
                                          <div class="packages-main-holder">
                                             <div style="display:block;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title">
                                                   <h4>Buy Membership</h4>
                                                </div>
                                             </div>
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div style="display:block;" class="dir-new-packages">
                                                   <div class="all-pckgs-sec">
                                                      <div class="foodbakery-pkg-holder">
                                                         <div class="foodbakery-pkg-header">
                                                            <div class="pkg-title-price pull-left">
                                                               <div class="radio-holder">
                                                                  <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="package_id" id="flexRadioDefault1" value="1">
                                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                                        Basic Free
                                                                      </label>
                                                                    </div>
                                                               </div>
                                                               <span class="pkg-price">Price:
                                                               £0.00</span>
                                                            </div>
                                                            <div class="pkg-detail-btn pull-right">
                                                               <a href="#package_detail_623" data-toggle="collapse" class="foodbakery-dev-detail-pkg" data-id="623">Detail</a>
                                                            </div>
                                                         </div>
                                                         <div id="package_detail_623" class="collapse in">
                                                            <div class="package-info-sec restaurant-info-sec">
                                                               <div class="row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <ul class="restaurant-pkg-points">
                                                                        <li><label>Membership
                                                                           Duration</label><span>15
                                                                           Days</span>
                                                                        </li>
                                                                        <li><label>Restaurant
                                                                           Duration</label><span>15
                                                                           Days</span>
                                                                        </li>
                                                                        <li><label>Number of
                                                                           Tags</label><span>6
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Reviews</label><span>off
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Phone
                                                                           Number</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Website
                                                                           Link</label><span>off
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Social
                                                                           Impressions
                                                                           Reach</label><span>off
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Respond
                                                                           to
                                                                           Reviews</label><span>off
                                                                           </span>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="pgk-action-btns">
                                                                        <a href="#" class="pkg-choose-btn">Choose
                                                                        Membership</a>
                                                                        <a href="#" class="pkg-cancel-btn">Cancel</a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="foodbakery-pkg-holder">
                                                         <div class="foodbakery-pkg-header">
                                                            <div class="pkg-title-price pull-left">
                                                               <div class="radio-holder">
                                                                  <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="package_id" id="flexRadioDefault1" value="2">
                                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                                        Premium
                                                                      </label>
                                                                    </div>
                                                               </div>
                                                               <span class="pkg-price">Price:
                                                               £90.00</span>
                                                            </div>
                                                            <div class="pkg-detail-btn pull-right">
                                                               <a href="#package_detail_624" data-toggle="collapse" class="foodbakery-dev-detail-pkg">Detail</a>
                                                            </div>
                                                         </div>
                                                         <div id="package_detail_624" class="collapse">
                                                            <div class="package-info-sec restaurant-info-sec">
                                                               <div class="row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <ul class="restaurant-pkg-points">
                                                                        <li><label>Membership
                                                                           Duration</label><span>30
                                                                           Days</span>
                                                                        </li>
                                                                        <li><label>Restaurant
                                                                           Duration</label><span>90
                                                                           Days</span>
                                                                        </li>
                                                                        <li><label>Number of
                                                                           Tags</label><span>6
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Reviews</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Phone
                                                                           Number</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Website
                                                                           Link</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Social
                                                                           Impressions
                                                                           Reach</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Respond
                                                                           to
                                                                           Reviews</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="pgk-action-btns">
                                                                        <a href="#ex16b313324CurrentSliderValLabel" data-id="622" class="pkg-choose-btn">Choose
                                                                        Membership</a>
                                                                        <a href="#" data-id="622" class="pkg-cancel-btn">Cancel</a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="foodbakery-pkg-holder">
                                                         <div class="foodbakery-pkg-header">
                                                            <div class="pkg-title-price pull-left">
                                                               <div class="radio-holder">
                                                                  <div class="form-check">
                                                                      <input class="form-check-input" type="radio" name="package_id" id="flexRadioDefault1" value="3">
                                                                      <label class="form-check-label" for="flexRadioDefault1">
                                                                        Standard
                                                                      </label>
                                                                    </div>
                                                               </div>
                                                               <span class="pkg-price">Price:
                                                               £20.00</span>
                                                            </div>
                                                            <div class="pkg-detail-btn pull-right">
                                                               <a href="#package_detail_625" data-toggle="collapse" class="foodbakery-dev-detail-pkg" data-id="2595">Detail</a>
                                                            </div>
                                                         </div>
                                                         <div id="package_detail_625" class="collapse">
                                                            <div class="package-info-sec restaurant-info-sec">
                                                               <div class="row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <ul class="restaurant-pkg-points">
                                                                        <li><label>Membership
                                                                           Duration</label><span>30
                                                                           Days</span>
                                                                        </li>
                                                                        <li><label>Restaurant
                                                                           Duration</label><span>30
                                                                           Days</span>
                                                                        </li>
                                                                        <li><label>Featured
                                                                           Restaurants</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Top
                                                                           Categories
                                                                           Restaurants</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Number of
                                                                           Tags</label><span>6
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Reviews</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Phone
                                                                           Number</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                        <li><label>Website
                                                                           Link</label><span>off
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Social
                                                                           Impressions
                                                                           Reach</label><span>off
                                                                           </span>
                                                                        </li>
                                                                        <li><label>Respond
                                                                           to
                                                                           Reviews</label><span><i class="icon-check"></i></span>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="package-featured pakg-switch">
                                                                        <span>Featured
                                                                        :</span>
                                                                        <input id="package-featured-2595" type="checkbox" class="cmn-toggle cmn-toggle-round" name="foodbakery_restaurant_featured">
                                                                        <label for="package-featured-2595"></label>
                                                                     </div>
                                                                     <div class="package-top-cat pakg-switch">
                                                                        <span>Top Category
                                                                        :</span>
                                                                        <input id="package-top-cat-2595" type="checkbox" class="cmn-toggle cmn-toggle-round" name="foodbakery_restaurant_top_cat">
                                                                        <label for="package-top-cat-2595"></label>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="pgk-action-btns">
                                                                        <a href="#" data-id="2595" class="pkg-choose-btn">Choose
                                                                        Membership</a>
                                                                        <a href="#" data-id="2595" class="pkg-cancel-btn">Cancel</a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <div class="field-holder">
                                          <div class="payment-holder">
                                             <input type="submit" value="Back" id="btn-back-package" class="back-bg-color">
                                             <input type="submit" value="Next" id="btn-next-package" class="bgcolor">
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
$(document).on("click",".radio-holder",function(e){
    console.log();
    $('.package_id').removeAttr('checked');
    $(this).find('.package_id').attr('checked','checked');
});

$(document).on("click","#btn-back-package",function(e){
    e.preventDefault();
    window.history.back();
});
$(document).on("click","#btn-next-package",function(e){
    e.preventDefault();
    var count_checked = $(".form-check-input:checked").length; // count the checked rows
    console.log(count_checked);
    if(count_checked == 0) 
    {
        alert('Select One Package');
    }else{
        $('.form-fields-set')[0].submit();
    }
});
</script>
@endpush