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
						<li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
							<li class="breadcrumb-item active" aria-current="page">ข้อมูลข่าวสาร</li>
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
						<p>ข่าวสารความเคลื่อนไหวต่างๆ ของเรา</p>
					</div>
				</div>
			</div>
			<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
				<div class="row mt-3 mb-5">
					@foreach ($information as $_information)
						<div class="col-md-3">
								<div class="box_nav">
									<div class="pic_nav">
										<div class="hov-menu-sty2">
											<figure>
												<a href="{{$_information->id}}"><img src="{{asset('uploads/Information/'.$_information->photo)}}" class="img-fluid"> </a>
											</figure>
										</div>
									</div>
								<div class="inno_details"><?php echo '<p>'.$_information->detail_th.'</p>' ?></div> <a href="{{$_information->id}}" class="readmore">เพิ่มเติม</a> </div>
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