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
	</style>
	@include('inc_topmenu')
		<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
							<li class="breadcrumb-item active" aria-current="page">ติดตามสถานะตราสารหนี้ผิดชำระของกองทุน</li>
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
								<div class="row">
									<div class="col-lg-5">
										<div class="search_funds">
											<label>เลือกตราสารหนี้</label>
											<select id="selectbasic" name="selectbasic" class="form-control">
												<option value="1">รายงานสถานะตราสารหนี้ EARTH</option>
												<option value="2">กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="search_funds">
											<label>เลือกวันที่ต้องการแสดงข้อมูล</label>
											<form action="example.php" method="post">
												<input autocomplete="off" class="datepicker form-control boxbox" placeholder="DD/MM/YY" /> </form>
										</div>
									</div>
									<div class="col-lg-2"> <a href="#" class="btn btn-success">ตกลง</a> </div>
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
					<div class="sec_title">
						<h4>รายงานสถานะตราสารหนี้ <span class="bluetxt">EARTH</span>
</h4> </div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
						<div class="row">
							<div class="col">
								<div class="box_download_doc">
									<div class="numberlist"> 01 </div>
									<div class="detail_doc"> รายงานตราสารหนี้ที่ผิดนัดชำระ (EARTH) ประจำเดือน มีนาคม 2562 </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div>
								<div class="box_download_doc">
									<div class="numberlist"> 02 </div>
									<div class="detail_doc"> รายงานตราสารหนี้ที่ผิดนัดชำระ (EARTH) ประจำเดือน กุมภาพันธ์ 2562 </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div>
								<div class="box_download_doc">
									<div class="numberlist"> 03 </div>
									<div class="detail_doc"> รายงานตราสารหนี้ที่ผิดนัดชำระ (EARTH) ประจำเดือน มกราคม 2562 </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div>
								<div class="box_download_doc">
									<div class="numberlist"> 04 </div>
									<div class="detail_doc"> รายงานตราสารหนี้ที่ผิดนัดชำระ (EARTH) ประจำเดือน ธันวาคม 2561 </div>
									<div class="btn_download"> <a href="download_doc_inside.php" class="btn btn-primary">ดาวน์โหลด <i class="fas fa-download"></i></a> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-5 mb-5 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.1s">
						<div class="col">
							<div class="pagination_bot">
								<nav class="pagination-container">
									<div class="pagination"> <a class="pagination-newer" href="#"><i class="fas fa-angle-left"></i></a> <span class="pagination-inner">
											<a href="#">1</a>
											<a class="pagination-active" href="#">2</a>
											<a href="#">3</a>
											<a href="#">4</a>
											<a href="#">5</a>
										</span> <a class="pagination-older" href="#"><i class="fas fa-angle-right"></i></a> </div>
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