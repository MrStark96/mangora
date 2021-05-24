<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="user-account-nav user-account-sidebar">
		<div class="user-nav-list">
			<ul>
				@php
		        	$current_route = Route::current()->getName();
		        @endphp
				<li class="{{ $current_route == "restaurant-dashboard" ? "active" : "" }}"><a href="{{route('restaurant-dashboard')}}"><i class="icon-dashboard3"></i>Dashboard</a></li>
				<li class="{{ $current_route == "my-restaurant" ? "active" : "" }}"><a href="{{route('my-restaurant')}}"><i class="icon-building"></i>My Restaurant</a></li>
				<li class="{{ $current_route == "restaurant-menu-builder" ? "active" : "" }}"><a href="{{route('restaurant-menu-builder')}}"><i class="icon-menu5"></i>Menu Builder</a></li>
				<li><a href=""><i class="icon-add_shopping_cart"></i>Orders</a></li>
				<li><a href=""><i class="icon-file-text2 "></i>Bookings</a></li>
				<li><a href=""><i class="icon-card_membership"></i>Memberships</a></li>
				<li><a href=""><i class="icon-unlock-alt"></i>Change Password</a></li>
				<li><a id="profile_delete" href=""><i class="icon-delete"></i>Delete Profile</a></li>
				<li><a class="logout-btn" href="{{ route('logout') }}"><i class="icon-log-out"></i>Signout</a></li>
			</ul>
		</div>
	</div>
</div>