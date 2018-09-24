@extends('master')
@section('content')

	<div id="fh5co-page">
	
	<div class="aside-toggle btn-circle">
		<a href="#"><span></span><em>About</em></a>
	</div>
	<div class="back-to-home btn-circle">
		<a href="{{ url('home') }}"><span></span><em>Back</em></a>
	</div>

	<div id="fh5co-aside">
		<div class="image-bg"></div>
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-12">
				<div id="fh5co-aside-inner">
					<div class="row" id="fh5co-bio">
						<div class="row">
							<div class="col-md-3">
								<img src="assets/master/images/icon.jpeg" height="130px" width="140px">
							</div>
							<br>
							<div class="col-md-9">
								<h2>Sekilas Tentang <br> Toko Emas Hanafi Jaya</h2>
							</div>
						</div>
						<br>
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-md-12 fh5co-social">
							<a href="#"><i class="icon-envelope"></i></a>
							<a href="#"><i class="icon-twitter"></i></a>
							<a href="#"><i class="icon-linkedin"></i></a>
							<a href="#"><i class="icon-instagram"></i></a>
							<a href="#"><i class="icon-google-plus"></i></a>
						</div>
<div class="col-md-12" style="margin-top: 40px;">
	<p>&copy; 2018 ZHD All Rights Reserved. Designed by <a href="http://gettemplates.co/">GetTemplates.co</a></p>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="fh5co-image-grid">
		

		<div class="grid">
		  <div class="grid-sizer"></div>

		  <div class="grid-item item animate-box" data-animate-effect="fadeIn">
		  	<a href="assets/master/images/emasbatangan/1.jpeg" class="image-popup" title="Name of photo or title here">
					<div class="img-wrap">
						<img src="assets/master/images/emasbatangan/1.jpeg" alt="" class="img-responsive">
					</div>
					<div class="text-wrap">
						<div class="text-inner popup">
							<div>
								<h2>Name of photo or title here</h2>
							</div>
						</div>
					</div>
				</a>
		  </div>
		  <div class="grid-item item animate-box" data-animate-effect="fadeIn">
		  	<a href="assets/master/images/emasbatangan/2.jpeg" class="image-popup" title="Name of photo or title here">
					<div class="img-wrap">
						<img src="assets/master/images/emasbatangan/2.jpeg" alt="" class="img-responsive">
					</div>
					<div class="text-wrap">
						<div class="text-inner popup">
							<div>
								<h2>Name of photo or title here</h2>
							</div>
						</div>
					</div>
				</a>
		  </div>
		  

		</div>

		
	</div>

	</div>
@endsection