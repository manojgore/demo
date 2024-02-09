@include('layouts.admin-header');
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">My Listing</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <div class="nav nav-tabs justify-content-start" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Status</button>
                      <button class="nav-link" id="nav-shopping-tab" data-bs-toggle="tab" data-bs-target="#nav-shopping" role="tab" aria-controls="nav-shopping" aria-selected="false">New Cars</button>
                      <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels" role="tab" aria-controls="nav-hotels" aria-selected="false">Used Cars</button>
                    </div>
                  </div>
                  <!-- Tab panes -->
                  <div class="col-lg-12 mt50">
                    <div class="tab-content row" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="col-lg-12">
                          <div class="table-responsive my_lisging_table">
                            <table class="table">
                              <thead class="table-light">
                                <tr class="thead_row">
                                  <th class="thead_title pl20" scope="col">Make</th>
                                  <th class="thead_title" scope="col">Model</th>
                                  <th class="thead_title" scope="col">Year</th>
                                  <th class="thead_title" scope="col">Transmission</th>
                                  <th class="thead_title" scope="col">FuelType</th>
                                  <th class="thead_title" scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($carListings as $car)
                                <tr>
                                  <th class="align-middle pl20" scope="row">
                                    <div class="car-listing bdr_none d-flex mb0">
                                      <div class="thumb w150">
                                        <img class="img-fluid" src="{{ asset($car->image) }}" alt="1.jpg">
                                      </div>
                                      <div class="details ms-1">
                                        <h6 class="title"><a href="{{url('cars', $car->id)}}">{{$car->model}}</a></h6>
                                        <h5 class="price">{{$car->price}}</h5>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="align-middle">{{$car->listing_title}}</td>
                                  <td class="align-middle">2020</td>
                                  <td class="align-middle">{{$car->transmission}}</td>
                                  <td class="align-middle">{{$car->fuel_type}}</td>
                                  <td class="editing_list align-middle">
                                    <ul>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-view"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-trash"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="mbp_pagination mt10">
                            <ul class="page_navigation">
                              <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-shopping" role="tabpanel" aria-labelledby="nav-shopping-tab">
                        <div class="col-lg-12">
                          <div class="table-responsive my_lisging_table">
                            <table class="table">
                              <thead class="table-light">
                                <tr class="thead_row">
                                  <th class="thead_title pl20" scope="col">Make</th>
                                  <th class="thead_title" scope="col">Model</th>
                                  <th class="thead_title" scope="col">Year</th>
                                  <th class="thead_title" scope="col">Transmission</th>
                                  <th class="thead_title" scope="col">FuelType</th>
                                  <th class="thead_title" scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th class="align-middle pl20" scope="row">
                                    <div class="car-listing bdr_none d-flex mb0">
                                      <div class="thumb w150">
                                        <img class="img-fluid" src="{{ asset('images/listing/1.jpg') }}" alt="1.jpg">
                                      </div>
                                      <div class="details ms-1">
                                        <h6 class="title"><a href="page-car-single-v1.html">Volvo XC90 - 2020</a></h6>
                                        <h5 class="price">$129</h5>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="align-middle">Volvo</td>
                                  <td class="align-middle">2020</td>
                                  <td class="align-middle">Automatic</td>
                                  <td class="align-middle">Diesel</td>
                                  <td class="editing_list align-middle">
                                    <ul>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-view"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-trash"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                                <tr>
                                  <th class="align-middle pl20" scope="row">
                                    <div class="car-listing bdr_none d-flex mb0">
                                      <div class="thumb w150">
                                        <img class="img-fluid" src="{{ asset('images/listing/5.jpg') }}" alt="5.jpg">
                                      </div>
                                      <div class="details ms-1">
                                        <h6 class="title"><a href="page-car-single-v1.html">Audi A8 L 55 - 2021</a></h6>
                                        <h5 class="price">$129</h5>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="align-middle">Volvo</td>
                                  <td class="align-middle">2020</td>
                                  <td class="align-middle">Automatic</td>
                                  <td class="align-middle">Diesel</td>
                                  <td class="editing_list align-middle">
                                    <ul>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-view"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pen"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                                <tr>
                                  <th class="align-middle pl20" scope="row">
                                    <div class="car-listing bdr_none d-flex mb0">
                                      <div class="thumb w150">
                                        <img class="img-fluid" src="{{ asset('images/listing/7.jpg') }}" alt="7.jpg">
                                      </div>
                                      <div class="details ms-1">
                                        <h6 class="title"><a href="page-car-single-v1.html">Bentley Bentayga V8 - 2020</a></h6>
                                        <h5 class="price">$129</h5>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="align-middle">Volvo</td>
                                  <td class="align-middle">2020</td>
                                  <td class="align-middle">Automatic</td>
                                  <td class="align-middle">Diesel</td>
                                  <td class="editing_list align-middle">
                                    <ul>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-view"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-pen"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="mbp_pagination mt10">
                            <ul class="page_navigation">
                              <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                        <div class="col-lg-12">
                          <div class="table-responsive my_lisging_table">
                            <table class="table">
                              <thead class="table-light">
                                <tr class="thead_row">
                                  <th class="thead_title pl20" scope="col">Make</th>
                                  <th class="thead_title" scope="col">Model</th>
                                  <th class="thead_title" scope="col">Year</th>
                                  <th class="thead_title" scope="col">Transmission</th>
                                  <th class="thead_title" scope="col">FuelType</th>
                                  <th class="thead_title" scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th class="align-middle pl20" scope="row">
                                    <div class="car-listing bdr_none d-flex mb0">
                                      <div class="thumb w150">
                                        <img class="img-fluid" src="{{ asset('images/listing/1.jpg') }}" alt="1.jpg">
                                      </div>
                                      <div class="details ms-1">
                                        <h6 class="title"><a href="page-car-single-v1.html">Volvo XC90 - 2020</a></h6>
                                        <h5 class="price">$129</h5>
                                      </div>
                                    </div>
                                  </th>
                                  <td class="align-middle">Volvo</td>
                                  <td class="align-middle">2020</td>
                                  <td class="align-middle">Automatic</td>
                                  <td class="align-middle">Diesel</td>
                                  <td class="editing_list align-middle">
                                    <ul>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><span class="flaticon-view"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="flaticon-trash"></span></a>
                                      </li>
                                      <li class="list-inline-item mb-1">
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-trash"></span></a>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="mbp_pagination mt10">
                            <ul class="page_navigation">
                              <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                              </li>
                            </ul>
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
  <a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/snackbar.min.js') }}"></script>
<script src="{{ asset('js/simplebar.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/scrollto.js') }}"></script>
<script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/progressbar.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/timepicker.js') }}"></script>
<script src="{{ asset('js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{ asset('js/script.js') }}"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:08 GMT -->
</html>