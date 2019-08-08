<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')<?php $pageName="knowledge"; ?>
</head>

<body>
	<style>
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
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.knowledge')}}</li>
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
								<div class="bannertop_knowledge">
									<div class="container">
										<div class="row">
											<div class="col">
											<div class="bannertxt_top">
												<h5>INNOTECH</h5>
												<h1>{{ trans('messages.knowledge') }} <span class="boldtext">Knowledge</span></h1> </div>
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
					<div class="title_head1"><span class="bluetxt">INNOTECH</span> KNOWLEDGE
						<p>{{ trans('messages.knowledge') }}</p>
					</div>
				</div>
			</div>
			<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
				<div class="row mt-3 mb-5">
					@foreach ($knowledge as $k_knowledge => $v_knowledge)
						<div class="col-md-3">
							<div class="box_nav">
								<div class="pic_nav">
									<div class="hov-menu-sty2">
										<figure>
											@php
												$photo = json_decode($v_knowledge->photo, true)
											@endphp
											@if(isset($photo) && $photo)
												<a href="#"><img src="{{asset('uploads/News/'.$photo[0])}}" class="img-fluid"> </a>
											@endif
										</figure>
									</div>
								</div>
								<div class="inno_details"> {{($knowledge[$k_knowledge]['title_'.$lang])}} </div> <a href="{{url('/knowledge/inside/'.$v_knowledge->id)}}" class="readmore">{{trans('messages.read_more')}}</a> 
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
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
							<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="{{url('/knowledge/inside')}}" class="readmore">เพิ่มเติม</a> </div>
					</div> --}}
				</div>
			</div>
			<div class="row mt-5 mb-5 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.1s">
						<div class="col">
							<div class="pagination_bot">
								<nav class="pagination-container">
									<div class="pagination">
										{{($knowledge->links())}}
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