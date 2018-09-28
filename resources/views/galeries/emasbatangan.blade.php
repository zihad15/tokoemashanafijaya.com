@extends('master')
@section('content')

	<div id="fh5co-page">
	
	<div class="back-to-home btn-circle">
		<a href="{{ url('home') }}"><span></span><em>Back</em></a>
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