<!DOCTYPE html>
<html lang="en"  xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr">
  <head>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Facebook integration for Laravel">

    <title>SGEOSPATIAL 2014 Poll</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <style type="text/css">
	    body {
	    	padding: 30px;
	    }
	    .navbar {
	    	margin-bottom: 30px;
	    }
        .fb_edge_widget_with_comment span.fb_edge_comment_widget iframe.fb_ltr {
            display: none !important;
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SGEOSPATIAL 2014 Poll</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="https://www.facebook.com/OneMap" target="_blank">Find us on Facebook</a></li>
          </ul>
          @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Profile <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li> @yield('profile_details') </li>
                <li class="text-right"><a href="{{url('logout')}}">Logout</a></li>
              </ul>
            </li>
          </ul>
          @endif
        </div><!--/.nav-collapse -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      
      @yield('content')
      

    </div> <!-- /container -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>