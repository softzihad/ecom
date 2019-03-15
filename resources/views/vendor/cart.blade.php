<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HotShot - Self Promotion HTML Template" />
    <meta name="description" content="HotShot - Self Promotion HTML Template" /> 
    <meta name="author" content="themeenergy.com">
    
    <title>Cart</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-pink.css') }}" />
    <script src="https://use.fontawesome.com/e808bf9397.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive-tables.css') }}" />

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
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
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
                <form action="" method="post" >
                    {{ csrf_field() }}

            <!-- ThreeFourth -->
            <div class="three-fourth">
                <h2>Cart</h2>
                <table class="cart responsive">
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    @foreach(Cart::content() as $pdt)
                    <tr>
                        <td> 
                            <a href="{{ route('product.single', ['slug' => $pdt->model->slug]) }}" title="{{ $pdt->name}}"><img src="{{ asset($pdt->model->image) }}" alt="{{ $pdt->name}}" width="120" /></a></td>
                        <td>{{ $pdt->name}}</td>
                        <td>${{ $pdt->price}}</td>
                        <td>
                            <span><a href="{{ route('cart.decr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" >-</a></span>
                            <input type="number" value="{{ $pdt->qty}}" readonly />
                            <span><a href="{{ route('cart.incr', ['id' => $pdt->rowId, 'qty' => $pdt->qty ]) }}" class="quantity-plus">+</a></span>
                        </td>
                        <td>${{ ($pdt->price * $pdt->qty) }}</td>
                        <td><a href="{{ route('cart.delete', ['id' => $pdt->rowId ]) }}" title="remove" class="remove"><i class="fa fa-remove"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                 </form>
                <div class="operations">
                    <div class="buttons">
                        <a href="{{ route('index') }}" title="Continue shopping" class="button b-lightgrey">Continue shopping</a>
                        <!--a href="" title="Update cart" class="button b-lightgrey">Update cart</a-->
                    </div>
                </div>
                
                <!--div class="coupon">
                    <h5>Coupon</h5>
                    <p>Enter your coupon code if you have one.</p>
                    <div class="f-row">
                        <input type="text" id="coupon" />
                        <input type="submit" id="applyCoupon" value="Apply coupon" class="button b-lightgrey"/>
                    </div>
                </div-->
            </div>
            <!-- //ThreeFourth -->
            
            <!-- OneFourth -->
            <div class="one-fourth">
                <div class="cart_totals">
                    <h4>Cart totals: {{ Cart::content()->count() }} </h4>
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
                    <a href="{{ route('cart.checkout') }}" title="Checkout" class="button b-color full">Checkout</a>
                </div>
            </div>
            <!-- //OneFourth -->
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
    <script src="{{ asset('assets/js/responsive-tables.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

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
  </body>
</html>