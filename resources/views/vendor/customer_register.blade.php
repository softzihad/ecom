
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HotShot - Self Promotion HTML Template" />
	<meta name="description" content="HotShot - Self Promotion HTML Template" /> 
	<meta name="author" content="themeenergy.com">
	
	<title>{{ $title }} - Register</title>

	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/theme-pink.css') }}" />
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
			<!-- OneHalf -->
			<div class="one-half modal">
				<h2>Register</h2>
				@if(count($errors) > 0)
			      <ul class="list-group">
			          @foreach($errors->all() as $error)
			          <li class="list-group-item text-danger" style="color: red;">
			              {{ $error }}
			          </li>
			          @endforeach
			      </ul>
				 @endif
				<form action="{{ route('customer.store') }}" method="post">
					{{ csrf_field() }}
					<fieldset>
						<div class="f-row">
							<div class="half">
								<label for="name">First Name</label>
								<input type="text" name="Fname" id="name" value="{{ old('Fname') }}"/>
							</div>

							<div class="half">
								<label for="Fname">Last name *</label>
								<input type="text"  name="Lname" id="surname" value="{{ old('Lname') }}"/>
							</div>
						</div>
						
						<div class="f-row">
							<label for="email">E-mail address</label>
							<input type="email" name="email" id="email" value="{{ old('email') }}"/>
						</div>
						
						<div class="f-row">
							<label for="password">Password</label>
							<input type="password" name="password" id="password"/>
						</div>
						
						<div class="f-row">
							<label for="password2">Repeat password <span style="color: red;">
							<?php if(Session::get('message')) {
                            echo " (password do not match)";
		                    }?>
		                    </span>
		                    	
		                    </label>
							<input type="password" name="repeatPass" id="password2"/>
						</div>
						
						<div class="f-row checkbox">
							<input type="checkbox" name="terms" value="1"  id="terms"/>
							<label for="terms">I agree with <a href="#">Terms and conditions</a>.</label>
						</div>
						
						<div class="f-row">
							<input type="submit" class="button b-lightgrey" id="submit" value="Register"/>
						</div>
						
						<p>Already have an account? <a href="{{ route('customer.login') }}">Login.</a></p>
					</fieldset>
				</form>
			</div>
			<!-- //OneHalf -->
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
	
	<script type="text/javascript">
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
    </script>
	<!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.uniform.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
  </body>
</html>