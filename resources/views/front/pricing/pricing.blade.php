@extends('front.master')

@section('body')
	<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
		<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
			<h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-top: 150px">{{ $packageTitle->title }}</h3>
			<div class="row agile-service-grid pt-lg-4 pt-md-4 pt-3">
				<div class="col-md-12 col-lg-12 col-sm-12 col-4">
					<div class="made_life_inner">

						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="price_inner row">
									@foreach($packages as $package)
										<div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
											<div class="price_item">
												<div class="price_head">
													<h3>{{ $package->title }}</h3>
												</div>
												<div class="price_body">
													<ul class="list">
														{!! $package->des !!}
													</ul>
												</div>
												<div class="price_footer">
													<!-- <h6>from<span class="dlr" style="font: 20px 'Open Sans'"> $11</span> <span class="month">/yr <br /></span></h6> -->
													<a class="btn text-white abc" href="#">{{ $package->btn }}</a>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection