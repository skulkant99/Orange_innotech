<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php require('inc_header.php');?>
</head>

<body>

	<?php require('inc_topmenu.php'); ?>
	<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
							<li class="breadcrumb-item active" aria-current="page">ลงทะเบียน</li>
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
								<div class="bannertop_acc">
									<div class="container">
										<div class="row">
											<div class="col">
											<div class="bannertxt_top">
												<h5>INNOTECH</h5>
												<h1>ลงทะเบียน <span class="boldtext">OPEN ACCOUNT</span></h1> </div>
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
		<div class="row mt-5 mb-5">
			<div class="col">
				<div class="detail_acc">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor laoreet lectus eget scelerisque. Quisque euismod enim vitae congue porta. Fusce eget lacinia dui, ac venenatis purus. Curabitur vehicula augue at eros sodales, vestibulum tempus dolor cursus. Sed nec orci a felis egestas venenatis quis ut ante. Vestibulum et tincidunt nibh. Nunc eu nulla metus. Nam vitae accumsan sem. Integer magna elit, congue congue leo ac, feugiat egestas justo. Donec fermentum ultricies velit sit amet accumsan.
<br><br>
Aliquam ultricies sagittis nibh, a finibus elit vulputate et. Sed a hendrerit ex. Quisque dignissim eleifend lectus quis pulvinar. Mauris ultricies, turpis vel fringilla fringilla, mauris turpis mattis erat, in posuere dui ex eu risus. Proin blandit in quam nec aliquet. Donec tristique cursus nulla vitae finibus. Phasellus at dolor ac sapien hendrerit imperdiet non vitae mi. Morbi sed risus venenatis arcu iaculis vestibulum.
<br><br>
Sed facilisis consectetur urna, vitae egestas nisl pulvinar eget. Pellentesque non sapien volutpat, congue sem non, condimentum eros. Nullam et justo risus. Phasellus id justo nec tortor commodo scelerisque nec non metus. Curabitur pulvinar ultrices neque, quis pulvinar magna imperdiet sit amet. Nullam in sem vel leo tincidunt blandit. Vestibulum et vehicula augue. Curabitur commodo congue felis ac fringilla.
			
			<br><br>
			<div class="btn_regis">
			<a href="#" class="btn btn-danger">เปิดบัญชี</a>
			</div>
				</div>
			</div>
		</div>
	</div>
		 </main>
		<?php require('inc_footer.php'); ?>
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