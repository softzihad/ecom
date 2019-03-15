<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HotShot - Self Promotion HTML Template" />
	<meta name="description" content="HotShot - Self Promotion HTML Template" /> 
	<meta name="author" content="themeenergy.com">
	
	<title>Order</title>
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/theme-pink.css') }}" />
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Permanent+Marker'>
	<link rel="shortcut icon" href="{{ asset($favicon) }}" />

	<!-- Styles for Tostr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
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
			<!-- ThreeFourth -->
			<div class="three-fourth">
				<h2>Order received</h2>
				<p>Thank you. Your order has been received.</p>
				<ul class="order_details">
					<li>Order Number: <strong>{{ $billing->id }}</strong></li>
					<li>Date: <strong>{{ $billing->created_at->toFormattedDateString() }}</strong></li>
					<li>Total: <strong>${{ number_format(Cart::total()) }}</strong></li>
					<li>
					<li><button type="button" class="btn btn-danger btn-addon" data-toggle="modal" data-target="#myModal"  style="border: none; border-radius:7px; height: 40px; width: 110px; background-color: #E91E63; color: white; font-weight: bold; font-size: 15px; text-transform: capitalize;">Bkash</button></li>
					<li>
					<li>
						<a href="#" class="logos-item">
                            <img src="{{ asset('assets/images/visa.png') }}" alt="Visa">
                        </a>
                        <a href="#" class="logos-item">
                            <img src="{{ asset('assets/images/mastercard.png') }}" alt="MasterCard">
                        </a>
					</li>
						<form action="{{ route('cart.payment') }}" method="POST">
							{{ csrf_field() }}
						  <script
						    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						    data-key="pk_test_QelX9jebWk3n8gwF3uDxy3ur"
						    data-amount="{{ Cart::total() * 100 }}"
						    data-name="E-Commerce"
						    data-description="Buy Some Product"
						    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
						    data-locale="auto">
						  </script>
						</form>
					</li>
				</ul>
				
				<!-- CartTotals-->
				<table class="shop_table order_details">
					<thead>
						<tr>
							<th>Product</th>
							<th>Total</th>
						</tr>
					</thead>
					
					<tbody>
						@foreach(Cart::content() as $pdt)
						<tr>
							<td class="product-name">
								<a href="{{ route('product.single', ['slug' => $pdt->model->slug]) }}" title="{{ $pdt->name}}">{{ $pdt->name}}</a> <strong class="product-quantity">× {{ $pdt->qty}}</strong>
							</td>
							<td class="product-total"><span class="amount">${{ ($pdt->price * $pdt->qty) }}</span></td>
						</tr>
						@endforeach
					</tbody>
					
					<tfoot>
						<tr>
							<th scope="row">Subtotal:</th>
							<td><span class="amount">${{ Cart::total() }}</span></td>
						</tr>
						<tr>
							<th scope="row">Shipping:</th>
							<td>Free Shipping</td>
						</tr>
						<!--tr>
							<th scope="row">Payment Method:</th>
							<td>Direct bank transfer</td>
						</tr-->
						<tr>
							<th scope="row">Total:</th>
							<td><span class="amount">${{ Cart::total() }}</span></td>
						</tr>
					</tfoot>
				</table>
				<!-- //CartTotals-->
				
				<h5>Customer details</h5>
				<table class="shop_table customer_details">
					<tbody>
						<tr>
							<th>{{ $billing->f_name }} {{ $billing->l_name }}</th>
							<td>{{ $billing->email }}</td>
						</tr>
						<tr>
							<th>Telephone:</th>
							<td>{{ $billing->phone }}</td>
						</tr>
					</tbody>
				</table>
				
				<div class="one-half nopad">
					<h5>Billing address</h5>
					<address>{{ $billing->address }},<br />{{ $billing->phone }} {{ $billing->city }}<br />{{ $billing->country }}</address>
				</div>
			</div>
			<!-- //ThreeFourth-->
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
        	<h4 class="modal-title">Payment</h4>
        	<p>You can make payments from your bKash Account to any “Merchant” who accepts “bKash Payment”. Now you can bKash your Payment at more than 47,000 outlets nationwide. To bKash your Payment follow the steps below.</p>
          <ul>
          	<li>Go to your bKash Mobile Menu by dialing *247#</li>
          	<li>Choose “Payment”</li>
          	<li>Enter the 01744132123</li>
          	<li>Enter the amount {{ number_format(Cart::total() *$curency->taka) }} BDT</li>
          	<li>Enter a reference* against your payment (you can mention the purpose of the transaction in one word. e.g. Bill)</li>
          	<li>Enter the Counter Number* (the salesperson at the counter will tell you the number)</li>
          	<li>Now enter your bKash Mobile Menu PIN to confirm</li>
          </ul>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	
        	<a href="{{ route('cart.payment_bkash') }}" class="btn btn-success btn-addon" onclick="pay_alert()">Finish</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
	
	<!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.uniform.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>

	<!-- Scripts for Toastr-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  	<script type="text/javascript">
  		function pay_alert() {
		  alert("we will call you soon");
		}
	</script>

  	</script>

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
  </body>
</html>