<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')<?php $pageName="economic"; ?>
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
	@include('inc_topmenu')
		<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.economic')}}</li>
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
								<div class="bannertop_eco">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>{{trans('messages.economic')}}</h1> </div>
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
					<div class="title_head1"> {{trans('messages.economic')}} <span class="bluetxt">INNOTECH</span> </div>
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
								<div class="row">
									<div class="col-lg-5">
										<div class="search_funds">
											<label>{{trans('messages.search')}}</label>
											<select id="selectbasic" name="selectbasic" class="form-control">
												<option value="1">กองทุนตลาดเงิน</option>
												<option value="2">กองทุน LTF</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="search_funds">
											<label>{{trans('messages.keyword')}}</label>
											<input id="textinput" name="textinput" type="text" class="form-control input-md" placeholder="Keyword"> </div>
									</div>
									<div class="col-lg-2"> <a href="#" class="btn btn-success">{{trans('messages.submit')}}</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
						<div class="row">
							<div class="col">
								@foreach ($economics as $_economics)
									<div class="box_download_doc">
										<div class="detail_doc"> {{$_economics->name}} </div>
										<div class="btn_download"> <a href="{{url('uploads/'.$_economics->file)}}" target="_blank" class="btn btn-primary">{{trans('messages.download')}} <i class="fas fa-download"></i></a> </div>
									</div>
								@endforeach
								
								{{-- <div class="box_download_doc">
									<div class="detail_doc"> กองทุน </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div>
								<div class="box_download_doc">
									<div class="detail_doc"> กองทุน </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div>
								<div class="box_download_doc">
									<div class="detail_doc"> กองทุน </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div> --}}
							</div>
						</div>
					</div>
					<div class="row mt-5 mb-5 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.1s">
						<div class="col">
							<div class="pagination_bot">
								<nav class="pagination-container">
									{{$economics->links()}}
									{{-- <div class="pagination"> <a class="pagination-newer" href="#"><i class="fas fa-angle-left"></i></a> <span class="pagination-inner">
											<a href="#">1</a>
											<a class="pagination-active" href="#">2</a>
											<a href="#">3</a>
											<a href="#">4</a>
											<a href="#">5</a>
										</span> <a class="pagination-older" href="#"><i class="fas fa-angle-right"></i></a> </div> --}}
								</nav>
							</div>
						</div>
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
				$('.pagination-inner a').on('click', function () {
					$(this).siblings().removeClass('pagination-active');
					$(this).addClass('pagination-active');
				})
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