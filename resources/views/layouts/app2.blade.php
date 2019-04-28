<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Dashboard</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/switchery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nv.d3.min.css') }}" rel="stylesheet">

  
    <!-- Theme Styles -->
    <link href="{{ asset('css/space.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Toastr Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <!-- Wysiwyg Styles -->
    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar">
     @if(Auth::check())
        <a class="logo-box" href="{{ route('home') }}">
            <span>e-Commerce</span>
        </a>
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="page-sidebar-inner" style="overflow: hidden; width: auto; height: 100%;">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    <li class="active-page">
                        <a href="">
                            <i class="fa fa-tachometer" aria-hidden="true"></i> <span style="padding-left: 10px"> Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Route::currentRouteName()=='categories.index'?'open':'' }} {{ Route::currentRouteName()=='sub_index'?'open':'' }} {{ Route::currentRouteName()=='category.create'?'open':'' }}">
                        <a href="javascript:void(0)">
                            <i class="fa fa-diamond" aria-hidden="true"></i><span style="padding-left: 10px"> Category</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="@if(Route::currentRouteName()=='categories.index' ) 
                                display: block;
                            @elseif(Route::currentRouteName()=='sub_index')
                                display: block;
                            @elseif(Route::currentRouteName()=='category.create')
                                display: block;
                            @else
                                display: none;
                         @endif">
                            <li class="animation {{ Route::currentRouteName()=='categories.index'?'active-page':'' }}"><a href="{{ route('categories.index') }}">Primary Categories</a></li>
                            <li class="animation {{ Route::currentRouteName()=='sub_index'?'active-page':'' }}"><a href="{{ route('sub_index') }}">Sub Categories</a></li>
                            <li class="animation {{ Route::currentRouteName()=='category.create'?'active-page':'' }}"><a href="{{ route('category.create') }}">Add New</a></li>

                        </ul>
                    </li>
                    <li class="{{ Route::currentRouteName()=='tag.index'?'open':'' }} {{ Route::currentRouteName()=='tag.create'?'open':'' }}">
                        <a href="javascript:void(0)">
                           <i class="fa fa-tags" aria-hidden="true"></i><span style="padding-left: 10px"> Tag</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="@if(Route::currentRouteName()=='tag.index')
                                display: block;
                            @elseif(Route::currentRouteName()=='tag.create')
                                display: block;
                            @else
                                display: none;
                            @endif
                        ">
                            <li class="animation"><a href="{{ route('tag.index') }}">Tags</a></li>
                            <li class="animation"><a href="{{ route('tag.create') }}">Add New</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-plus-square" aria-hidden="true"></i><span style="padding-left: 10px"> Product</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="{{ route('products.index') }}">All Product</a></li>
                            <li><a href="{{ route('products.create') }}">Add New</a></li>
                            <li><a href="{{ route('product.trashed') }}">Trash</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('order') }}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><span style="padding-left: 10px"> Order</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                           <i class="fa fa-bullhorn" aria-hidden="true"></i><span style="padding-left: 10px"> Ads Manager</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="">All Ads</a></li>
                            <li><a href="">Add New</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-user-plus" aria-hidden="true"></i><span style="padding-left: 10px"> User</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                             @if(Auth::user()->admin) 
                            <li><a href="{{ route('users.index') }}">Users</a></li>
                            <li><a href="{{ route('user.create') }}">Add New</a></li>
                            @endif
                            <li><a href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a href="">Change Password</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-superpowers" aria-hidden="true"></i><span style="padding-left: 10px"> SEO Manager</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="invoice.html">SEO Settings</a></li>
                        </ul>
                    </li>
                    <li class="menu-divider"></li>
                <!-- @if(Auth::user()->admin) -->
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-cogs" aria-hidden="true"></i><span style="padding-left: 10px"> Genarel</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="{{ route('settings') }}">Settings</a></li>
                            <li><a href="{{ route('curency') }}">Curency</a></li>
                        </ul>
                    </li>
                <!--@endif -->
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-commenting" aria-hidden="true"></i><span style="padding-left: 10px"> Messages</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="">Inbox</a></li>
                            <li><a href="">Read</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 6px; position: absolute; top: 0px; opacity: 0.2; display: none; border-radius: 0px; z-index: 99; right: 0px; height: 471px;"></div><div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div></div>
     @endif
    </div><!-- /Page Sidebar -->
            
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Header -->
        <div class="page-header">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="logo-sm">
                            <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                            <a class="logo-box" href="index.html"><span>Space</span></a>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                            <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                <ul class="dropdown-menu dropdown-lg dropdown-content">
                                    <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><li class="slimscroll dropdown-notifications" style="overflow: hidden; width: auto; height: 250px;">
                                        <ul class="list-unstyled dropdown-oc">
                                            <li>
                                                <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                    <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                        <small class="notification-date">20:00</small>
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                    <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                        <small class="notification-date">06:07</small>
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                    <span class="notification-info">4 new special offers from the apps you follow!
                                                        <small class="notification-date">Yesterday</small>
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                    <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                        <small class="notification-date">Yesterday</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 6px; position: absolute; top: 0px; opacity: 0.2; display: block; border-radius: 0px; z-index: 99; right: 0px; height: 179.598px;"></div><div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div></div>
                                </ul>
                            </li>
                            <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{ asset(Auth::User()->profile->image) }}" height="35" width="35"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Calendar</a></li>
                                    <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!-- /Page Header -->

        <!-- Page Inner -->
        @yield('content')

        
    </div><!-- /Page Content -->
</div>






    <!-- Javascripts -->
        
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/jquery.uniform.standalone.js') }}"></script>
        <script src="{{ asset('js/switchery.min.js') }}"></script>
        <script src="{{ asset('js/d3.min.js') }}"></script>
        <script src="{{ asset('js/nv.d3.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.pie.min.js') }}"></script>
        <script src="{{ asset('js/chart.min.js') }}"></script>
        <script src="{{ asset('js/space.min.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>

        
        <!-- Scripts for toastr-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script >
  function productLoad(order_id) {


    var value = '?order_id=' + order_id;

       $.ajax({
        type: "GET",
        url:  'client/bill/collection/info/search/ajax' + value,

        }).success(function ( result ) {
            
              $(".remove_"+i).remove();
            $('#billcollectionResultReplace_'+i).after( result );  

        }).error(function ( result ) {

            // $('#billcollectionByEmployee-result-replace').html( ' ' );

        });
  }
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

        <!-- Scripts for Wysiwyg -->
    @yield('scripts')
    </body>
</html>

