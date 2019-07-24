<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')<?php $pageName="statusupdate"; ?>
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
		.title_head1 {
			text-align: left;
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
		<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.statusupdate')}}</li>
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
								<div class="bannertop_status">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>ติดตามสถานะตราสารหนี้ผิดนัดชำระ <br>ของกองทุน</h1> </div>
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
					<div class="title_head1"> ติดตามสถานะตราสารหนี้ผิดนัดชำระ <span class="bluetxt">ของกองทุน</span> </div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<div class="bggray alignfull mb-3">
						<div class="container">
							<div class="box_search">
								<form id="search" action="{{url('seachstatus')}}" method="get" >
									<div class="row">
										<div class="col-lg-3">
										</div>
										<div class="col-lg-6">
											<div class="search_funds">
												<label>เลือกตราสารหนี้</label>
												<select id="status" name="type" class="form-control" onchange="getFund(this)">
													@foreach ($debt_type as $_debt_type)
														@if ($_debt_type->sort_id == $debt['sort_id'])
															<option value="{{$_debt_type->sort_id}}" selected>{{$_debt_type->name_th}}</option>
														@else
															<option value="{{$_debt_type->sort_id}}">{{$_debt_type->name_th}}</option>
														@endif
													@endforeach
													
												</select>
											</div>
										</div>
										<div class="col-lg-3">
										</div>
										{{-- <div class="col-lg-5">
											<div class="search_funds">
												<label>เลือกวันที่ต้องการแสดงข้อมูล</label>
												<form action="example.php" method="post">
													<input autocomplete="off" class="datepicker form-control boxbox" name="date" id="date" placeholder="{{trans('messages.date_format')}}" /> </form>
											</div>
										</div>
										<div class="col-lg-2"> <button type="submit" class="btn btn-success">{{trans('messages.submit')}}</button> </div> --}}
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		@if (count($debt) > 0)
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="sec_title">
						<h4><span class="bluetxt">{{$debt['name_'.$lang]}}</span> 
					</h4> </div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
						
						<div class="row">
								<div class="col">
									
									<div class="downloaddetail">
											@foreach ($debt->Debt as $k_debt => $_debt)
												@php
													$date_create = $_debt->updated_at;
			
													$date_create_edit = explode('-', $date_create);
													
													$month = $date_create_edit[1];
													$year   = $date_create_edit[0] + 543;
													$day  = substr($date_create_edit[2], 0, 2);
												@endphp
												{{$day.'/'.$month.'/'.$year.'  '.$_debt['name_'.$lang]}}
												<a href="{{asset('uploads/'.$_debt->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
												<hr>
											@endforeach 
											
									</div>
								</div>
							</div>
					</div>
					
				</div>
			</div>
			@else
				<div class="row">
						<div class="col"><br/>
							<p class="warning-message">{{ trans('messages.data_not_found') }}</p>
						</div>
				</div>
			@endif
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
				$('.pagination-inner a').on('click', function () {
					$(this).siblings().removeClass('pagination-active');
					$(this).addClass('pagination-active');
				})
			</script>
			<script>
					function getFund(selectObject) {
							var status = selectObject.value;  
						
							
							if(status){
								window.location = "{{url("/status/select/")}}/"+status;
							}
							
						}
				</script>
				<script>
				$(document).ready(function () {
					$(function () {
						$('.datepicker').datepicker({
							dateFormat: 'dd/mm/yy'
							, showButtonPanel: false
							, changeMonth: false
							, changeYear: false
							, inline: true
						});
					});
					$.datepicker.regional['es'] = {
						closeText: 'Cerrar'
						, prevText: '<Ant'
						, nextText: 'Sig>'
						, currentText: 'Hoy'
						, monthNames: ['January', 'Februaly', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
						, monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
						, dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Sathurday']
						, dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat']
						, dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa']
						, weekHeader: 'Sm'
						, dateFormat: 'dd/mm/yy'
						, firstDay: 1
						, isRTL: false
						, showMonthAfterYear: false
						, yearSuffix: ''
					};
					$.datepicker.setDefaults($.datepicker.regional['es']);
				});
			</script>
</body>

</html>