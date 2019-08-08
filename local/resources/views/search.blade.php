<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

	@include('inc_header')<?php $pageName="search"; ?>

</head>



<body>

	<style>

		.wrap_parallax {

			position: relative;

			height: 30vh;

			overflow: hidden;

			display: flex;

			justify-content: center;

			align-items: center;

		}
		.page-item.active .page-link {
			z-index: 1;
			color: #fff;
			background-color: #379595;
			border-color: #379595;
		}
		.page-link {
			position: relative;
			display: block;
			padding: 0.4rem 0.75rem;
			margin-left: -1px;
			line-height: 1.25;
			color: #007bff;
			background-color: #fff;
			border: 1px solid #dee2e6;
		}
		p.warning-message {
			text-align: center;
			font-style: italic;
			margin-bottom: 60px;
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


		</section>

		<div class="container-fluid nopad">

				<div class="row">
	
					<div class="col">
	
						<nav aria-label="breadcrumb">
	
							<ol class="breadcrumb">
	
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
									<li class="breadcrumb-item active" aria-current="page">{{trans('messages.search')}}</li>
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
	
									<div class="bannertop_news">
	
										<div class="container">
	
											<div class="row">
	
												<div class="col">
	
												<div class="bannertxt_top">
	
													<h5>INNOTECH</h5>
	
													<h1>ผลการค้นหา <span class="boldtext">SEARCH</span></h1> </div>
	
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
	
			<div class="container">
	
				<div class="row mt-5">
	
					<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
	
						<div class="title_head1"><span class="bluetxt">INNOTECH</span> SEARCH
	
							<p>ผลการค้นหา</p>
	
						</div>
	
					</div>
	
				</div>
				@if (count($news) > 0)
					<h1><span class="boldtext">{{ trans('messages.knowledge') }}</span> ({{count($news)}} {{ trans('messages.list') }}</h1>
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
		
						<div class="row mt-3 mb-5">
							@foreach ($news as $k_news => $v_news)
								<div class="col-md-3">

									<div class="box_nav ">

										<div class="pic_nav">

											<div class="hov-menu-sty2">

												<figure>
													@php
														$photo = json_decode($v_news->photo, true)
													@endphp
													@if(isset($photo) && $photo)
														<a href="{{url('newsinside/'.$v_news->id)}}"><img src="{{asset('uploads/News/'.$photo[0])}}" class="img-fluid"> </a>
													@endif

												</figure>

											</div>

										</div>
										
										<div class="inno_details">{{($news[$k_news]['title_'.$lang])}}</div> 
										<a href="{{url('newsinside/'.$v_news->id)}}" class="readmore">{{trans('messages.read_more')}}</a> 
									</div>

								</div>
							@endforeach
							
		
						</div>
		
					</div>
				@endif
				@if (count($fileform) > 0)
					<h1><span class="boldtext">{{ trans('messages.form') }}</span> ({{count($fileform)}} {{ trans('messages.list') }})</h1>
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
							<div class="row mt-3 mb-5">
									@foreach ($fileform as $k_fileform => $v_fileform)
									<div class="col-md-3">

											<div class="box_nav">	
												<div class="inno_details">{{($v_fileform['name_'.$lang])}}</div> 
												<a href="{{url('downloadform')}}" class="readmore">{{trans('messages.read_more')}}</a> 
											</div>
			
										</div>
									@endforeach
							</div>
					</div>
					
				@endif
				@if (count($filetype) > 0)
					<h1><span class="boldtext">{{ trans('messages.report') }}</span> ({{count($filetype)}} {{ trans('messages.list') }})</h1>
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
							<div class="row mt-3 mb-5">
									@foreach ($filetype as $k_filetype => $v_filetype)
										<div class="col-md-3">
											<div class="box_nav gallery">	
												<div class="inno_details">{{($v_filetype['name_'.$lang])}}</div> 
												<a href="{{url('downloadreport')}}" class="readmore">{{trans('messages.read_more')}}</a> 
											</div>
										</div>
									@endforeach
							</div>
					</div>
				
				@endif
				@if (count($fund) > 0)
					<h1><span class="boldtext">{{ trans('messages.nav_as_of') }}</span> ({{count($fund)}} {{ trans('messages.list') }})</h1>
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
							<div class="row mt-3 mb-5">
									@foreach ($fund as $k_fund => $v_fund)
										<div class="col-md-3">
											<div class="box_nav gallery">	
												<div class="inno_details">{{($v_fund['name_'.$lang])}}</div> 
												<a href="{{url('mutualfunds/detail/'.$v_fund->id)}}" class="readmore">{{trans('messages.read_more')}}</a> 
											</div>
										</div>
									@endforeach
							</div>
					</div>
					
				@endif
				@if (count($news) == 0 && count($fileform) == 0 && count($filetype) == 0)
					<div class="row">
						<div class="col"><br/>
							<p class="warning-message">{{ trans('messages.result_search') }}</p>
						</div>
					</div>
				@endif
					
				</div>
	
			<main> </main>
	

		<main> </main>

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