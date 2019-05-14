<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="contact"; ?>
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
		
		.btn_first {
			padding-right: 0px;
		}
	</style>
	@include('inc_topmenu')
		<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
							<li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
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
								<div class="bannertop_contact">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>ติดต่อเรา<span class="boldtext"> CONTACT</span></h1> </div>
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
			<div class="container mt-5 mb-5">
				<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<div class="row">
						<div class="col-12 col-md-6"> 
						<div class="title_head3 wow fadeInUp"> <span class="bluetxt">CONTACT </span> </div>
						<div class="contactaddress">
							<h3>ท่านสามารถติดต่อเราได้ที่</h3>
							<h1>บริษัทหลักทรัพย์จัดการกองทุน โซลาริส จำกัด</h1>
							<p>ชั้น 8 อาคารลิเบอร์ตี้ สแควร์ เลขที่ 287 ถ.สีลม <br>
แขวงสีลม เขตบางรัก กรุงเทพฯ 10500</p>
						</div>
						
						
						</div>
						<div class="col-12 col-md-6"> 
							<div class="googlemap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6014016652352!2d100.58535702355938!3d13.742565639946354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e4fe0372607%3A0xb9728f4227f24a0c!2z4Lit4Liy4LiE4Liy4Lij4Lil4Li04LmA4Lia4Lit4Lij4LmM4LiV4Li14LmJIOC4nuC4peC4suC4i-C5iOC4siDguYHguILguKfguIcg4LiE4Lil4Lit4LiH4LiV4Lix4LiZ4LmA4Lir4LiZ4Li34LitIOC5gOC4guC4lSDguKfguLHguJLguJnguLIg4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4LijIDEwMTEw!5e0!3m2!1sth!2sth!4v1556525855786!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bggray">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6"> 
							<div class="title_head2 wow fadeInUp"> <span class="bluetxt">INNOTECH </span> CONTACT</div>
							<div class="contact_info">
								<li><img src="{{asset('images/tel.png')}}"> โทรศัพท์ 0-2624-6333</li>
								<li><img src="{{asset('images/fax.png')}}"> โทรสาร 0-2624-6330</li>
								<li><img src="{{asset('images/mail.png')}}"> Email marketing@solarisfunds.com</li>
							</div>
						</div>
						<div class="col-12 col-md-6"> 
							<div class="title_head2 wow fadeInUp"> <span class="bluetxt">INFORM</span> แจ้งเบาะแส </div>
							<div class="contactform">
								<label>ชื่อ-นามสกุล</label>
								<input id="textinput" name="textinput" type="text" class="form-control input-md">
								<label>อีเมล</label>
								<input id="textinput" name="textinput" type="text" class="form-control input-md">
								<label>หัวข้อ</label>
								<input id="textinput" name="textinput" type="text" class="form-control input-md">
								<label>ข้อความ</label>
								<textarea class="form-control" id="textarea" name="textarea" rows="6"></textarea>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ส่งข้อมูล</a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col">
						<div class="title_head1"><span class="bluetxt">INNOTECH</span> CAREER
							<p>ร่วมงานกับเรา</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#" class="text_job">ผู้ประสานงานฝ่ายขาย</a>
							<a href="#" class="viewcareer"><i class="fas fa-chevron-circle-right"></i></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#" class="text_job">ผู้ประสานงานฝ่ายขาย</a>
							<a href="#" class="viewcareer"><i class="fas fa-chevron-circle-right"></i></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#" class="text_job">ผู้ประสานงานฝ่ายขาย</a>
							<a href="#" class="viewcareer"><i class="fas fa-chevron-circle-right"></i></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#" class="text_job">ผู้ประสานงานฝ่ายขาย</a>
							<a href="#" class="viewcareer"><i class="fas fa-chevron-circle-right"></i></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#" class="text_job">ผู้ประสานงานฝ่ายขาย</a>
							<a href="#" class="viewcareer"><i class="fas fa-chevron-circle-right"></i></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#" class="text_job">ผู้ประสานงานฝ่ายขาย</a>
							<a href="#" class="viewcareer"><i class="fas fa-chevron-circle-right"></i></a>
							<a href="#" class="btnapply">Apply Now</a>
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
				$('.pagination-inner a').on('click', function () {
					$(this).siblings().removeClass('pagination-active');
					$(this).addClass('pagination-active');
				})
			</script>
</body>

</html>