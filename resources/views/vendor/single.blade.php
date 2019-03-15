<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="HotShot - Self Promotion HTML Template" />
	<meta name="description" content="HotShot - Self Promotion HTML Template" /> 
	<meta name="author" content="themeenergy.com">
	
	<title>{{ $product->name }}</title>
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/theme-pink.css') }}" />
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />

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
	<!--div class="loadwrap">
		<div class="preloader">
			<div></div>
		</div>
	</div-->
	<!-- //Preloader -->
	
	<!-- Header -->
	@include('includes.header')
	<!-- //Header -->
	
	<!-- Hero -->
	<!--div class="hero" style="background-image:url({{ asset('assets/images/hero3.jpg') }});">
		<div class="container">
			<div class="intro">
				<div class="text">
					<h1 class="marker">Shop</h1>
				</div>
			</div>
		</div>
	</div-->
	<!-- Hero -->
	
	<!-- Main -->
	<main class="main" role="main">
		<div class="row">
			<!-- FullWidth -->
			<div class="full-width nopad">
				<!-- Actions -->
				<div class="actions">
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
					
					<nav class="shop-menu right">
						<ul>
							<li><a href="javascript:void(0)" class="cartTrigger" title="Cart">{{ Cart::content()->count() }}</span><i class="fa fa-shopping-cart"></i></a></li>
							<li><a href="javascript:void(0)" class="profileTrigger" title="Profile"><i class="fa fa-user"></i></a></li>
						</ul>
					</nav>
					
					<!-- Cart summary -->
					<div class="one-third color summary slideContent">
                        <h6>Recently added products</h6>
                        <ul>   
                            @foreach(Cart::content() as $pdt)
                            <li>
                                <a href="{{ route('product.single', ['slug' => $pdt->name ]) }}" title="{{ $pdt->name}}"><img src="{{ asset($pdt->model->image) }}" alt="{{ $pdt->name}}" /></a>
                                <a href="{{ route('product.single', ['slug' => $pdt->slug ]) }}"  class="prod-title">{{ $pdt->name}}</a>

                                <div class="price">$ {{ $pdt->price}}</div>
                                <a href="{{ route('cart.delete', ['id' => $pdt->rowId ]) }}" title="remove" class="remove"><i class="fa fa-remove"></i></a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="total">${{ Cart::total() }}</div>
                        <a href="{{ route('cart') }}" title="Cart" class="button b-white">Cart</a> <a href="{{ route('cart.checkout') }}" title="Checkout" class="button b-white">Checkout</a>
                        <p><a href="javascript:void(0)" class="continue">Continue shopping</a></p>
                    </div>
					<!-- //Cart summary -->
					
					<!-- Profile -->
					<div class="one-fourth color profile slideContent">
						<a href="javascript:void(0)" class="continue"><i class="fa fa-close"></i></a>
						<h6>My profile</h6>
						<nav>
							<ul>
								<li><a href="login.html" title="My account">My account</a></li>
								<li><a href="login.html" title="Login">Login</a></li>
								<li><a href="wishlist.html" title="My wishlist">My wishlist</a></li>
							</ul>
						</nav>
					</div>
					<!-- //Profile -->
				</div>
				<!-- //Actions -->
				
				<!-- Product -->
				<div class="product">
					<div class="row">
						<!-- Gallery -->
						<div class="one-half nopad">
							<div id="sync1" class="owl-carousel">
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								
							</div>
							<div id="sync2" class="owl-carousel">
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								<div class="item"><img src="{{ $product->image }}" alt="product" /></div>
								
							</div>
						</div>
						<!-- //Gallery -->
						
						<!-- Product data -->
						
						<div class="one-half">
							<!--div class="info color message">
								<a href="{{ route('cart') }}" title="View cart" class="button b-white small right">View cart</a>
								<p>Product title lorem was successfully added to your cart</p>
							</div-->
							
							
							<h2>{{ $product->name }}</h2>
							<div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
							@if($product->discount > 0)
							<?php  $discount= ($product->price * $product->discount)/100;
		                        $newPrice = $product->price - $discount;
		                     ?>
							<div class="price">${{ $newPrice }} 
								<span class="old">{{ $product->price }}</span>
							</div>
							@else
			                	<div class="price">${{ $product->price }}</div>
			                @endif
							<p>{!! $product->description !!}</p>
							<div class="variables">
								<label>Choose your size:</label>
								<select>
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
								</select>
							</div>
							@if (Session::has('success'))
							    <div style="background-color: #E91E63 !important;color: #fff;width: 100%;padding: 20px 10px 0px 10px; text-align: center;">
							        <p>Product successfully added to your cart <a href="{{ route('cart') }}" title="View cart" class="btn" style="color: #e91e63; border: 2px solid #fff; padding: 5px 20px; margin-left: 10px; background: #ffffffa3;">View cart</a></p>
							        
							    </div>
							@endif
							@if (Session::has('msg'))
									<b style="color: red;">Out of Stock: (Max-50)</b>
							@endif
							@if (Session::has('msg1'))
									<b style="color: red;">Invalid Quantity</b>
							@endif
							<form action="{{ route('cart.add') }}" method="post">
								{{ csrf_field() }}
								
								<input type="number" id="price" name="qty" value="1"  />
								<input type="hidden" name="pdt_id" value="{{ $product->id }}">
								<button title="Add to cart" class="button b-lightgrey">Add to cart</button>
							</form>
							<div class="wishlist"><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i> &nbsp;ADD TO WISHLIST</a></div>
							<div class="social-icons">
								<a href="#" title="Share on facebook"><i class="fa fa-facebook fa-fw"></i></a>
								<a href="#" title="Share on twitter"><i class="fa fa-twitter fa-fw"></i></a>
								<a href="#" title="Pin on pinterest"><i class="fa fa-pinterest-p fa-fw"></i></a>
								<a href="#" title="Share on google plus"><i class="fa fa-google-plus fa-fw"></i></a>
								<a href="#" title="Email a friend"><i class="fa fa-envelope fa-fw"></i></a>
							</div>
							<div class="product_meta">
								<span>SKU: <span>4324231546</span></span>
								<span>Category: <a href="{{ route('category.single', ['slug' => $catname->slug ]) }}" title="Clothes">{{ $catname->name }}</a></span>
								<span>Tags: 
								@foreach($product->tags as $tag)
                                	<a href="{{ route('tag.single', ['id' => $tag->id ]) }}" class="w-tags-item">{{ $tag->tag }}</a>
                                @endforeach
                            	</span>
							</div>
						</div>
						<!-- //Product data -->
					</div>
					
					<!-- Product tabs -->
					<div class="full-width">
						<ul class="tabs horizontal">
							<li><a href="#tab1">Description</a></li>
							<li><a href="#tab2">Additional information</a></li>
							<li><a href="#tab3">Reviews</a></li>
						</ul>
						
						<div class="full-width tc-wrap">
							<!-- TabContent-->
							<div class="tab-content" id="tab1">
								{!! $product->description !!}
							</div>
							<!-- //TabContent-->
							
							<!-- TabContent-->
							<div class="tab-content" id="tab2">
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
							<!-- //TabContent-->
							
							<!-- TabContent-->
							<div class="tab-content" id="tab3">
								@include('includes.disqus')
								<!--div class="comments" id="comments">
									<h6>3 reviews for product title lorem </h6>
									<ul>
										<li class="comment">
											<div class="avatar left-pic"><a href="#"><img src="{{ asset('assets/images/img1.jpg') }}"alt="avatar" width="80" /></a></div>
											<div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
											<div class="comment-author"><a href="#">Kimberly C.</a> said 1 month ago</div>
											<div class="comment-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</div>
										</li>
										<li class="comment">
											<div class="avatar left-pic"><a href="#"><img src="{{ asset('assets/images/img3.jpg') }}"alt="avatar" width="80" /></a></div>
											<div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
											<div class="comment-author"><a href="#">Jason A.</a> said 1 month ago</div>
											<div class="comment-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</div>
										</li>
									</ul>
									<h6>Leave a review</h6>
									<form>
										<fieldset>
											<div class="f-row">
												<label for="name">Your name</label>
												<input type="text" id="name"/>
											</div>
											
											<div class="f-row">
												<label>Your rating</label>
												<p class="stars">
													<span><a href="#"><i class="fa fa-star"></i></a></span>
													<span><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i></a></span>
													<span><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></span>
													<span><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></span>
													<span><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></span>
												</p>
											</div>
											
											<div class="f-row">
												<label>Your review</label>
												<textarea></textarea>
											</div>
											
											<div class="f-row">
												<a href="#" title="Submit review" class="button b-lightgrey">Submit review</a>
											</div>
										</fieldset>
									</form>
								</div-->
							</div>
							<!-- //TabContent-->
						</div>
					</div>
					<!-- //Product tabs -->
				</div>
				<!-- //Product -->
			</div>
			<!-- //FullWidth -->
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
	
	<!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.uniform.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
	<script>
		$(document).ready(function() {
		
		//Product gallery
		  var sync1 = $("#sync1");
		  var sync2 = $("#sync2");
		 
		  sync1.owlCarousel({
			singleItem: true,
			slideSpeed: 1000,
			pagination:false,
			navigation:true,
			afterAction : syncPosition,
			responsiveRefreshRate : 200,
		  });
		 
		  sync2.owlCarousel({
			items: 4,
			pagination:false,
			responsiveRefreshRate : 100,
			itemsTablet: [768,4],
			itemsMobile: [479,2],
			afterInit : function(el){
			  el.find(".owl-item").eq(0).addClass("synced");
			}
		  });
		 
		  function syncPosition(el){
			var current = this.currentItem;
			$("#sync2")
			  .find(".owl-item")
			  .removeClass("synced")
			  .eq(current)
			  .addClass("synced")
			if($("#sync2").data("owlCarousel") !== undefined){
			  center(current)
			}
		  }
		 
		  $("#sync2").on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		  });
		 
		  function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
			  if(num === sync2visible[i]){
				var found = true;
			  }
			}
		 
			if(found===false){
			  if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			  }else{
				if(num - 1 === -1){
				  num = 0;
				}
				sync2.trigger("owl.goTo", num);
			  }
			} else if(num === sync2visible[sync2visible.length-1]){
			  sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
			  sync2.trigger("owl.goTo", num-1)
			}
			
		  }
		  
		// Related products 
		$(".products").owlCarousel({
			items : 4,
			itemsDesktop: 	[1199,3],
			itemsTablet: 	[860,2],
			itemsMobile: 	[600,1]
		});
		 
		
		});
	</script>
  </body>
</html>