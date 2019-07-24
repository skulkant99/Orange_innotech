<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="abt"; ?>
</head>

<body>
	<style>
		.link.active {
			background-color: #379595;
			padding: 10px;
		}
		
		.accordion .set {
			border-bottom: 1px solid #379595;
		}
		
		.accordion .set > a {
			color: #379595;
			display: block;
			font-size: 1.1em;
			font-weight: normal;
			padding: 10px 50px 10px 15px;
			position: relative;
			text-decoration: none;
			transition: all 0.2s linear 0s;
			cursor: pointer;
			background-color: rgba(255, 255, 255, 0.8);
			font-family: 'kanitbold';
			margin: 20px 0px;
		}
		
		.accordion .set > a:focus {
			outline: 0;
		}
		
		.accordion .set > a.active {
			border-bottom: none;
			width: auto;
			position: relative;
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
		}
		
		.accordion .content {
			display: none;
			width: auto;
			position: relative;
		}
		
		.accordion .content h3 {
			font-size: 1em;
			padding-left: 15px;
			font-family: 'Kanit';
			margin-top: 10px;
		}
		
		.accordion .content p {
			color: dimgray;
			font-size: 1em;
			margin: 0;
			padding: 10px 20px 10px 45px;
		}
		

		.link.active {
			color: #b40303;
		}
		
		.text-title-top h3 {
			margin-top: -20px;
		}
		/*SCROLL-MENU*/
		
		.menu-wrapper {
			width: 100%;
			height: 45px;
			overflow: hidden;
		}
		
		.menu {
			list-style-type: none;
			padding: 0;
			margin: 0;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: stretch;
			-ms-flex-align: stretch;
			align-items: stretch;
			overflow-x: scroll;
			height: 50px;
			-webkit-overflow-scrolling: touch;
		}
		
		.menu-item {
			text-align: center;
			padding: 0px;
			height: 45px;
			text-transform: uppercase;
			font-weight: normal;
			-webkit-box-flex: 1;
			-ms-flex-positive: 1;
			flex-grow: 1;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			border-bottom: 2px solid transparent;
		}
		
		.menu-item:hover {
			border-bottom: 2px solid #f5f5f5;
		}
		.menu-item.active{
			background-color:#379494;
			border-radius: 50px;
		}
		.menu-item.active a{
			color: white;
		}
		.menu-item a {
			text-align: center;
			color: black;
			font-size: 1rem;
			width: max-content;
			margin-right: 10px;
			margin-left: 10px;
			font-family: 'Kanit';
		}

		@media (max-width: 767px) {
			.accordion .set > a {
				font-size: 1em;
			}
			.title_head2::before {
				display: none;
			}
			.title_head2 {
				margin-top: -10px;
				font-size: 2em;
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
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.about')}}</li>
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
								<div class="bannertop_abt">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>เกี่ยวกับเรา <span class="boldtext">About</span></h1> </div>
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
			<div class="container-fluid nopad">
				<div class="row">
					<div class="col">
						<div class="container d-block d-sm-none d-md-none d-lg-none d-xl-none">
							<div class="row">
								<div class="col">
<!--
									<div class="menu-wrapper">
										<ul class="menu">
											<li class="menu-item"> <a class="link" href="#content1">ข้อมูลบริษัท </a> </li>
											<li class="menu-item"> <a class="link" href="#content2">วิสัยทัศน์และพันธกิจ </a> </li>
											<li class="menu-item"> <a class="link" href="#content3">ค่านิยมหลักของบริษัท</a> </li>
											<li class="menu-item"> <a class="link" href="#content4">คณะกรรมการบริษัท</a> </li>
											<li class="menu-item"> <a class="link" href="#content5"> ผู้จัดการกองทุน</a> </li>
										</ul>
									</div>
-->
						  <div class="mt-3">
							  <select id="selectbasic" name="selectbasic" class="form-control">
								<option value="1">ข้อมูลบริษัท</option>
								<option value="2">วิสัยทัศน์และพันธกิจ</option>
								<option value="3">ค่านิยมหลักของบริษัท</option>
								<option value="4">คณะกรรมการบริษัท</option>
								<option value="5">คณะผู้บริหาร</option>
								<option value="6">ผู้จัดการกองทุน</option>
								</select>
							</div>
							
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col">
									<div class=" d-none d-sm-block d-md-block d-lg-block d-xl-block">
										<div class="topbar-menu">
											<ul>
												<li> <a class="link" href="#content1">ข้อมูลบริษัท </a> </li>
												<li> <a class="link" href="#content2">วิสัยทัศน์และพันธกิจ </a> </li>
												<li> <a class="link" href="#content3">ค่านิยมหลักของบริษัท</a> </li>
												<li> <a class="link" href="#content4">คณะกรรมการบริษัท</a> </li>
												<li> <a class="link" href="#content5">คณะผู้บริหาร</a> </li>
												<li> <a class="link" href="#content6"> ผู้จัดการกองทุน</a> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<section id="content1" class="content1">
										<div class="row">
											<div class="col">
												<div class="posre">
													<div class="alignfull">
														<div class="number_bg">01</div>
													</div>
												</div>
												<div class="title_head2 wow fadeInUp"> ข้อมูลบริษัท <span class="bluetxt">INNOTECH </span></div>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col">
												@foreach ($about as $k_about => $v_about)
													@if ($v_about->sort_id == 1)
														{!!($about[$k_about]['detail_'.$lang])!!}
													@endif
												@endforeach
												{{-- <div class="content_abt"> <span class="orangetxt"><b>บริษัทหลักทรัพย์จัดการกองทุน อินโนเทค จำกัด</b></span> ตั้งอยู่ที่ ชั้น 19 อาคารลิเบอร์ตี้ สแควร์ เลขที่ 287 ถ.สีลม แขวงสีลม เขตบางรัก กรุงเทพฯ 10500 ได้ จดทะเบียนจัดตั้งบริษัท เมื่อวันที่ 28 มิถุนายน 2549
													<br> และเริ่มประกอบธุรกิจหลักทรัพย์ประเภทบริษัทหลักทรัพย์จัดการกองกองทุนตั้งแต่ปี พ.ศ.2550 เป็นต้นมา โดยมีทุนจดทะเบียน 225,400,000.00 บาท (ชำระเต็ม) ถือหุ้นทั้งหมดโดยบริษัทหลักทรัพย์ ซีมิโก้ จำกัด (มหาชน)
													<br>
													<br> ปัจจุบัน บริษัทมีใบอนุญาติการจัดการกองทุน ภายใต้ พ.ร.บ.หลักทรัพย์ และ พ.ร.บ.สัญญาซื้อขายล่วงหน้า จำนวน 4 ใบอนุญาต ดังต่อไปนี้
													<div class="row mt-3">
														<div class="col-12 col-lg-7 offset-lg-3 d-none d-sm-none d-md-block d-lg-block d-xl-block">
															<div class="row">
																<div class="col"> การจัดการกองทุนรวม
																	<br> การจัดการกองทุนส่วนบุคคล (กองทุนส่วนบุคคล)
																	<br> การจัดการกองทุนส่วนบุคคล (กองทุนสำรองเลี้ยงชีพ)
																	<br> การเป็นผู้จัดการเงินทุนสัญญาซื้อขายล่วงหน้า </div>
																<div class="col"> ใบอนุญาติเลขที่ 0009/2549
																	<br> ใบอนุญาติเลขที่ 0008/2549
																	<br> ใบอนุญาติเลขที่ 0001/2555
																	<br> ใบอนุญาติเลขที่ 0009/2560 </div>
															</div>
														</div>
														<div class="col-12 col-lg-7 offset-lg-3 d-block d-sm-block d-md-none d-lg-none d-xl-none">
															<div class="row">
																<div class="col"> <b>การจัดการกองทุนรวม</b>
																	<br> ใบอนุญาติเลขที่ 0009/2549
																	<br> <b>การจัดการกองทุนส่วนบุคคล (กองทุนส่วนบุคคล)</b>
																	<br> ใบอนุญาติเลขที่ 0008/2549
																	<br><b>การจัดการกองทุนส่วนบุคคล (กองทุนสำรองเลี้ยงชีพ) </b>
																	<br>ใบอนุญาติเลขที่ 0001/2555
																	<br> <b>การเป็นผู้จัดการเงินทุนสัญญาซื้อขายล่วงหน้า</b>
																	<br> ใบอนุญาติเลขที่ 0009/2560 </div>
															</div>
														</div>
													</div>
													<br> <b>หมายเหตุ :</b>
													<br> 1) บริษัทหลักทรัพย์จัดการกองทุน โซลาริส จำกัด ได้เปลี่ยนชื่อเป็นบริษัทหลักทรัพย์จัดการกองทุน อินโนเทค จำกัด เมื่อวันที่ 25 กันยายน 2561
													<br> 2) บริษัทหลักทรัพย์จัดการกองทุนรวม ซีมิโก้ จำกัด ได้เปลี่ยนชื่อเป็นบริษัทหลักทรัพย์จัดการกองทุน โซลาริส จำกัด เมื่อวันที่ 26 เมษายน 2555 
												</div> --}}
											</div>
										</div>
									</section>
								</div>
							</div>
							<hr class="alignfull mt-5 mb-5">
							<div class="row">
								<div class="col">
									<section id="content2" class="content2">
										<div class="row">
											<div class="col">
												<div class="posre">
													<div class="alignfull">
														<div class="number_bg">02</div>
													</div>
												</div>
												<div class="title_head2 wow fadeInUp"> วิสัยทัศน์และพันธกิจ <span class="bluetxt">VISION MISSION </span></div>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col">
												@foreach ($about as $k_about => $v_about)
													@if ($v_about->sort_id == 2)
														{!!($about[$k_about]['detail_'.$lang])!!}
													@endif
												@endforeach
												{{-- <div class="content_abt"> <span class="orangetxt bigfont"><b>วิสัยทัศน์</b></span>
													<br>
													<br> บริษัทหลักทรัพย์จัดการลงทุนที่เน้นนวัตกรรม และอยู่ในใจลูกค้าเป็นลำดับแรกในกลุ่มประเทศตะวันออกเฉียงใต้ (ASEAN)
													<br>
													<br> <span class="orangetxt bigfont"><b>พันธกิจ </b></span>
													<br>
													<br>
													<ol class="bgnumber">
														<li> นำเสนอกองทุนนวัตกรรมใหม่ ๆ และแสวงหาความมั่งคั่งสูงสุดให้กับลูกค้า</li>
														<li> เน้นลูกค้าเป็นหลัก ผ่านการสร้างแรงบันดาลใจบนแพลทฟอร์มดิจิตัลเพื่อสร้างประสบการณ์ที่ยอดเยี่ยมแก่ลูกค้า</li>
														<li> พนักงานทุกคนต้องปฏิบัติตนอย่างมีคุณธรรม ซื่อสัตย์สุจริต มีเกียรติ และจรรยาบรรณ เยี่ยงผู้ประกอบวิชาชีพ เพื่อที่จะสร้างผลประโยชน์ร่วมกันของผู้มีส่วนได้เสียทุกฝ่ายของบริษัทฯ</li>
													</ol>
												</div> --}}
											</div>
										</div>
									</section>
								</div>
							</div>
							<hr class="alignfull mt-5 mb-5">
							<div class="row">
								<div class="col">
									<section id="content3" class="content3">
										<div class="row">
											<div class="col">
												<div class="posre">
													<div class="alignfull">
														<div class="number_bg">03</div>
													</div>
												</div>
												<div class="title_head2 wow fadeInUp"> ค่านิยมหลักของบริษัท <span class="bluetxt">INNOTECH </span></div>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col">
												@foreach ($about as $k_about => $v_about)
													@if ($v_about->sort_id == 3)
														{!!($about[$k_about]['detail_'.$lang])!!}
													@endif
												@endforeach
												{{-- <div class="content_abt"> <span class="orangetxt bigfont"><b>ความซื่อสัตย์สุจริต</b></span>
													<br>
													<br> บริษัทฯยึดถือผลประโยชน์ของลูกค้าเป็นสิ่งสำคัญที่สุด โดยทำให้เป้าหมายของลูกค้าเป็นเป้าหมายของเรา ซึ่งเป็นไปตามหลักจริยธรรม และมืออาชีพที่บริษัทฯยึดถือปฎิบัติ พนักงานของบริษัทฯจะอุทิศตัวให้กับการบริการลูกค้าอย่างดีที่สุด และไม่มีนโยบายรับเงินพิเศษอื่นใด ความซื่อสัตย์เป็นค่านิยมหลักของกระบวนการลงทุน ความสัมพันธ์กับลูกค้า และทุกอย่างที่บริษัทฯ ได้ดำเนินการ
													<br>
													<br> <span class="orangetxt bigfont"><b>ความกระตือรือร้น</b></span>
													<br>
													<br> บริษัทฯจะพยายามให้บรรลุเป้าหมายเกินกว่าที่ลูกค้าคาดหวังไว้ และติดตามผลของการทำงานอย่างใกล้ชิด โดยบริษัทฯจะดำเนินงานกับทุกสิ่งที่ท้าทายด้วยความกระตือรือร้น ไตร่ตรองอย่างละเอียด และวิเคราะห์ ซึ่งบริษัทฯ จะมีความกระตือรือร้นในทุกสิ่งที่ได้ดำเนินการในทุกวันเพื่อที่จะช่วยให้ลูกค้าบรรลุเป้าหมายทางการเงินตามที่วางแผนไว้ในอนาคต ได้อย่างมั่นใจ
													<br>
													<br> <span class="orangetxt bigfont"><b>ความคิดสร้างสรรค์</b></span>
													<br>
													<br> เรามุ่งมั่นค้นหาความรู้ และทำความเข้าใจในตลาดฯเชิงลึก ซึ่งจะนำมาซึ่งแนวทางการลงทุนที่สร้างสรรค์อันเป็นนวัตกรรมใหม่เพื่อ เปลี่ยนแปลงตลาดฯและสร้างความแตกต่างที่ได้เปรียบสำหรับเพิ่มพูนความมั่งคั่งแก่ลูกค้าของเรา ได้อย่างมั่นใจ 
												</div> --}}
											</div>
										</div>
									</section>
								</div>
							</div>
							<hr class="alignfull mt-5 mb-5">
							<div class="row">
								<div class="col">
									<section id="content4" class="content4">
										<div class="row">
											<div class="col">
												<div class="posre">
													<div class="alignfull">
														<div class="number_bg">04</div>
													</div>
												</div>
												<div class="title_head2 wow fadeInUp"> คณะกรรมการบริษัท <span class="bluetxt">INNOTECH </span></div>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col">
												<div class="content_abt">
													<div class="accordion accordion-01">
														@foreach ($personnel as $k_personnel => $v_personnel)
															@if ($v_personnel->type == 1)
																<div class="set"> <a>{{$personnel[$k_personnel]['name_'.$lang]}} <br> <span class="orangetxt font-italic">{{$personnel[$k_personnel]['position_'.$lang]}}</span> <span class="clickviewmore">คลิกเพื่อดูข้อมูลเพิ่มเติม</span><i class="fas fa-plus-circle"></i></a>
																	<div class="content">
																		{!!($personnel[$k_personnel]['detail_'.$lang])!!}
																	</div>
																</div>
															@endif
															
														@endforeach
													
														
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<hr class="alignfull mt-5 mb-5">
							<div class="row">
								<div class="col">
									<section id="content5" class="content5">
										<div class="row">
											<div class="col">
												<div class="posre">
													<div class="alignfull">
														<div class="number_bg">05</div>
													</div>
												</div>
												<div class="title_head2 wow fadeInUp"> คณะผู้บริหาร <span class="bluetxt">INNOTECH </span></div>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col">
												<div class="content_abt">
													<div class="accordion accordion-01">
														@foreach ($personnel as $k_personnel => $v_personnel)
															@if ($v_personnel->type == 2)
																<div class="set"> <a>{{$personnel[$k_personnel]['name_'.$lang]}} <br> <span class="orangetxt font-italic">{{$personnel[$k_personnel]['position_'.$lang]}}</span> <span class="clickviewmore">คลิกเพื่อดูข้อมูลเพิ่มเติม</span><i class="fas fa-plus-circle"></i></a>
																	<div class="content">
																		{!!($personnel[$k_personnel]['detail_'.$lang])!!}
																	</div>
																</div>
															@endif
															
														@endforeach
													
														
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<hr class="alignfull mt-5 mb-5">
							<div class="row">
								<div class="col">
									<section id="content6" class="content6">
										<div class="row">
											<div class="col">
												<div class="posre">
													<div class="alignfull">
														<div class="number_bg">06</div>
													</div>
												</div>
												<div class="title_head2 wow fadeInUp"> ผู้จัดการกองทุน <span class="bluetxt">INNOTECH </span></div>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col">
												<div class="content_abt">
													<div class="accordion accordion-01">
														@foreach ($personnel as $k_personnel => $v_personnel)
															@if ($v_personnel->type == 3)
																<div class="set"> <a>{{$personnel[$k_personnel]['name_'.$lang]}} <br> <span class="orangetxt font-italic">{{$personnel[$k_personnel]['position_'.$lang]}}</span> <span class="clickviewmore">คลิกเพื่อดูข้อมูลเพิ่มเติม</span><i class="fas fa-plus-circle"></i></a>
																	<div class="content">
																		{!!($personnel[$k_personnel]['detail_'.$lang])!!}
																	</div>
																</div>
														@endif
															
														@endforeach
														<br>
														<br> </div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
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
				$(document).ready(function () {
					$('a[href^="#"]').on('click', function (e) {
						e.preventDefault();
						var target = this.hash;
						var $target = $(target);
						$('html, body').stop().animate({
							'scrollTop': $target.offset().top - 200
						}, 900, 'swing', function () {
							//window.location.hash = target;
						});
						sidebar - menu
					});
					$(window).scroll(function () {
						var scroll = $(window).scrollTop();
						var sec2 = $('.content1').offset().top - 200;
						var sec3 = $('.content2').offset().top - 200;
						var sec4 = $('.content3').offset().top - 200;
						var sec5 = $('.content4').offset().top - 200;
						var sec6 = $('.content5').offset().top - 200;
						var sec7 = $('.content6').offset().top - 200;
						if (scroll >= sec7) {
							$('.link').removeClass('active');
							$('.link[href="#content6"]').addClass('active');
						}
						else if (scroll >= sec5) {
							$('.link').removeClass('active');
							$('.link[href="#content4"]').addClass('active');
						}
						else if (scroll >= sec4) {
							$('.link').removeClass('active');
							$('.link[href="#content3"]').addClass('active');
						}
						else if (scroll >= sec3) {
							$('.link').removeClass('active');
							$('.link[href="#content2"]').addClass('active');
						}
						else if (scroll >= sec2) {
							$('.link').removeClass('active');
							$('.link[href="#content1"]').addClass('active');
						}
						else {
							$('.link').removeClass('active');
						}
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