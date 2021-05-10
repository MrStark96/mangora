@extends('web.v1.layouts.app')
@section('title', 'My Restaurant')
@section('content')

<!-- Main Section Start -->
<div class="main-section">
	
	@include("web.v1.common.restaurantBanner")

	<div class="page-section account-header buyer-logged-in">
		<div class="container">
			<div class="row">
				
				@include("web.v1.common.restaurantSidebar")

				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="user-dashboard loader-holder">
						<div class="user-holder">
							<form action="restaurant-location.html">
								<ul class="restaurant-settings-nav progressbar-nav">
									<li class="active cond-restaurant-settings processing">
										<a href="restaurant-restaurant.html">Restaurant Settings</a>
									</li>
									<li class="cond-restaurant-settings">
										<a href="restaurant-location.html">Location/Map</a>
									</li>
									<li class="cond-restaurant-settings">
										<a href="restaurant-open-close.html">Restaurant Open/Close</a>
									</li>
								</ul>

								<div class="form-fields-set">
									<ul>
										<li>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="restaurant-info">
														<div class="img-holder">
															<ul class="foodbakery-gallery-holder">
																<li class="gal-img">
																	<div class="drag-list">
																		<div class="item-thumb">
																			<img class="thumbnail" src="assets/extra-images/listing-logo18.png" alt="">
																		</div>
																		<div class="item-assts">
																			<ul class="list-inline pull-right">
																				<li class="close-btn"><a href="#"><i class="icon-cross-out"></i></a></li>
																			</ul>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="text-holder">
															<strong>Restaurant Demo</strong>
															<div class="upload-gallery">
																<input class="foodbakery-dev-gallery-uploader" style="display:none;" type="file">
																<a href="#" class="upload-btn foodbakery-dev-featured-upload-btn">Upload Logo</a>
															</div>
															<span>Update your avatar manually, If the not set the default Gravatar will be the same as your login email/user account. Max Upload Size: 1MB,</span>
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="restaurant-info">
														<div class="img-holder">
															<ul class="foodbakery-gallery-holder">
																<li class="gal-img">
																	<div class="drag-list">
																		<div class="item-thumb">
																			<img class="thumbnail" src="assets/extra-images/cover-photo01.jpg" alt="">
																		</div>
																		<div class="item-assts">
																			<ul class="list-inline pull-right">
																				<li class="close-btn"><a href="#"><i class="icon-cross-out"></i></a></li>
																			</ul>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="text-holder">
															<div class="upload-gallery">
																<input class="foodbakery-dev-gallery-uploader" style="display:none;" type="file">
																<a href="#" class="upload-btn foodbakery-dev-cover-upload-btn">Upload Cover Image</a>
															</div>
															<span>Update your cover image manually, If the not set the default cover image will be showing on your restaurant detail page. Max Upload Size: 1MB,</span>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Restaurant name *</label>
														<input type="text" placeholder="i.e Pizza Hut" class="foodbakery-dev-req-field">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Restaurant phone</label>
														<input type="text" placeholder="i.e +1 321 828 6662">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Manager Name</label>
														<input type="text" placeholder="i.e Alard Willaim">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Manager Contact phone</label>
														<input type="text" placeholder="i.e +1 321 828 6662">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Contact Email</label>
														<input type="text" placeholder="i.e alard@example.com ">
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Information *</label>
														<div class="foodbakery_editor1">
															<textarea></textarea>
															<script>
																jQuery(document).ready(function () {
																	jQuery(".foodbakery_editor1 textarea").jqte();
																});
															</script>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Restaurant Pre-Order</label>
														<select class="chosen-select">
															<option value="no">No</option>
															<option value="yes">Yes</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Table Booking</label>
														<select class="chosen-select">
															<option value="yes">Yes</option>
															<option value="no">No</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Delivery/Pickup</label>
														<select class="chosen-select">
															<option value="delivery">Delivery</option>
															<option value="pickup">Pickup</option>
															<option value="delivery_and_pickup">Delivery &amp; Pickup</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Minimum Delivery Order</label>
														<input type="text" placeholder="i.e 15">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Maximum Delivery Order</label>
														<input type="text" placeholder="i.e 200">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Minimum Pickup Order</label>
														<input type="text" placeholder="i.e 15">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Maximum Pickup Order</label>
														<input type="text" placeholder="i.e 200">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Delivery Fee</label>
														<input type="text" placeholder="i.e 15">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>PickUp Fee</label>
														<input type="text" placeholder="i.e 15">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Disable cash on Delivery?</label>
														<select class="chosen-select">
															<option value="yes">Yes</option>
															<option value="no">No</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Delivery Time</label>
														<input type="text" placeholder="i.e 10">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>PickUp Time</label>
														<input type="text" placeholder="i.e 15">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<div class="field-holder">
														<label>Specials</label>
														<select data-placeholder="Specials Deals" class="multiple chosen-select">
															<option value="">Specials Deals</option>
															<option value="deals">Deals</option>
															<option value="free-delivery">Free Delivery</option>
														</select>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="foodbakery-dev-appended-cats">
														<div class="field-holder">
															<label>Categories *</label>
															<select class="multiple chosen-select">
																<option value="">ALL Categories</option>
																<option value="apple-juice">Apple Juice</option>
																<option value="bb-q">BB.Q</option>
																<option value="beef-roast">Beef Roast</option>
																<option value="carrot-juice">Carrot Juice</option>
																<option value="cheese-burger">Cheese Burger</option>
																<option value="chicken-roast">Chicken Roast</option>
																<option value="chines-soup">Chines Soup</option>
																<option value="cold-coffee">Cold Coffee</option>
																<option value="cold-drink">Cold Drink</option>
																<option value="cupcake">Cupcake</option>
																<option value="doughnut">Doughnut</option>
																<option value="drum-stick">Drum Stick</option>
																<option value="egg-fry">Egg Fry</option>
																<option value="fish-fry">Fish Fry</option>
																<option value="fresh-juice">Fresh Juice</option>
																<option value="hot-dogs">Hot Dogs</option>
																<option value="ice-cream">Ice Cream</option>
																<option value="magi">Magi</option>
																<option value="noodles">Noodles</option>
																<option value="pastry">Pastry</option>
																<option value="pizza">Pizza</option>
																<option value="potato-fries">Potato Fries</option>
																<option value="prawns">Prawns</option>
																<option value="sham-pane">Sham pane</option>
																<option value="shawarma">Shawarma</option>
																<option value="soda-water">Soda water</option>
																<option value="stakes">Stakes</option>
																<option value="steam-roast">Steam Roast</option>
																<option value="tea">Tea</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="element-title">
														<h4>Tags Clouds</h4>
													</div>
													<script>
														jQuery(document).ready(function () {
															jQuery('#foodbakery-tags').tagit({
																allowSpaces: true,
																fieldName: 'foodbakery_tags[]'
															});
														});
													</script>
													<ul id="foodbakery-tags" class="tagit">
														<li class="tagit-choice">
															<span class="tagit-label">applejuice</span>
														</li>
														<li class="tagit-choice">
															<span class="tagit-label">stakes</span>
														</li>
													</ul>
													<span class="most-used">Mostly Used Tags</span>
													<ul class="tag-cloud-container" id="tag-cloud">
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'apple pie');return false;">apple pie</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'applejuice');return false;">applejuice</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'burgger');return false;">burgger</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'coffee');return false;">coffee</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'food');return false;">food</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'Pasta');return false;">Pasta</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'pizza');return false;">pizza</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'stakes');return false;">stakes</li>
														<li class="tag-cloud" onclick="jQuery('#foodbakery-tags').tagit('createTag', 'water');return false;">water</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
									<div>
										<div class="field-holder">
											<div class="payment-holder input-button-loader">
												<input class="update-restaurant" type="submit" value="Update Restaurant" onclick="location.href='restaurant-location.html';">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Main Section End -->

@endsection