<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')<?php $pageName="funds"; ?>
</head>
<style>
.accordion .set {
		border-bottom: 1px solid #eeeeee;
	}
	
	.accordion .set > a {
		color: #555;
		display: block;
		font-size: 1.3em;
		font-weight: normal;
		padding: 10px 50px 10px 15px;
		position: relative;
		text-decoration: none;
		transition: all 0.2s linear 0s;
		cursor: pointer;
		background-color: rgba(255, 255, 255, 0.8);
		font-family: 'Kanit';
		margin: 20px 0px;
	}
	
	.accordion .set > a:focus {
		outline: 0;
	}
	
	.accordion .set > a.active {
		background-color: #f6f6f6;
		border-bottom: none;
		margin-left: calc(50% - 50vw);
		margin-right: calc(50% - 50vw);
		max-width: 1000%;
		width: auto;
		position: relative;
		padding: 1% 16%;
		margin-bottom: 0px;
		margin-top: 0px;
	}
	
	.accordion .set > a i {
		color: #379595;
		position: absolute;
		right: 15px;
		top: 50%;
		-webkit-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	
	.accordion .set > a.active i {
		color: #379595;
		padding: 1% 22%;
	}
	
	.accordion .content {
		background-color: #f6f6f6;
		display: none;
		margin-left: calc(50% - 50vw);
		margin-right: calc(50% - 50vw);
		max-width: 1000%;
		width: auto;
		position: relative;
		padding: 1% 16%;
	}
	
	.accordion .content p {
		color: dimgray;
		font-size: 1.1em;
		margin: 0;
		padding: 10px 20px 10px 15px;
	}
	.accordion .content p > img{
		width: 50px;
	}
	
	
			
	@media (max-width: 991px) {
		.accordion .set > a.active i{
			padding: 0%;
		}
	}
</style>
<body>
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
							<li class="breadcrumb-item active" aria-current="page">{{ trans('messages.trust') }}</li>
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
								<div class="bannertop_trust">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>ทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์ <br><span class="boldtext">  Real Estate Investment Trust (REIT)</span></h1> </div>
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
				<div class="row mt-5">
					<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="title_head1"> ทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์ <br><span class="bluetxt">Real Estate Investment Trust (REIT)</span> </div>
					</div>
				</div>
				<br>
				<br>
			</div>
			<div class="container-fluid nopad">
				<div class="row">
					<div class="col">
						<div class="container">
									<div class="row">
					<div class="col">
						<div class="accordion accordion-01">
										<div class="set"> <a>{{ trans('messages.trus1') }}<i class="fas fa-plus-circle"></i></a>
											<div class="content">
												<p> <img src="images/mutual_funds_03.png"> <a href="{{url('funds/reit')}}"> {{ trans('messages.trus_sub1') }}</a> </p>
											</div>
										</div>
										<div class="set"> <a>{{ trans('messages.trus2') }} <i class="fas fa-plus-circle"></i></a>
											<div class="content">
												<p><img src="images/mutual_funds_03.png"> <a href="{{url('funds/reit/manager')}}">{{ trans('messages.trus_sub2') }}</a> </p>
											</div>
										</div>
										@foreach ($trust as $v_trust)
											<div class="set">
												<a href="{{url('trust/detail/'.$v_trust->id)}}">{{$v_trust['name_'.$lang]}}</a>
											</div>
										@endforeach
											
										
										
									</div>
									<!-- /.accordion-01 -->
								</div>
						</div>
		
						</div>
					</div>
				</div>
			</div>
			<br><br>
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
				// accordion-01
				$(document).ready(function () {
					$(".accordion-01 .set > a").on("click", function () {
						if ($(this).hasClass('active')) {
							$(this).removeClass("active");
							$(this).siblings('.content').slideUp(200);
							$(".accordion-01 .set > a i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
						}
						else {
							$(".accordion-01 .set > a i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
							$(this).find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
							$(".accordion-01 .set > a").removeClass("active");
							$(this).addClass("active");
							$('.accordion-01 .content').slideUp(200);
							$(this).siblings('.content').slideDown(200);
						}
					});
				});
			</script>
</body>

</html>