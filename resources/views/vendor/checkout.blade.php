<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HotShot - Self Promotion HTML Template" />
	<meta name="description" content="HotShot - Self Promotion HTML Template" /> 
	<meta name="author" content="themeenergy.com">
	
	<title>Checkout</title>
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/theme-pink.css') }}" />
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Permanent+Marker'>
	<link rel="shortcut icon" href="{{ asset($favicon) }}" />
	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

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
					<li><a href="{{ route('index') }}">Home</a></li>
					@foreach($categories as $category)
					<li>
						<a href="{{ route('category.single', ['slug' => $category->slug ]) }}">{{ $category->name }}</a>
					</li>
					@endforeach()
				</ul>
			</nav>
			<!-- FullWidth -->
			<div class="full-width">
				<h2>Checkout</h2>
				@if(!isset($customer_id))
				<div class="info">Returning customer? <a data-toggle="modal" data-target="#myModal" style="color: #F92468; cursor: pointer;">Click here to login</a><span style="color: #E91E63; font-weight: bold;">
                    <?php if(Session::get('login_msg_errtwo')) {
                            echo " (Sorry! Email Or Password do not correct, Try Again Please..)";
                    }?>
                    </span>
                </div>
				@endif

				<!--div class="info">Have a coupon? <a class="showcoupon" href="#">Click here to enter your code</a>
					<div class="coupon">
						<h5>Coupon</h5>
						<p>Enter your coupon code if you have one.</p>
						<div class="f-row">
							<input type="text" id="coupon" />
							<input type="submit" id="applyCoupon" value="Apply coupon" class="button b-lightgrey"/>
						</div>
					</div>
				</div-->
				@if(isset($customer_id))
				<!-- Billing -->

				<div class="billing two-third">
					<h5>Billing Details</h5>
					
					@include('includes.errors')
					<form action="{{ route('billing.store') }}" method="post" enctype="multipart/form-data">
                	{{ csrf_field() }}
					@foreach(Cart::content() as $pdt)
						<input type="hidden" name="productId[]" value="{{ $pdt->id }}">
	                    <input type="hidden" name="productName[]" value="{{ $pdt->name }}">
	                    <input type="hidden" name="productPrice[]" value="{{ $pdt->price }}">
	                    <input type="hidden" name="productQty[]" value="{{ $pdt->qty }}">
					@endforeach
						<div class="f-row">
							<div class="half">
								<label for="Fname">First name *</label>
								<input type="text" name="Fname"  id="name" value="{{ $customer->profile->f_name }}" required />
							</div>
							
							<div class="half">
								<label for="Fname">Last name *</label>
								<input type="text"  name="Lname" id="surname" value="{{ $customer->profile->l_name }}" required />
							</div>
						</div>
						
						<div class="f-row">
							<label for="company">Company name</label>
							<input type="text" name="company" id="company" value="{{ $customer->profile->company }}"/>
						</div>
						
						<div class="f-row">
							<div class="half">
								<label for="address">Address *</label>
								<input type="text" name="address" id="address" value="{{ $customer->profile->address }}" required />
							</div>

							<div class="half">
								<label for="phone">Phone *</label>
								<input type="number" name="phone" id="phone" value="{{ $customer->profile->phone }}" required />
							</div>
						</div>
						
						<div class="f-row">
							<div class="third">
								<label for="zip">Post code *</label>
								<input type="text" name="Postcode" id="zip" value="{{ $customer->profile->post_code }}"required />
							</div>
							
							<div class="third">
								<label for="city">Town/City *</label>
								<input type="text" name="city" id="city" value="{{ $customer->profile->city }}"required />
							</div>
							
							<div class="third">
								<label>Country *</label>
								<select name="country">
									<option value="Bangladesh">Bangladesh</option>
								</select>
							</div>
						</div>
						<div class="f-row">
							<label>Order notes</label>
							<textarea name="notes"></textarea>
						</div>
						<div class="f-row">
							<input type="submit" class="button b-color full" value="Place order" />
						</div>
					</form>
				</div>
				<!-- //Billing -->
				@else
				<!-- Billing -->
				<div class="billing two-third">
					<h5>Billing Details</h5>
					<span style="color: #E91E63; font-weight: bold;">
                    <?php if(Session::get('reg_msg')) {
                            echo " (Sorry! This Email Have Already Register...)";
                    }?>
                    </span>
					@include('includes.errors')
					<form action="{{ route('billing.store') }}" method="post" enctype="multipart/form-data">
                	{{ csrf_field() }}
					@foreach(Cart::content() as $pdt)
						<input type="hidden" name="productId[]" value="{{ $pdt->id }}">
	                    <input type="hidden" name="productName[]" value="{{ $pdt->name }}">
	                    <input type="hidden" name="productPrice[]" value="{{ $pdt->price }}">
	                    <input type="hidden" name="productQty[]" value="{{ $pdt->qty }}">
					@endforeach
						<div class="f-row">
							<div class="half">
								<label for="Fname">First name *</label>
								<input type="text" name="Fname"  id="name"  required />
							</div>
							
							<div class="half">
								<label for="Fname">Last name *</label>
								<input type="text"  name="Lname" id="surname" required />
							</div>
						</div>
						
						<div class="f-row">
							<label for="company">Company name</label>
							<input type="text" name="company" id="company"/>
						</div>
						
						<div class="f-row">
							<div class="half">
								<label for="address">Address *</label>
								<input type="text" name="address" id="address" required />
							</div>

							<div class="half">
								<label for="phone">Phone *</label>
								<input type="number" name="phone" id="phone" required />
							</div>
						</div>
						
						<div class="f-row">
							<div class="third">
								<label for="zip">Post code *</label>
								<input type="text" name="Postcode" id="zip" required />
							</div>
							
							<div class="third">
								<label for="city">Town/City *</label>
								<input type="text" name="city" id="city" required />
							</div>
							
							<div class="third">
								<label>Country *</label>
								<select name="country">
									<option value="Bangladesh">Bangladesh</option>
								</select>
							</div>
						</div>
						<div class="f-row">
							<label>Order notes</label>
							<textarea name="notes"></textarea>
						</div>
						<div class="f-row login-slide" style="display: none;">
							<div class="half">
								<label for="email">Your e-mail *</label>
								<input type="email" name="email" id="email"/>
							</div>

							<div class="half">
								<label for="password">Pass *</label>
								<input type="password" name="pass" id="password"/>
							</div>
						</div>
						
						<div class="f-row checkbox">
							<label for="account">Create an account?</label>
							<input type="checkbox" id="account" />
						</div>
						<div class="f-row">
							<input type="submit" class="button b-color full" value="Place order" />
						</div>
					</form>
				</div>
				<!-- //Billing -->
				@endif
				<!-- OneThird -->
				<div class="one-third">
					<!-- CartTotals-->
					<div class="cart_totals">
						<h5>Your order</h5>
						<table>
							<tr>
								<th>Subtotal</th>
								<td>${{ Cart::total() }}</td>
							</tr>
							<tr>
								<th>Shipping</th>
								<td>FREE</td>
							</tr>
							<tr>
								<th>Total</th>
								<td>${{ Cart::total() }}</td>
							</tr>
						</table>
					</div>
					<!-- //CartTotals-->
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

	<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        
        
        <!-- Modal body -->
        <div class="modal-body">
        	<h4 class="modal-title">Customer Login</h4>
          <form action="{{ route('customer.login_check_two') }}" method="post">

                    <fieldset>
                        {{ csrf_field() }}
                        <div class="f-row">
                            <label for="username">Email address</label>
                            <input type="text" name="email" id="username"/>
                        </div>
                        
                        <div class="f-row">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"/>
                        </div>

                        <div class="f-row checkbox">
                            <input type="checkbox" id="remember" />
                            <label for="remember">Remember me?</label>
                        </div>

                        <div class="f-row">
                            <input type="submit" value="Login" class="button b-lightgrey" id="submit" />
                        </div>
                    </fieldset>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

	<!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
	<script src="{{ asset('assets/js/jquery.uniform.min.js') }} "></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>

	<!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function(){
		    $("#account").click(function(){
		        $(".login-slide").slideToggle();
		    });
		  
		});
	</script>
  </body>
</html>