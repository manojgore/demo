@include('layouts/header')
  <!-- Home Design -->
  <section class="home-one bg-home1">
    <div class="container">
      <div class="row posr">
        <div class="col-lg-10 m-auto">
          <div class="home_content home1_style">
            <div class="home-text text-center mb30">
              <h2 class="title"><span class="aminated-object1"><img class="objects" src="images/home/title-bottom-border.svg" alt=""></span>Find Your Best Match</h2>
              <p class="para">Find the right price, dealer and advice.</p>
            </div>
            <div class="advance_search_panel">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-newcar-tab" data-bs-toggle="pill" data-bs-target="#pills-newcar" type="button" role="tab" aria-controls="pills-newcar" aria-selected="false">All status</button>
                    </li>
                  </ul>
                  <div class="adss_bg_stylehome1">  
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-allstatus" role="tabpanel" aria-labelledby="pills-allstatus-tab">
                        <div class="row">
                        <div class="col-lg-12">
    <div class="home1_advance_search_wrapper">
        <ul class="mb-0 text-center"> 
            <li class="list-inline-item" style="margin-bottom: 10px;">
                <div class="select-boxes">
                    <div class="car_brand">
                        <h6 class="title">From</h6>
                        <input type="text" class="form-control" />
                    </div>
                </div>
            </li>
            <li class="list-inline-item" style="margin-bottom: 10px;">
                <div class="select-boxes">
                    <div class="car_brand">
                        <h6 class="title">To</h6>
                        <input type="text" class="form-control" />
                    </div>
                </div>
            </li>
            <li class="list-inline-item" style="margin-bottom: 10px;">
                <div class="select-boxes">
                    <div class="car_brand">
                        <h6 class="title">Pick Up at</h6>
                        <input type="date" class="form-control" />
                    </div>
                </div>
            </li>
            <li class="list-inline-item" style="margin-bottom: 10px;">
                <div class="select-boxes">
                    <div class="car_brand">
                        <h6 class="title">Pick Up</h6>
                        <input type="date" class="form-control" />
                    </div>
                </div>
            </li>
        </ul>
        <div class="text-center" style="margin-top: 10px;">
            <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
                     </div>
                      </div>
                      </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- Car Category -->
  <section class="car-category mobile_space bgc-f9 z-2 pb100">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="category_item">
            <div class="thumb">
              <img src="{{asset('images/category-item/1.png')}}" alt="1.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Compact</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="category_item">
            <div class="thumb">
              <img src="{{ asset('images/category-item/2.png') }}" alt="2.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Sedan</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="category_item">
            <div class="thumb">
            <img src="{{ asset('images/category-item/3.png') }}" alt="3.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">SUV</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="category_item">
            <div class="thumb">
              <img src="{{ asset('images/category-item/4.png') }}" alt="4.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Convertible</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
          <div class="category_item">
            <div class="thumb">
              <img src="{{ asset('images/category-item/5.png') }}" alt="5.png">
            </div>
            <div class="details">
              <p class="title"><a href="page-car-single-v1.html">Coupe</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Product  -->
  <section class="featured-product">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Featured Listings</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_sliders row">
            <!-- Nav tabs -->
            <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Status</button>
              <button class="nav-link" id="nav-shopping-tab" data-bs-toggle="tab" data-bs-target="#nav-shopping" role="tab" aria-controls="nav-shopping" aria-selected="false">New Cars</button>
              <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels" role="tab" aria-controls="nav-hotels" aria-selected="false">Used Cars</button>
            </div>
            <!-- Tab panes -->
            <div class="tab-content col-lg-12" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  @foreach($cars as $car)
                  <div class="col-sm-6 col-xl-3">
                    <div class="car-listing">
                      <div class="thumb">
                        <div class="tag">FEATURED</div>
                        <img src="{{ asset($car->image)}}" alt="1.jpg">
                        <div class="thmb_cntnt2">
                          <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                        </div>
                        <div class="thmb_cntnt3">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="details">
                        <div class="wrapper">
                          <h5 class="price"></h5>
                          <h6 class="title"><a  href="{{url('cars', $car->id)}}"> {{$car->listing_title}}</a></h6>
                          <div class="listign_review">
                            <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#">4.7</a></li>
                              <li class="list-inline-item">(684 reviews)</li>
                            </ul>
                          </div>
                        </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>{{$car->type}}</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>{{$car->fuel_type}}</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt20">
        <div class="col-lg-12">
          <div class="text-center">
            <a href="page-list-v1.html" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Chose us  -->
  <section class="why-chose pt0 pb90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="why_chose_us">
            <div class="icon float-start"><span class="flaticon-price-tag"></span></div>
            <div class="details">
              <h5 class="title">Best Price</h5>
              <p>With over 1000+ cars in our fleet across india, we offer affordability and service at same time.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="why_chose_us">
            <div class="icon float-start style2"><span class="flaticon-car"></span></div>
            <div class="details">
              <h5 class="title">Trusted By Thousands</h5>
              <p>OWell trained and qualified driving experts, ensuring a comfortable experience in every ride.From affordable to super luxury,our fleet ensures there is a car for every customer. </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="why_chose_us">
            <div class="icon float-start style3"><span class="flaticon-trust"></span></div>
            <div class="details">
              <h5 class="title">Wide Range of Brands</h5>
              <p>From affordable to super luxury,our fleet ensures there is a car for every customer. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Delivery Divider -->
  <section class="deliver-divider bg-img1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="posr">
            <div class="home1_divider_video_pop">
              <div class="video_popup_icon">
                <a class="video_popup_btn popup-img popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y">
                  <span class="flaticon-play"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-xl-5">
          <div class="home1_divider_content">
            <h2 class="title">We Make Finding The Right Car Simple</h2>
            <p class="para">At Voiture what matters to us is making your car search and buying experience as simple as possible, so you can find the right car quickly and get on with making it yours.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Popular Listing -->
  <section class="popular-listing pb80 bg-ptrn1 bgc-heading-color">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2 class="text-white">Popular Listings</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="home1_popular_listing">
          <div class="listing_item_4grid_slider dots_none">
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="{{ asset('images/listing/1.jpg') }}" alt="1.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$129</h5>
                    <h6 class="title"><a href="{{route('listingv1')}}">Volvo XC90 - 2020</a></h6>
                    <div class="listign_review">
                      <ul class="mb0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#">4.7</a></li>
                        <li class="list-inline-item">(684 reviews)</li>
                      </ul>
                    </div>
                  </div>
                  <div class="listing_footer">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="{{ asset('images/listing/2.jpg') }}" alt="2.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$56</h5>
                    <h6 class="title"><a href="{{route('listingv1')}}">Mercedes-Benz S 560 - 2021</a></h6>
                    <div class="listign_review">
                      <ul class="mb0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#">4.7</a></li>
                        <li class="list-inline-item">(684 reviews)</li>
                      </ul>
                    </div>
                  </div>
                  <div class="listing_footer">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="{{ asset('images/listing/3.jpg') }}" alt="3.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$230</h5>
                    <h6 class="title"><a href="{{route('listingv1')}}">BMW M8 Gran Coupe Base - 2021</a></h6>
                    <div class="listign_review">
                      <ul class="mb0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#">4.7</a></li>
                        <li class="list-inline-item">(684 reviews)</li>
                      </ul>
                    </div>
                  </div>
                  <div class="listing_footer">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag blue">SPECIAL</div>
                  <img src="{{ asset('images/listing/4.jpg') }}" alt="4.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$478</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Nıssan Qasqai - Sky Pack</a></h6>
                    <div class="listign_review">
                      <ul class="mb0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#">4.7</a></li>
                        <li class="list-inline-item">(684 reviews)</li>
                      </ul>
                    </div>
                  </div>
                  <div class="listing_footer">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts/footer');