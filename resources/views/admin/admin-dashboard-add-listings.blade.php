@include('layouts.admin-header');
	<!-- Our Dashbord -->
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">Add Listing</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="new_property_form">
                <h4 class="title mb30">Additional</h4>
                <form  name="contact_form" action="{{route('add.listing')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb20">
                        <label class="form-label">Listing Title</label>
                        <input name="listing_title" value="{{ old('listing_title') }}" class="form-control form_control" type="text" placeholder="Title">
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('listing_title')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                      <label class="form-label">Type</label>
                         <select name="type" value="{{ old('type') }}" class="selectpicker" data-live-search="true" data-width="100%">
                             <option>Select</option>
                             <option data-tokens="Active">Active</option>
                             <option data-tokens="Pending">Inactive</option>
                         </select>
                      </div>
                    </div>
                </div> 
                <span class="text-danger">
                      @error('type')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
         <div class="ui_kit_select_search add_new_property mb20">
       <label class="form-label">Make</label>
          <select name="make" class="selectpicker" data-live-search="true" data-width="100%">
               <option>Select</option>
               <option data-tokens="Audi">Audi</option>
               <option data-tokens="Bentley">Bentley</option>
               <option data-tokens="BMW">BMW</option>
               <option data-tokens="Ford">Ford</option>
               <option data-tokens="Honda">Honda</option>
               <option data-tokens="Mercedes">Mercedes</option>
             </select>
             </div>
           </div>
           <span class="text-danger">
                      @error('make')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Model</label>
                        <select class="selectpicker" name="model" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Free">A3 Sportback</option>
                          <option data-tokens="PriceLevel2">A4</option>
                          <option data-tokens="PriceLevel3">A6</option>
                          <option data-tokens="PriceLevel4">Q5</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('model')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb20">
                        <label class="form-label">Price (USD)</label>
                        <input name="price" value="{{ old('price') }}" class="form-control form_control" value="{{ old('price') }}" type="text" placeholder="150 $">
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('price')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Drive Type</label>
                        <select class="selectpicker" name="drive_type" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Convertible">Convertible</option>
                          <option data-tokens="Coupe">Coupe</option>
                          <option data-tokens="Hatchback">Hatchback</option>
                          <option data-tokens="Sedan">Sedan</option>
                          <option data-tokens="SUV">SUV</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('drive_type')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Transmission</label>
                        <select class="selectpicker"  name="transmission" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Transmission">Transmission</option>
                          <option data-tokens="Autometic">Autometic</option>
                          <option data-tokens="Manual">Manual</option>
                          <option data-tokens="Semi-Autometic">Semi-Autometic</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('transmission')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Fuel Type</label>
                        <select class="selectpicker" name="fuel_type" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Fuel Type">Fuel Type</option>
                          <option data-tokens="Diesel">Diesel</option>
                          <option data-tokens="Electric">Electric</option>
                          <option data-tokens="Hybrid">Hybrid</option>
                          <option data-tokens="Petrol">Petrol</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('fuel_type')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="mb20">
                        <label class="form-label">Mileage</label>
                        <input name="mileage" value="{{ old('mileage') }}" class="form-control form_control" type="text" placeholder="100">
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('mileage')
                      {{$message}}
                      @enderror
                    </span>
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Color</label>
                        <select class="selectpicker" name="color" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="Black">Black</option>
                          <option data-tokens="Beige">Beige</option>
                          <option data-tokens="Brown">Brown</option>
                          <option data-tokens="Red">Red</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('color')
                      {{$message}}
                      @enderror
                    </span> 
                    <div class="col-sm-6 col-md-4">
                      <div class="ui_kit_select_search add_new_property mb20">
                        <label class="form-label">Seats</label>
                        <select class="selectpicker"  name="seats" data-live-search="true" data-width="100%">
                          <option>Select</option>
                          <option data-tokens="2 Doors">2 Seats</option>
                          <option data-tokens="3 Doors">3 Seats</option>
                          <option data-tokens="4 Doors">4 Seats</option>
                          <option data-tokens="5 Doors">5+ Seats</option>
                        </select>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('seats')
                      {{$message}}
                      @enderror
                    </span> 
                    <div class="col-md-12">
                      <div class="mb20">
                        <label class="form-label">Description</label>
                        <textarea name="description" value="{{ old('description') }}" class="form-control" rows="10" placeholder="Description"></textarea>
                      </div>
                    </div>
                    <span class="text-danger">
                      @error('description')
                      {{$message}}
                      @enderror
                    </span> 
                  </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Car Image</h4>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label">Car Image</label>
                    <ul class="mb0 mt10">
                      <li class="list-inline-item">
                        <div class="portfolio_item">
                          <img class="img-fluid" src="{{ asset('images/listing/a1.jpg') }}" alt="a1.jpg">
                          <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
                            <a href="#"><span>X</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-inline-item vat">
                        <div class="upload_file_input_add_remove style-right mb30-sm">
                          <span class="btn_upload">
                            <input type="file" name="image" class="input-img" placeholder="UPLOAD FILES"/>
                            <span>UPLOAD FILES</span>
                          </span>
                          <button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
                        </div>
                        <span class="text-danger">
                      @error('image')
                      {{$message}}
                      @enderror
                    </span> 
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
                    <div class="new_propertyform_btn">
                      <button type="submit" class="btn btn-thm ad_flor_btn">Add Listing</button>
                    </div>
              </div>
            </form>
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
<script src="{{ asset('js/jquery.smartuploader.js') }}"></script>
<script src="{{ asset('js/progressbar.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/timepicker.js') }}"></script>
<script src="{{ asset('js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages -->
<script src="{{ asset('js/script.js') }}"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-add-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:09 GMT -->
</html>