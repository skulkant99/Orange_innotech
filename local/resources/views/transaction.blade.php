<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="trans"; ?>
</head>

<body>
		<style>
				.detail_acc {
					font-size: 1.1em;
				}
		
				.pictrans {
					text-align: center;
				}
				.pictrans2{
					margin-top: 8em;
					text-align: center;
				}
		
				@media (max-width: 767px) {
					.pictrans{
						margin-bottom: 20px;
					}
					.pictrans2{
						margin-top: 0em;
					}
					.btn-light,
					.btn-danger{
						width: 100%;
						margin-bottom: 10px;
						margin-left: 0px;
					}
				}
				
				
			</style>
		@php
			$lang = "";
			if (session()->get('locale') == null){
				$lang = "th";
			}elseif (session()->get('locale') == "th") {
				$lang = "th";
			}elseif(session()->get('locale') == "en"){
				$lang = "en";
			}		
		@endphp
	@include('inc_topmenu')
	<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{ trans('messages.home') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ trans('messages.tran') }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<section class="wrap_parallax">
			<div class="overlay">
				<div class="parallax">
					<div class="container-fluid nopad">
						<div class="row">
							<div class="col">
								<div class="bannertop_trans">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>{{ trans('messages.tran') }} <span class="boldtext"> INNOTECT</span></h1>
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
		<main>
			<div class="container">
				<div class="row mt-5 mb-5">
					<div class="col">
						<div class="detail_acc">
							<div class="row">
								<div class="col-12 col-md-3 col-lg-3 col-xl-1">
									<div class="pictrans">
									<img src="{{asset('images/transaction_03.png')}}" class="img-fluid">
									</div>
								</div>
								<div class="col-md-9 col-lg-9 col-xl-11">
									<h2><b>Streaming for Fund</b></h2>
									<p>{{ trans('messages.tran_title1') }}</p>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-12 col-xl-8 offset-xl-2 ">
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="row">
												<div class="col-md-6 col-lg-6 col-xl-5">
													<div class="pictrans">
														<img src="{{asset('images/transaction1_03.png')}}">
													</div>
												</div>
												<div class="col-md-6 col-lg-6 col-xl-7">
													<div class="pictrans2">
														<img src="{{asset('images/transaction1_07.png')}}"> <br>
														<img src="{{asset('images/transaction1_13.png')}}">
	
													</div>
												</div>
											</div>
	
	
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="row">
											  <div class="col-md-6 col-lg-6 col-xl-5">
													<div class="pictrans">
														<img src="{{asset('images/transaction_035.png')}}">
													</div>
												</div>
												<div class="col-md-6 col-lg-6 col-xl-7">
													<div class="pictrans2">
														<img src="{{asset('images/transaction1_09.png')}}"> <br>
														<img src="{{asset('images/transaction1_15.png')}}">
	
													</div>
												</div>
											</div>
										</div>
	
									</div>
								</div>
							</div>
	
							<br><br>
	
							{!! trans('messages.tran_detail') !!}

							<div class="btn_regis">
								<a href="https://apps.apple.com/th/app/streaming-for-iphone/id327221811" target="_blank" class="btn btn-danger">{{ trans('messages.tran_footer1') }}</a>
								<a href="https://play.google.com/store/apps/details?id=com.settrade.streaming.fund" target="_blank" class="btn btn-light">{{ trans('messages.tran_footer2') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
 
		@include('inc_footer')
			<script>
				// for heading
				$(window).scroll(function () {
					const a = $(this).scrollTop()
						, b = 800;
					$("h1").css({
						backgroundPosition: "center " + a / 2 + "px"
					});
					$(".parallax").css({
						top: a / 1.6 + "px"
						, opacity: 2 - a / b
					});
				});
			</script>
			<script>
			$('.pagination-inner a').on('click', function() {
		$(this).siblings().removeClass('pagination-active');
		$(this).addClass('pagination-active');
})
		</script>
</body>

</html>