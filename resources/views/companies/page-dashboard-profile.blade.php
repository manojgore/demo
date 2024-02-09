@include('layouts.company-header')
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">Company Profile</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="new_property_form mb30">
                <h4 class="title mb30">Account Details</h4>
                <div class="dp_user_thumb_content">
                  <div class="wrap-custom-file mb25">
                    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png">
                    <label for="image1">
                      <span>&nbsp;&nbsp;Browse</span>
                    </label>
                    <small class="file_title">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</small>
                  </div>
                </div>
                <form action="#" method="POST">
                  @csrf
                 @method('PUT')
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="row">
                        <div class="col-sm-6 col-lg-7">
                          <div class="mb20">
                            @foreach ($companies as $company)
                            <h4>Name: {{ $company->name }}</h4> 
                            @endforeach

                            <input name="name"  class="form-control form_control" type="text" placeholder="name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-7">
                          <div class="mb20">
                            <h4>Name:</h4>
                            <input name="cname"  class="form-control form_control" type="text" placeholder="company name">
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-7">
                          <div class="mb20">
                            <h4>Phone: </h4>
                            <input name="phone"  class="form-control form_control" type="text" placeholder="phone">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <h4>Email: </h4>
                            <input name="email"  class="form-control form_control" type="text" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <h4>City: </h4>
                            <input name="city"  class="form-control form_control" type="text" placeholder="city">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="new_propertyform_btn">
                            <button type="submit" class="btn btn-thm ad_flor_btn">EDIT</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Change Password</h4>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Old Password">
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control" type="text" placeholder="New Password">
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control mb20" type="text" placeholder="Re-enter New Password">
                      <a href="#" class="btn btn-thm ad_flor_btn">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="row">
                      <div class="col-lg-12">
                        <h4 class="title mb30">Your Social Networks</h4>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control" type="text" placeholder="Facebook">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control" type="text" placeholder="Twitter">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control" type="text" placeholder="Linked In">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb20">
                          <input name="form_name" class="form-control form_control mb20" type="text" placeholder="Youtube">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-thm ad_flor_btn">Save</a>
                      </div>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Gallery</h4>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label">Featured Image</label>
                    <ul class="mb0 mt10">
                      <li class="list-inline-item">
                        <div class="portfolio_item">
                          <img class="img-fluid" src="images/listing/a3.jpg" alt="a3.jpg">
                          <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete">
                            <a href="#"><span>X</span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-inline-item vat">
                        <div class="upload_file_input_add_remove style-right mb30-sm">
                          <span class="btn_upload">
                            <input type="file" id="imag3" title="" class="input-img" placeholder="UPLOAD FILES"/>
                            <span class="">UPLOAD FILES</span>
                          </span>
                          <img id="ImgPreview3" src="#" class="preview3" alt=""/>
                          <button id="removeImage3" class="btn-rmv3" type="button"><span>X</span></button>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="form-label">Video - copy any online video link e.g. YouTube, Facebook, Instagram or .mp4</label>
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Video Link">
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
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{ asset('js/script.js') }}"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:08 GMT -->
</html>