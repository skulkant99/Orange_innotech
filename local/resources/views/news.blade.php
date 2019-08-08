<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

	@include('inc_header')<?php $pageName="news"; ?>

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
		.tagnew{
            background-color: #eb6b2f;
            display: inline-block;
            color: white;
            padding: 4px 20px;
            letter-spacing: 1px;
            font-size: 0.8em;
            font-weight: bold;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            }
        .box_nav{
            position: relative;
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

						<li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>

							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.news')}}</li>

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

												<h1>ข้อมูลข่าวสาร <span class="boldtext">UPDATE</span></h1> </div>

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

					<div class="title_head1"><span class="bluetxt">INNOTECH</span> UPDATE

						<p>{{ trans('messages.news_head') }}</p>

					</div>

				</div>

			</div>

			<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">

				<div class="row mt-3 mb-5">

					@foreach ($information as $_information => $value_information)

						<div class="col-md-3">

								<div class="box_nav">

									<div class="pic_nav">
										@if ($value_information->active == 1)
											<div class="tagnew">NEW</div>	
										@endif

										<div class="hov-menu-sty2">

											<figure>
												@php
													$photo = json_decode($value_information->photo, true)
												@endphp
												@if(isset($photo) && $photo)
													<a href="{{url('newsinside/'.$value_information->id)}}"><img src="{{asset('uploads/Information/'.$photo[0])}}" class="img-fluid"> </a>
												@endif

											</figure>

										</div>

									</div>
									
									<div class="inno_details">{{($information[$_information]['title_'.$lang])}}</div> 
									
									@if ($value_information->status_pdf != 1)
										<a href="{{url('newsinside/'.$value_information->id)}}" class="readmore">{{trans('messages.read_more')}}</a> 
									@else
										<a href="{{url('uploads/'.$value_information->file)}}" target="_blank" class="readmore">{{trans('messages.read_more')}}</a> 												
									@endif
								</div>

							</div>

					@endforeach

				

					{{-- <div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div>

					<div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update4.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div>

					<div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update3.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div>

					<div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update2.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div>

					<div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update4.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div>

					<div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update3.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div>

					<div class="col-md-3">

						<div class="box_nav">

							<div class="pic_nav">

								<div class="hov-menu-sty2">

									<figure>

										<a href="#"><img src="images/inno_update2.png" class="img-fluid"> </a>

									</figure>

								</div>

							</div>

							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>

					</div> --}}

				</div>

			</div>

			<div class="row mt-5 mb-5 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.1s">

						<div class="col">

							<div class="pagination_bot">

								<nav class="pagination-container">

									<div class="pagination">

											{{ $information->links() }}

										{{-- <a class="pagination-newer" href="#"><i class="fas fa-angle-left"></i></a>

										<span class="pagination-inner">

											<a href="#">1</a>

											<a class="pagination-active" href="#">2</a>

											<a href="#">3</a>

											<a href="#">4</a>

											<a href="#">5</a>

										</span>

										<a class="pagination-older" href="#"><i class="fas fa-angle-right"></i></a> --}}

									</div>

								</nav>

							</div>

						</div>

					</div>

			</div>

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