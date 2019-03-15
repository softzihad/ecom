
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HotShot - Self Promotion HTML Template" />
    <meta name="description" content="HotShot - Self Promotion HTML Template" /> 
    <meta name="author" content="themeenergy.com">
    
    <title>{{ $title }} - Login</title>
    
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
                <h2>Login</h2>
                <form action="{{ route('customer.login_check') }}" method="post">
                   
                    <span style="color: #E91E63; font-weight: bold;">
                    <?php if(Session::get('login_msg_err')) {
                            echo "Email Or Password do not correct";
                    }?>
                    </span>

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
                        
                        <div class="f-row">
                            <input type="submit" value="Login" class="button b-lightgrey" id="submit" />
                        </div>
                        
                        <div class="f-row checkbox">
                            <input type="checkbox" id="remember" />
                            <label for="remember">Remember me?</label>
                        </div>
                        
                        <p><a href="#">Lost your password?</a> Don't have an account yet? <a href="{{ route('customer.register') }}">Register.</a></p>
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
    
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
  </body>
</html>