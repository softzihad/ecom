<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>login</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('login_asset/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('login_asset/css/bootstrap-reset.css') }}" rel="stylesheet">

        <!--Animation css-->
        <link href="{{ asset('login_asset/css/animate.css') }}" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{ asset('login_asset/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('login_asset/css/material-design-iconic-font.min.css') }}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{ asset('login_asset/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('login_asset/css/helper.css') }}" rel="stylesheet">
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-62751496-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>


    <body>

        <div class="wrapper-page">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> Login Into Our Dashboard</h3>
                </div> 

                <div class="panel-body">
                    <form class="form-horizontal m-t-10 p-20 p-b-0" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}
                                            
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" placeholder="Your email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="col-xs-12">
                                <input class="form-control" type="password" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label class="cr-styled">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked>
                                    <i class="fa"></i> 
                                    Remember me
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group text-right">
                            <div class="col-xs-12">
                                <button class="btn btn-success w-md" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="form-group m-t-30">
                            <div class="col-sm-7">
                                <a href=""><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('login_asset/js/jquery.js') }}"></script>
        <script src="{{ asset('login_asset/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('login_asset/js/pace.min.js') }}"></script>
        <script src="{{ asset('login_asset/js/wow.min.js') }}"></script>
        <script src="{{ asset('login_asset/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
            

        <!--common script for all pages-->
        <script src="{{ asset('login_asset/js/jquery.app.js') }}"></script>

    
    </body>
</html>







<!--div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login Into Our Blog Admin Aria</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->

