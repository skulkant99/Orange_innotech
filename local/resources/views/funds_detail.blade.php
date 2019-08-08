<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="funds"; ?>
</head>

<body>
	<style>
	
		.funds_table{
			text-align: left;
		}
		.funds_table thead tr th{
			text-align: center;
		}
		.funds_table.table-bordered th, .funds_table.table-bordered td{
			border:1px solid #464646;
		}

		.title_head1 {
			text-align: left;
		}
		
		.funds_table_perf {
			background-color: #f9f9f9;
			color: black;
		}
		
		.funds_table_perf thead {
			font-size: 1.3em;
			font-family: 'Kanit';
		}
		
		.funds_table_perf thead th {
			border-left: none;
			border-right: none;
		}
		
		.funds_table_perf .setheigh {
			height: 200px;
			font-family: 'Kanit';
		}
		
		.btn-primary {
			border-radius: 50px;
			padding: 10px 30px;
		}
		@media (max-width: 1366px) {
			.wrap_parallax {
			height: 60vh;
			}
			.bannertxt_top{
				width: 70%;
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
							<li class="breadcrumb-item"><a href="{{url('/mutualfunds')}}">{{ trans('messages.mutualfunds') }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{$sub_fund['name_'.$lang]}}
</li>
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
								<div class="bannertop_funds_detail">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>{{$sub_fund['name_'.$lang]}}
													<br><span class="boldtext"> {{$sub_fund->name_en}}</span></h1> </div>
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
						<div class="pic_icon"> <img src="{{asset('images/funds_price_detail_05.png')}}"> </div>
						<div class="righttext">
							<div class="title_head1"> {{$sub_fund['name_'.$lang]}}
								<br> <span class="bluetxt">{{$sub_fund->name_en}}</span> </div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col">
						<div class="detail_content">
							@foreach ($fund_detail as $k_fund_detail => $v_fund_detail)
								@if ($v_fund_detail->sort_id <= 3)
									<h2>{{$v_fund_detail['title_'.$lang]}}</h2>
										{!!($v_fund_detail['detail_'.$lang])!!}
									<br>
									<br>
								@elseif ($v_fund_detail->sort_id == 4)
									
									<h2><img src="{{asset('images/funds_price_detail_08.png')}}">{{$v_fund_detail['title_'.$lang]}}</h2>
									{!!($v_fund_detail['detail_'.$lang])!!}
								@endif
								
							@endforeach

						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid nopad">
				<div class="row">
					<div class="col">
						<div class="bggray">
						
						 <div class="container">
						 	<div class="row">
						 		<div class="col">
										@foreach ($fund_detail as $k_fund_detail => $v_fund_detail)
											@if ($v_fund_detail->sort_id == 5)
												{!!($v_fund_detail['detail_'.$lang])!!}
											@elseif($v_fund_detail->sort_id == 6)
												{!!($v_fund_detail['detail_'.$lang])!!}
											@endif
										@endforeach

							
						 		</div>
						 	</div>
						 </div>
						  </div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row mt-5">
					<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="detail_content">
							<h2><img src="{{asset('images/funds_price_detail_12.png')}}"> {{ trans('messages.fund_documents') }} ({{ trans('messages.download') }})</h2> 
							<div class="list_download_ep">
								@foreach ($fund_detail as $k_fund_detail => $v_fund_detail)
									@if ($v_fund_detail->sort_id == 7)
										<a href="{{asset('uploads/'.$v_fund_detail->file)}}" class="btn btn-primary" target="_blank">{{$v_fund_detail['title_'.$lang]}} <i class="far fa-file-alt"></i></a>
									@elseif($v_fund_detail->sort_id == 8)
										<a href="{{asset('uploads/'.$v_fund_detail->file)}}" class="btn btn-primary" target="_blank">{{$v_fund_detail['title_'.$lang]}}  <i class="far fa-file-alt"></i></a>
									@elseif($v_fund_detail->sort_id == 9)
										<a href="{{asset('uploads/'.$v_fund_detail->file)}}" class="btn btn-primary" target="_blank">{{$v_fund_detail['title_'.$lang]}}  <i class="far fa-file-alt"></i></a>
									@elseif($v_fund_detail->sort_id == 10)
										<a href="{{asset('uploads/'.$v_fund_detail->file)}}" class="btn btn-primary" target="_blank">{{$v_fund_detail['title_'.$lang]}}  <i class="far fa-file-alt"></i></a>
									@endif

								@endforeach
								<br><br><br>
							</div>
					</div>
				</div>
				<br>
				<br> </div>
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