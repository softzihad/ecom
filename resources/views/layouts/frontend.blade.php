<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HotShot - Self Promotion HTML Template" />
    <meta name="description" content="HotShot - Self Promotion HTML Template" /> 
    <meta name="author" content="themeenergy.com">
    
    <title>{{ $title }}</title>
    
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

    <!-- Styles for Tostr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <!-- Custom CSS for Side Nav -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        .navbar-nav .nav-link {color: #FFF;}
        .sidebar a {color: #fdfcfc;}
        .dropdown-item:hover {background: #333}
    </style>

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
    <div class="hero" style="background-image:url({{ asset('assets/images/hero3.jpg') }});">
        <!--<div class="container">
            <div class="intro">
                <div class="text">
                    <h1 class="marker">Shop</h1>
                </div>
            </div>
        </div>-->
    </div>
    <!-- Hero -->
    
    <!-- Main -->
    <main class="main" role="main">
        <div class="row darkgrey">
            <!-- OneFourth -->
            <aside class="one-fourth sidebar">
                <!-- Widget -->
                <div class="widget">
                    <h4>Shop by category</h4>
                    <!--ul class="product-categories"> 
                        @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('category.single', ['slug' => $category->slug ]) }}">{{ $category->name }}</a>
                                </li>
                        @endforeach()
                    </ul-->
                    <nav class="navbar">
                      <!-- Links -->
                      <ul class="navbar-nav" style="width: 100%">
                        @foreach($categories as $category)
                        <li class="nav-item" style="width: 100%">
                          <a class="nav-link pull-left" href="#" data-toggle="dropdown">{{ $category->name }}</a>
                          <span class="pull-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            <ul class="dropdown-menu pull-right" style="background: #212121; border: none; color: #fff;">
                                @foreach($category->subcategories as $subcategory)
                                <li><a class="dropdown-item" href="{{ route('sub_category.single', ['slug' => $subcategory->slug ]) }}">{{ $subcategory->name }}</a></li>
                                @endforeach()
                            </ul>
                        </li>
                        @endforeach() 
                      </ul>

                    </nav>
                </div>
                <!-- //Widget -->
                
                <!-- Widget -->
                <!--div class="widget">
                    <h4>Filter by price</h4>
                    <form>
                        <div class="price_slider_wrapper">
                            <div id="slider-range"></div>
                            <div class="price_label">
                                <label for="amount">Price range:</label> <input type="text" id="amount" readonly />
                            </div>
                        </div>
                    </form>
                </div-->
                <!-- //Widget -->
                
                <!-- Widget -->
                <div class="widget">
                    <h4>Search</h4>
                    <form class="searchform" action="{{ route('my.search') }}" method="GET">
                        <input type="search" name="query" id="searchform" />
                        <a href="#" class="searchsubmit" title="search"><i class="fa fa-search"></i></a>
                    </form>
                </div>
                <!-- //Widget -->
                
                <!-- Widget -->
                <div class="widget">
                    <h4>Advertisment</h4>
                    <a href="#"><img src="{{ asset('assets/images/banner.jpg') }}" alt="banner" /></a>
                </div>
                <!-- //Widget -->
                
            </aside>
            <!-- //OneFourth -->
            
            <!-- ThreeFourth -->
            <div class="three-fourth nopad" id="top">
                <!-- Actions -->
                <div class="actions">
                    <div>
                        <div class="sortby">
                            <p>Sort by</p>
                            <form method="post">
                            <select id="abc" onchange="gopage();">
                                <option>New</option>
                                <option value="2">Popular</option>
                                <option value="3">Price - ascending</option>
                                <option value="4">Price - descending</option>
                            </select>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="pager right">
                            <span>1</span>
                            <span><a href="#">2</a></span>
                        </div>
                    </div>
                    
                    <nav class="shop-menu right">
                        <ul>
                            <li><a href="javascript:void(0)" class="cartTrigger" title="Cart"><span class="cart-count">{{ Cart::content()->count() }}</span><i class="fa fa-shopping-cart"></i></a></li>
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
                        
                        <nav>
                            <ul>
                                @if(isset($customer_id))
                                <li><a href="{{ route('customer.profile') }}" title="My account">My account</a></li>
                                
                                <li><a href="{{ route('customer.logout') }}" title="Login">Logout</a></li>
                                
                                @else
                                    <li><a href="{{ route('customer.login') }}" title="Login"> Login</a></li>
                                @endif
                                <li><a href="wishlist.html" title="My wishlist">My wishlist</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- //Profile -->
                </div>
                <!-- //Actions -->
                
                <!-- //Product -->
                @yield('content')
                
            </div>
            <!-- //ThreeFourth -->
        </div>
        
        <div class="row">
            <div class="full-width rock center">
                <h3 class="marker">Sign up today to be in with a chance of winning something magic </h3>
                <form class="newsletter">
                    <fieldset>
                        <input type="email" id="newsletter" placeholder="Insert your email here" />
                        <input type="submit" id="subscribe" value="subscribe" class="button fill color" />
                    </fieldset>
                </form>
            </div>
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
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $( "#slider-range" ).slider({
              range: true,
              min: 0,
              max: 500,
              values: [ 75, 300 ],
              slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
              }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
              " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        });
    </script>

    <!-- Scripts for Toastr-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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

    

            
    <script type="text/javascript">
            function gopage(){
                var selectbox = document.getElementById("abc");
                var selectValue = selectbox.options[selectbox.selectedIndex].value;

                if (selectValue == '2') {
                    url =  "{{ url('/popular#top') }}";
                    window.open(url,"_self");
                }
                if (selectValue == '3') {
                    url =  "{{ url('/price-asce#top') }}";
                    window.open(url,"_self");
                }
                if (selectValue == '4') {
                    url =  "{{ url('/price-desc#top') }}";
                    window.open(url,"_self");
                }

               
               // alert(selectValue);
            //window.open({{ route('price_asce') }});
    }
    </script>
            
    
  </body>
</html>