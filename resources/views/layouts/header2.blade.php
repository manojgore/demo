<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-add-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:08 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
<meta name="description" content="Voiture - Automotive & Car Dealer HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fileuploader.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashbord_navitaion.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- Title -->
<title>YatraCars.com | All India Luxury Car Rental Services</title>
<!-- Favicon -->
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
  
  <!-- header top -->
  <div class="header_top home3_style dashbord_style dn-992">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-xl-7">
          <div class="header_top_contact_opening_widget text-center text-md-start">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><span class="flaticon-phone-call"></span>919004349131</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>BKC Bandra East Mumbai: 400051</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Mon - Fri 8:00 - 18:00</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-xl-5">
          <div class="header_top_social_widgets text-center text-md-end">
            <ul class="m0">
              <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one home3_style dashbord_style main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid"> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <button type="button" id="menu-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a href="{{route('HomePage')}}" class="navbar_brand float-start dn-md">
        <img class="logo1 img-fluid" src="{{ asset('images/header-logo2.svg') }}" alt="header-logo2.png">
        <img class="logo2 img-fluid" src="{{ asset('images/header-logo2.svg') }}" alt="header-logo2.svg">

        </a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end" data-menu-style="horizontal">
          <li> <a href="#"><span class="title">Explore</span></a>
            <!-- Level Two-->
            <ul>
              <li> <a href="#">User Info</a> 
                <ul>
                  <li><a href="{{route('DashBoard')}}">Dashboard</a></li>
                  <li><a href="{{route('UserProfile')}}">Profile</a></li> 
                  <li><a href="{{route('MyListings')}}">My Orders</a></li>
                  <li><a href="{{route('Favourites')}}">Favorites</a></li>
                  <li><a href="{{route('Messages')}}">Messages</a></li>
                  <li><a href="{{route('LogOut')}}">Logout</a></li>
                </ul>
              </li>
              <li><a href="{{route('UserProfile')}}">User Profile</a></li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">Listing</span></a>
            <ul>
              <li> <a href="#">Listing Styles</a> 
                <ul>
                <li><a href="{{route('listingv1')}}">Lising V1</a></li>
                  <li><a href="page-list-v2.html">Listing v2</a></li>
                  <li><a href="page-list-v3.html">Listing v3</a></li>
                </ul>
              </li>
              <li> <a href="#">Listing Map</a> 
                <ul>
                  <li><a href="page-list-v8.html">Map v1</a></li>
                  <li><a href="page-list-v9.html">Map v2</a></li>
                  <li><a href="page-list-v10.html">Map v3</a></li>
                </ul>
              </li>
              <li> <a href="#">Listing Single</a> 
                <ul>
                  <li><a href="page-car-single-v1.html">Single V1</a></li>
                  <li><a href="page-car-single-v2.html">Single V2</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="add_listing"><a href="{{route ('LogOut')}}">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Modal -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container p60">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container p0" id="myTabContent">
            <div class="row mt30 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="col-lg-12">
                <div class="login_form">
                  <p>New to Cars.com? <a href="page-register.html">Sign up.</a> Are you a dealer?</p>
                  <form action="#">
                    <div class="mb-2 mr-sm-2">
                      <label class="form-label">Username or email address  *</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb5">
                      <label class="form-label">Password  *</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                      <label class="custom-control-label" for="exampleCheck3">Remember me</label>
                      <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                    </div>
                    <button type="submit" class="btn btn-log btn-thm mt5">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt30 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="col-lg-12">
                <div class="sign_up_form">
                  <p>Already have a profile? <a href="page-login.html">Sign in.</a></p>
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb20">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb20">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="mb20">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb20">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb20">
                          <label class="form-label">Confirm Password</label>
                          <input type="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-signup btn-thm mb0">Sign Up</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="mobile_menu_bar">
          <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
        </div>
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="images/header-logo2.svg" alt="images/header-logo2.png"></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li><span>Explore</span>
        </li>
        <li><span>Listings</span>
          <ul>
            <li><span>Listing Styles</span>
              <ul>
                <li><a href="{{route('listingv1')}}">Lising V1</a></li> 
                <li><a href="page-list-v2.html">Lising V2</a></li>
              </ul>
            </li>
            <li><span>Listing Map</span>
              <ul>
                <li><a href="page-list-v8.html">Map V1</a></li>
                <li><a href="page-list-v9.html">Map V2</a></li>
              </ul>
            </li>
            <li><span>Listing Single</span>
              <ul>
                <li><a href="page-car-single-v1.html">Single V1</a></li>
                <li><a href="page-car-single-v2.html">Single V2</a></li>
              </ul>
            </li>
          </ul>
        </li>
          <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
       
        <!-- Only for Mobile View -->
        <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">BKC Bandra East Mumbai: 400051</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">919004349131</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Fri 8:00 - 18:00</a></span>
            </span>
            <span class="social-links">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <a href="#"><span class="fab fa-pinterest"></span></a>
            </span>
          </span>
        </li>
      </ul>
    </nav>
  </div>
    <section class="our-dashbord dashbord bgc-f9">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
            <div class="row">
              <div class="col-lg-12">
                <div class="extra-dashboard-menu dn-lg">
                  <div class="ed_menu_list">
                    <ul> 
                      <li><a href="{{route('DashBoard')}}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                      <li><a href="{{route('UserProfile')}}"><span class="flaticon-user-2"></span>Profile</a></li>
                      <li><a href="{{route('MyListings')}}"><span class="flaticon-list"></span>My Orders</a></li>
                      <li><a href="{{route('Favourites')}}"><span class="flaticon-heart"></span>Favorites</a></li>
                      <li><a href="{{route('Messages')}}"><span class="flaticon-message"></span>Messags</a></li>
                      <li><a href="{{route('LogOut')}}"><span class="flaticon-logout"></span>Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="dashboard_navigationbar dn db-lg mt50">
                  <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                    <ul> 
                      <li><a href="{{route('DashBoard')}}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                      <li><a href="{{route('UserProfile')}}"><span class="flaticon-user-2"></span>Profile</a></li>
                      <li><a href="{{route('MyListings')}}"><span class="flaticon-list"></span>My Orders</a></li>
                      <li><a href="{{route('Favourites')}}"><span class="flaticon-heart"></span>Favorites</a></li>
                      <li><a href="{{route('Messages')}}"><span class="flaticon-message"></span>Messags</a></li>
                      <li><a href="{{route('LogOut')}}"><span class="flaticon-logout"></span>Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    