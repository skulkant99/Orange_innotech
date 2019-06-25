<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><?php $pageName="calendar"; ?>

<head>
	@include('inc_header')
</head>

<body>
	<style>
		.btn-success {
			margin-top: 20px;
		}
		
		.box_download_doc {
			padding: 20px;
		}
		
		.btn_download {
			text-align: right;
			margin-top: -30px;
			margin-bottom: 0px;
			margin-right: 0px;
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
							<li class="breadcrumb-item"><a href="#">{{trans('messages.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.calendar')}}</li>
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
								<div class="bannertop_calendar">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>ปฎิทินกิจกรรม</h1> </div>
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
					<div class="title_head1"> ปฎิทินกิจกรรม <span class="bluetxt">INNOTECH</span> </div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<main>
			<div class="container-fluid nopad">
				<div class="row">
					<div class="col">
						<div class="container">
							<div class="row">
								@foreach ($calendar as $k_calendar => $v_calendar)
									@php
											$date_create = substr($v_calendar->start_at,0,-8);

											$time_start = substr($v_calendar->start_at,13);
											$time_end = substr($v_calendar->end_at,13);

											$date_create_edit = explode('-', $date_create);
											$month = $date_create_edit[1];
											$year   = $date_create_edit[2] + 543;
											$day  = $date_create_edit[0];
						
											switch ($month) {
												case '01':
													$month = "มกราคม";
													break;
												case '02':
													$month = "กุมภาพันธ์";
													break;
												case '03':
													$month = "มีนาคม";
													break;
												case '04':
													$month = "เมษายน";
													break;
												case '05':
													$month = "พฤษภาคม";
													break;
												case '06':
													$month = "มิถุนายน";
													break;
												case '07':
													$month = "กรกฎาคม";
													break;
												case '08':
													$month = "สิงหาคม";
													break;
												case '09':
													$month = "กันยายน";
													break;
												case '10':
													$month = "ตุลาคม";
													break;
												case '11':
													$month = "พฤศจิกายน";
													break;
												case '12':
													$month = "ธันวาคม";
													break;
												default:
													# code...
													break;
											}
									@endphp
									@if($v_calendar->status == 1)
									<div class="col-lg-3">
											<div class="box_calendar">
												<div class="row no-gutters">
													<div class="col">
														<div class="bg_ca">
															<div class="row">
																<div class="col">
																	<h2>{{$day}}</h2> </div>
																<div class="col"> <span class="month_yr">{{$month}} {{$year}}</span> </div>
															</div>
														</div>
														@if($v_calendar->type == "M")
															<div class="bg_member"> ({{trans('messages.member')}}) </div>
														@else
															<div class="bg_member"> ({{trans('messages.no_member')}}) </div>
														@endif
														
													</div>
												</div>
												<div class="row">
													<div class="col">
														<div class="box_right_calen">
															<h3>{{($calendar[$k_calendar]['name_'.$lang])}}</h3>
															<p><i class="fas fa-clock"></i> {{$time_start}} - {{$time_end}}
																<br><i class="fas fa-map-marker-alt"></i> {{($calendar[$k_calendar]['location_'.$lang])}}
																<br><i class="fas fa-user-friends"></i> จำนวนที่นั่ง : {{$v_calendar->seat}} ที่นั่ง </p>
														</div>
													</div>
												</div>
											</div>
										</div>
										@else
										@endif
								@endforeach		
							</div>
						</div>
					</div>
				</div>
				<br><br>
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
				$('.pagination-inner a').on('click', function () {
					$(this).siblings().removeClass('pagination-active');
					$(this).addClass('pagination-active');
				})
			</script>
</body>

</html>