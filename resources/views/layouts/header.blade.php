<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/voiture-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:43:13 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
<meta name="description" content="Voiture - Automotive & Car Dealer HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
<div class="wrapper ovh">
  <div class="preloader"></div>
  <!-- Sidebar Panel Start -->
  <div class="listing_sidebar">
    <div class="siderbar_left_home pt20">
      <a class="sidebar_switch sidebar_close_btn float-end" href="#">X</a>
      <div class="footer_contact_widget mt100">
        <h3 class="title">Quick contact info</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur.</p>
      </div>
      <div class="footer_contact_widget">
        <h5 class="title">CONTACT</h5>
        <div class="footer_phone">91 9004349131</div>
        <p>hello@voiture.com</p>
      </div>
      <div class="footer_about_widget">
        <h5 class="title">OFFICE</h5>
        <p>India — BKC Bandra East Mumbai: 400051</p>
      </div>
      <div class="footer_contact_widget">
        <h5 class="title">OPENING HOURS</h5>
        <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed</p>
      </div>
    </div>
  </div>
  <!-- Sidebar Panel End -->
  
  <!-- header top -->
  <div class="header_top dn-992">
    <div class="container">
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
              <li class="list-inline-item"><a href="#" data-bs-toggle="modal" data-bs-target="#logInModal">Login</a></li>
              <li class="list-inline-item"><a href="#" data-bs-toggle="modal" data-bs-target="#logInModal">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one transparent main-menu">
    <!-- Ace Responsive Menu -->
    <nav> 
      <div class="container posr"> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
        </div>
        <a href="{{route('HomePage')}}" class="navbar_brand float-start dn-md">
        <img class="logo1 img-fluid" src="{{ asset('images/header-logo.svg') }}" alt="header-logo.svg">
       <img class="logo2 img-fluid" src="{{ asset('images/header-logo2.svg') }}" alt="header-logo2.svg">
				</a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-end" data-menu-style="horizontal">
        <li> <a href="#"><span class="title">Company Dashboard</span></a>
            <!-- Level Two-->
            <ul>
              <li> <a href="{{route('companies.dashboard')}}">Company Dashboard</a> 
              </li>
            </ul>
          </li>
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
            </ul>
          </li>
          <li class="add_listing"><a href="{{route ('LoginPage')}}">Login</a></li>
          <li class="add_listing"><a href="{{route ('RegistrationPage')}}">Register</a></li>
          <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
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
                  <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-2 mr-sm-2">
                      <label class="form-label">email address  *</label>
                      <input type="text" name="email" class="form-control">
                      <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group mb5">
                      <label class="form-label">Password  *</label>
                      <input type="password" name="password" class="form-control">
                      <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                          </span> 
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
                  <form action="{{route('register')}}" method="POST" onsubmit="return validation()" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-label">Name</label>
                          <input type="text" name="name"  value="{{ old('name') }}" class="form-control">
                          <span class="text-danger">
                            @error('name')
                              {{$message}}
                            @enderror
                          </span>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-label">Email</label>
                    <input type="text" name="email"  value="{{ old('email') }}" class="form-control">
                    <span class="text-danger">
                      @error('email')
                      {{$message}}
                      @enderror
                    </span>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb20">
                          <label class="form-label">Password</label>
                    <input type="password"  name="password" class="form-control">
                    <span class="text-danger">
                      @error('password')
                      {{$message}}
                      @enderror
                    </span>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb20">
                          <label class="form-label">Confirm Password</label>
                          <input type="password" name="re-password" class="form-control">
                          <span class="text-danger">
                            @error('re-password')
                            {{$message}}
                            @enderror
                          </span>
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
          <ul>
            <li><span>User Dashboard</span>
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
        <!-- Only for Mobile View -->
        <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">47 Bakery Street, London, UK</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-800-458-56987</a></span>
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