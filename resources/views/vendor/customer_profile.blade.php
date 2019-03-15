
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HotShot - Self Promotion HTML Template" />
	<meta name="description" content="HotShot - Self Promotion HTML Template" /> 
	<meta name="author" content="themeenergy.com">
	
	<title>My Account</title>

	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/theme-pink.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}" />
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Permanent+Marker'>
	<link rel="shortcut icon" href="{{ asset($favicon) }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- box-navy: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- Preloader -->
	<div class="loadwrap">
		<div class="preloader">
			<div></div>
		</div>
	</div>
	<!-- //Preloader -->
	
	<!-- Header -->
	@include('includes.header')
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<div class="row">
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="shop.html" title="Shop">Shop</a></li>
					<li>Checkout</li>
				</ul>
			</nav>
			<!-- FullWidth -->
			<div class="full-width">
				<!-- Billing -->
				<div class="billing two-third">
					<h5><a href="{{ route('index') }}">customer profile</a></h5>
					<form action="{{ route('customer.profile.update') }}" method="post" enctype="multipart/form-data">
						
						{{ csrf_field() }}
					<div class="f-row">
						<div class="half">
							<label for="name">First name *</label>
							<input type="text" name="Fname" id="name" value="{{ $customer->profile->f_name }}">
						</div>
						
						<div class="half">
							<label for="surname">Last name *</label>
							<input type="text" name="Lname" id="surname" value="{{ $customer->profile->l_name }}"/>
						</div>
					</div>
					
					<div class="f-row">
						<label for="company">Company name</label>
						<input type="text" name="company" id="company" value="{{ $customer->profile->company }}"/>
					</div>
					
					<div class="f-row">
						<label for="address">Address *</label>
						<input type="text" name="address" id="address" value="{{ $customer->profile->address }}"/>
					</div>
					
					<div class="f-row">
						<div class="third">
							<label for="zip">Post code *</label>
							<input type="text" name="postCode" id="zip" value="{{ $customer->profile->post_code }}"/>
						</div>
						
						<div class="third">
							<label for="city">Town/City *</label>
							<input type="text" name="city" id="city" value="{{ $customer->profile->city }}"/>
						</div>
						
						<div class="third">
							<label>Country *</label>
							<select>
								<option>{{ $customer->profile->country }}</option>
								<option>Country</option>
								<option>Country</option>
							</select>
						</div>
					</div>
					
					<div class="f-row">
						<div class="half">
							<label for="email">Your e-mail *</label>
						<input type="email" name="email" id="email" value="{{ $customer->email }}">
						</div>
						
						<div class="half">
							<label for="phone">Phone *</label>
							<input type="text" name="phone" id="phone" value="{{ $customer->profile->phone }}" />
						</div>
					</div>
					<div class="f-row">
						<input type="submit" class="button b-color full" value="Update" />
					</div>
					</form>
				</div>
				<!-- //Billing -->
				
				<!-- OneThird -->
				<div class="one-third">
					<!-- CartTotals-->
					<h2>customer profile</h2>
					  <div class="card" style="width:400px">
					    <img class="card-img-top" src="{{ asset('assets/images/img_avatar1.png') }}" alt="Card image" style="width:60%">
					    <div class="card-body">
					      <h4 class="card-title">{{ $customer->name }}</h4>
					      <p class="card-text">
					      	Email: {{ $customer->email }} <br>
					      	Phone: {{ $customer->profile->phone }} <br>
					      	Address: {{ $customer->profile->address }} <br>
					      	City: {{ $customer->profile->city }} <br>
					      	Post Code: {{ $customer->profile->post_code }} <br>
					      	Country: {{ $customer->profile->country }} 
					      </p>
					    </div>
					  </div>
				</div>
				<!-- //OneThird -->
			</div>
			<!-- //FullWidth-->
		</div>
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	<footer class="footer darkgrey" role="contentinfo">
		<!-- OneFourth -->
		<div class="one-fourth">
			<h6>For fans</h6>
			<ul>
				<li><a href="#" title="Bio">Bio</a></li>
				<li><a href="#" title="Gallery">Gallery</a></li>
				<li><a href="#" title="News">News</a></li>
				<li><a href="#" title="Events">Events</a></li>
				<li><a href="#" title="Merchandise">Merchandise</a></li>
			</ul>
		</div>
		<!-- //OneFourth -->
		
		<!-- OneFourth -->
		<div class="one-fourth">
			<h6>For companies</h6>
			<ul>
				<li><a href="#" title="Sponsors">Sponsors</a></li>
				<li><a href="#" title="Event info">Event info</a></li>
				<li><a href="#" title="Charities">Charities</a></li>
				<li><a href="#" title="Contact">Contact</a></li>
				<li><a href="#" title="Become a sponsor">Become a sponsor</a></li>
			</ul>
		</div>
		<!-- //OneFourth -->
		
		<!-- OneFourth -->
		<div class="one-fourth">
			<h6>Customer service</h6>
			<ul>
				<li><a href="#" title="Customer service">Customer service</a></li>
				<li><a href="#" title="Shipping & Handling">Shipping &amp; Handling</a></li>
				<li><a href="#" title="Terms of use">Terms of use</a></li>
				<li><a href="#" title="Privacy policy">Privacy policy</a></li>
			</ul>
		</div>
		<!-- //OneFourth -->
		
		<!-- OneFourth -->
		<div class="one-fourth">
			<h6>Get connected</h6>
			<ul>
				<li><a href="#" title="Facebook">Facebook</a></li>
				<li><a href="#" title="Twitter">Twitter</a></li>
				<li><a href="#" title="Instagram">Instagram</a></li>
				<li><a href="#" title="LinkedIn">LinkedIn</a></li>
				<li><a href="#" title="Vimeo">Vimeo</a></li>
				<li><a href="#" title="Youtube">Youtube</a></li>
			</ul>
		</div>
		<!-- //OneFourth -->
		
		<!-- Copy -->
		<div class="full-width">
			<p>Copyright 2017, <a href="http://www.themeenergy.com">themeenergy</a>. All rights reserved.</p>
		</div>
		<!-- //Copy -->
	</footer>
	<!-- //Footer -->
	
	<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
	<!--script type="text/javascript">
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        
        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        
        @endif
                @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif  

                @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif      
    </script-->

    <script type="text/javascript">
            

            @if (Session::has('success'))

                toastr.options.positionClass = 'toast-bottom-right';
                toastr.success("{{ Session::get('success') }}");

            @endif

            @if (Session::has('error'))

                toastr.options.positionClass = 'toast-bottom-right';
                toastr.error("{{ Session::get('error') }}");

            @endif

            @if (Session::has('warning'))

                toastr.options.positionClass = 'toast-bottom-right';
                toastr.error("{{ Session::get('warning') }}");

            @endif

            
        </script>
	<!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.uniform.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
  </body>
</html>