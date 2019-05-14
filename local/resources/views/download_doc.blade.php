<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')
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
							<li class="breadcrumb-item active" aria-current="page">เอกสารเผยแพร่และประกาศบริษัท</li>
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
								<div class="bannertop_loaddoc">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>เอกสารเผยแพร่<span class="boldtext"> DOWNLOAD</span></h1> </div>
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
					<div class="title_head1"> เอกสารเผยแพร่ <span class="bluetxt">และประกาศบริษัท</span> </div>
				</div>
			</div>
			<br><br>
			<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
				<div class="row">
					<div class="col">
						<div class="box_download_doc">
							<div class="numberlist">
								01
							</div>
							<div class="detail_doc">
								รายงานรอบ 6 เดือนและรายงานรอบปี
							</div>
							<div class="btn_download">
								<a href="{{url('/downloadinside')}}" class="btn btn-primary">ดูรายละเอียด</a> 
							</div>
						</div>
						<div class="box_download_doc">
							<div class="numberlist">
								02
							</div>
							<div class="detail_doc">
								รายงานการลงทุนในตราสารหนี้
							</div>
							<div class="btn_download">
								<a href="{{url('/downloadinside')}}" class="btn btn-primary">ดูรายละเอียด</a> 
							</div>
						</div>
						<div class="box_download_doc">
							<div class="numberlist">
								03
							</div>
							<div class="detail_doc">
								รายงานการทำธุรกรรมต่างๆ
							</div>
							<div class="btn_download">
								<a href="{{url('/downloadinside')}}" class="btn btn-primary">ดูรายละเอียด</a> 
							</div>
						</div>
						<div class="box_download_doc">
							<div class="numberlist">
								04
							</div>
							<div class="detail_doc">
								การใช้สิทธิออกเสียงในที่ประชุม
							</div>
							<div class="btn_download">
								<a href="{{url('/downloadinside')}}" class="btn btn-primary">ดูรายละเอียด</a> 
							</div>
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
</body>

</html>