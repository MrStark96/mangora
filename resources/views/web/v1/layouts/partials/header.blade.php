   <!-- Header Start -->
   <header id="header">
      <div class="main-header">
         <div class="wide">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="logo">
                     <figure>
                        <a href="index.html" class="light-logo">
                        <img src="assets/extra-images/main-logo.png" alt="FoodBakery">
                        </a>
                     </figure>
                  </div>
                  <div class="main-nav">
                     <nav id="site-navigation" class="main-navigation">
                        <ul>
                           <li><a href="listings.html">Restaurants</a></li>
                        </ul>
                     </nav>
                     <!-- .main-navigation -->
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="login-option">
                     <select class="form-control changeLang" name="language" id="active" style="border: 0;">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>{{ __('web.English') }}</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>{{ __('web.France') }}</option>
                        </select>
                     <a class="cs-color cs-popup-joinus-btn login-popup" data-target="#sign-in" data-toggle="modal" href="#user-register">Login / Register</a><a class="get-start-btn" href="register-restaurant.html">
                     Register
                     Restaurant </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header End -->