
@include('layouts.admin-header');
      
         @section('content')
         <div class="card p-4 rounded-5 mb25">
            <h4>Customers</h4>
        
            <table class="table de-table">
                <thead>
                    <tr>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">ID</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Name</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Email</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Created At</span></th>
                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Status</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><div class="badge rounded-pill bg-success">Signup</div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-custome.js"></script>
<script src="js/snackbar.min.js"></script>
<script src="js/simplebar.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scrollto.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/slider.js"></script>
<script src="js/timepicker.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 11:44:07 GMT -->
</html>