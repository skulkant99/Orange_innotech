<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
     @include('inc_header') <?php $pageName="home"; ?>
</head>

<body>
	<style>
		.inno_update.owl-theme .owl-dots .owl-dot.active span,
		.inno_update.owl-theme .owl-dots .owl-dot:hover span {
			background: #379595;
		}
		
		.inno_update.owl-theme .owl-nav [class*=owl-]:hover {
			background-color: transparent;
		}
		
		.inno_update.owl-theme .owl-dots .owl-dot span {
			width: 20px;
			height: 20px;
		}
		
		::-webkit-scrollbar {
			width: 2px;
		}
		
		.wrap_parallax {
			position: relative;
			height: 100vh;
			overflow: hidden;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		
		.wrap_parallax .overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		
		.wrap_parallax .parallax {
			position: relative;
			width: 100%;
			height: 100%;
		}
		
		main {
			position: relative;
			min-height: 85vh;
		}
		/*----Slideshow----------*/
		
		.flex-control-nav {
			bottom: 10px;
			z-index: 9;
		}
		
		.flex-control-paging li a.flex-active {
			background-color: white;
		}
		
		.flex-control-paging li a {
			background-color: transparent;
			width: 16px;
			height: 16px;
			border: 3px solid white;
			box-shadow: none;
		}
		
		.flex-control-paging li a:hover {
			background: white;
			transition: ease .5s;
		}
		
		.flexslider-caption ul li > img {
			width: 100%;
		}
		
		.wrap_slidecaption {
			padding: 20px;
			position: absolute;
			top: 35%;
			width: 50%;
			height: 100px;
			left: 10%;
		}
		
		.slidecaption {
			position: relative;
			color: #FFF;
			font-size: 2em;
			opacity: 0;
		}
		
		.slideleft.actioncaption {
			-webkit-animation-name: slideInLeft;
			-moz-animation-name: slideInLeft;
			-o-animation-name: slideInLeft;
			animation-name: slideInLeft;
			-webkit-animation-duration: 1.2s;
			-moz-animation-duration: 1.2s;
			-o-animation-duration: 1.2s;
			animation-duration: 1.2s;
			animation-timing-function: ease-in-out;
			animation-iteration-count: 1;
			animation-fill-mode: forwards;
		}
		
		.slideright.actioncaption {
			-webkit-animation-name: slideInRight;
			-moz-animation-name: slideInRight;
			-o-animation-name: slideInRight;
			animation-name: slideInRight;
			-webkit-animation-duration: 1.2s;
			-moz-animation-duration: 1.2s;
			-o-animation-duration: 1.2s;
			animation-duration: 1.2s;
			animation-timing-function: ease-in-out;
			animation-fill-mode: forwards;
			animation-iteration-count: 1;
			animation-delay: 0.3s;
		}
		
		@-webkit-keyframes slideInLeft {
			0% {
				left: -10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@-moz-keyframes slideInLeft {
			0% {
				left: -10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@-o-keyframes slideInLeft {
			0% {
				left: -10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@keyframes slideInLeft {
			0% {
				left: -10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@-webkit-keyframes slideInRight {
			0% {
				left: 10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@-moz-keyframes slideInRight {
			0% {
				left: 10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@-o-keyframes slideInRight {
			0% {
				left: 10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		@keyframes slideInRight {
			0% {
				left: 10%;
				opacity: 0;
			}
			100% {
				left: 0%;
				opacity: 1;
			}
		}
		
		.wrap_slidecaption h2 {
			color: #ec6b30;
			font-size: 3em;
			line-height: 36px;
			display: inline-block;
			text-transform: uppercase;
		}
		
		.wrap_slidecaption h3 {
			padding-top: 20px;
			line-height: 35px;
			font-size: 1.8em;
			font-weight: normal;
		}
		@media (max-width: 1600px) {
			.wrap_slidecaption h2{
				font-size: 2em;
			}
			.wrap_slidecaption h3{
				font-size: 1.2em;
			}
			
		}
		@media (max-width: 1199px) {
			.wrap_slidecaption h2{
				font-size: 1.5em;
			}
			.wrap_slidecaption h3{
				font-size: 1.2em;
			}
			.wrap_parallax{
				height: 60vh;
			}
			.wrap_slidecaption{
				width: 60%;
			}
		}
		@media (max-width: 991px) {
			.wrap_parallax{
				height: 50vh;
				z-index: 1;
			}
				.wrap_slidecaption h2{
				font-size: 1.3em;
			}
			.wrap_slidecaption h3{
				font-size: 1em;
			}
			.wrap_slidecaption{
				top: 20%;
			}
		}
		@media (max-width: 767px) {
			.wrap_parallax{
				height: 30vh;
			}
			.wrap_slidecaption{
				width: 100%;
				top: 25%;
				left: 0;
			}
			.wrap_slidecaption h2{
				font-size: 0.9em;
			}
			.wrap_slidecaption h3{
				font-size: 0.6em;
				padding-top: 0px;
			}
		}
	

	</style>
	@include('inc_topmenu')
		<section class="wrap_parallax">
			<div class="overlay">
				<div class="parallax">
					<div class="container-fluid nopad">
						<div class="row">
							<div class="col">
								<div class="flexslider-caption">
									<ul class="slides">
							
									@foreach ($banner as $_banner) 
										<li><img src="{{asset('uploads/Banner/'.$_banner->photo)}}" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block">
										<img src="{{asset('uploads/Banner/'.$_banner->photo_mobile)}}" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-none">
											<a href="#">
												{{$_banner->content}}
											</a>
										</li>
									@endforeach
											<!-- <li> <img  src="images/banner2.png" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block">
												<img src="images/bannermobile2.png" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-none">
													<a href="#">
														<div class="wrap_slidecaption">
															<div class="slidecaption slideleft">
																<h2>Equity Fund</h2> </div>
															<div class="slidecaption slideright">
																<h3>
																		กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว<br>
																			</h3> </div>
														</div>
													</a>
												</li>		 -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<main>
			<div class="container-fluid">
				<div class="row wow fadeInUp">
					<div class="col">
					<div class="mttopmb">
						<div class="title_head1"> <span class="bluetxt">INNOTECH</span> &nbsp; INNOVATION &nbsp;|&nbsp; TECHNOLOGY &nbsp;|&nbsp; WEALTH </div>
					</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="row">
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
									<div class="listicon1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon1_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div>
									<span class="text_icon">ข้อมูลเศรษฐกิจ <br>	และภาวะตลาดการเงิน</span> </div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
									<div class="listicon2  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon2_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div>
									  <span class="text_icon">เรื่องน่ารู้เกี่ยว <br> กับการลงทุน</span> </div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
									<div class="listicon3  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon3_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> <span class="text_icon">เอกสารเผยแพร่ <br>และประกาศบริษัท</span> </div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
									<div class="listicon4  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon4_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> <span class="text_icon">รายงานกองทุน</span> </div>
								<div class="w-100"></div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="listicon5  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon5_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> <span class="text_icon">ธรรมภิบาลการลงทุน <br>(I-Code)</span> </div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
									<div class="listicon6  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon6_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> <span class="text_icon">ปฏิทินกิจกรรม</span> </div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="listicon7  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon7_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> <span class="text_icon">ดาวน์โหลดแบบฟอร์ม</span> </div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">
									<div class="listicon8  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon8_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> <span class="text_icon">ติดตามสถานะตราสารหนี้ <br>ผิดนัดชำระของกองทุน</span> </div>
							</div>
						</div>
						<div class="col-lg-3 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
							<div class="graph"> <img src="images/graph1.png" class="img-fluid"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_section2 wow fadeInDown">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="title_head1 wow fadeInUp"> มูลค่าหน่วยลงทุน <span class="bluetxt">NAV</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_section3">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
							<div class="box_nav">
								<div class="head_nav"> EP-LTF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="images/mockup-webinontech_05.png" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว
									<br> ณ วันที่ xx/xx/xxxx </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>10.500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+0.15</span></td>
											</tr>
											<tr>
												<td>+1.50%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="box_nav">
								<div class="head_nav"> S-EQRMF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="images/mockup-webinontech_07.png" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว
									<br> ณ วันที่ xx/xx/xxxx </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>10.500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+0.15</span></td>
											</tr>
											<tr>
												<td>+1.50%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
							<div class="box_nav">
								<div class="head_nav"> EP-AI </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="images/mockup-webinontech_14.png" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว
									<br> ณ วันที่ xx/xx/xxxx </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>10.500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+0.15</span></td>
											</tr>
											<tr>
												<td>+1.50%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
							<div class="box_nav">
								<div class="head_nav"> EP-LTF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="images/mockup-webinontech_14.png" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว
									<br> ณ วันที่ xx/xx/xxxx </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>10.500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+0.15</span></td>
											</tr>
											<tr>
												<td>+1.50%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
							<div class="box_nav">
								<div class="head_nav"> EP-LTF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="images/mockup-webinontech_16.png" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว
									<br> ณ วันที่ xx/xx/xxxx </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>10.500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+0.15</span></td>
											</tr>
											<tr>
												<td>+1.50%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
							<div class="box_nav">
								<div class="head_nav"> EP-LTF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="images/mockup-webinontech_12.png" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนเปิดอิควิตี้โปร หุ้นระยะยาว
									<br> ณ วันที่ xx/xx/xxxx </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>10.500</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+0.15</span></td>
											</tr>
											<tr>
												<td>+1.50%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="#" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
					</div>
					<div class="row wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
						<div class="col">
							<div class="btn_center"> <a href="#" class="btn btn-secondary">ดูทั้งหมด คลิก</a> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_section2 mtedit wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
				<div class="container">
					<div class="row">
						<div class="col wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="title_head1 d-none d-sm-none d-md-block d-lg-block d-xl-block"> ผลการดำเนินงาน <span class="bluetxt">FUND PERFORMANCE</span></div>
							<div class="title_head1 d-block d-sm-block d-md-none d-lg-none d-xl-none"> ผลการดำเนินงาน <br> <span class="bluetxt">FUND PERFORMANCE</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_section3  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
				<div class="container">
					<div class="row  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.3s">
						<div class="col">
							<div class="graph"> <img src="images/graph2.png" class="img-fluid"> </div>
						</div>
					</div>
					<div class="row">
						<div class="col  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.4s">
							<div class="text_detail">
								<h2>คำเตือน</h2>
								<?php foreach ($warning as $_warning) {
									echo '<li>'.$_warning->name_th.'</li>'; 
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="title_head1"><span class="bluetxt">INNOTECH</span> UPDATE
							<p>ข่าวสารความเคลื่อนไหวต่างๆ ของเรา</p>
						</div>
					</div>
				</div>
				<div class="row mt-3 mb-5">
					<div class="col  wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
						<div class="inno_update owl-carousel owl-theme">
							@foreach($information as $_information) 
								@if(isset($_information->photo) && $_information->photo)
									<div class="item">
										<div class="box_nav">
											<div class="pic_nav">
												<div class="hov-menu-sty2">
													<figure>
														<a href="{{$_information->id}}"><img src="{{asset('uploads/Information/'.$_information->photo)}}" class="img-fluid"> </a>
													</figure>
												</div>
											</div>
											<div class="inno_details"><?php echo '<p>'.$_information->detail_th.'</p>' ?></div> 
											<a href="{{url('news/'.$_information->id)}}" class="readmore">เพิ่มเติม</a> 
										</div>
									</div>
								@endif
							@endforeach
							
							<!-- <div class="item">
								<div class="box_nav">
									<div class="pic_nav">
										<div class="hov-menu-sty2">
											<figure>
												<a href="#"><img src="images/inno_update.png" class="img-fluid"> </a>
											</figure>
										</div>
									</div>
									<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>
							</div> -->
							<!-- <div class="item">
								<div class="box_nav">
									<div class="pic_nav">
										<div class="hov-menu-sty2">
											<figure>
												<a href="#"><img src="images/inno_update4.png" class="img-fluid"> </a>
											</figure>
										</div>
									</div>
									<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>
							</div> -->
							<!-- <div class="item">
								<div class="box_nav">
									<div class="pic_nav">
										<div class="hov-menu-sty2">
											<figure>
												<a href="#"><img src="images/inno_update3.png" class="img-fluid"> </a>
											</figure>
										</div>
									</div>
									<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>
							</div> -->
							<!-- <div class="item">
								<div class="box_nav">
									<div class="pic_nav">
										<div class="hov-menu-sty2">
											<figure>
												<a href="#"><img src="images/inno_update2.png" class="img-fluid"> </a>
											</figure>
										</div>
									</div>
									<div class="inno_details"> INNOVATION DAY สร้าง ประสบการณ์การชมภาพยนตร์ เหนือระดับให้ลูกค้า </div> <a href="#" class="readmore">เพิ่มเติม</a> </div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</main>
		
		
				<!--POPUP-FIRSTPAGE-->


		<div class="modal fade bd-example-modal-lg" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><img src="images/logo_popup.png" class="img-fluid"></h5>
       
      </div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<div class="sub-popup">
									<h1>คำเตือน </h1>
									<p>
										<?php foreach($intro as $_intro){ 
											echo $_intro->name_th;	

										}?>
		
								  </p>
									 </div>
									
							</div>
						</div>
					    <div class="btn_popup">
					    
						    <button type="button" class="btn btn-info" data-dismiss="modal">ปฎิเสธ</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">ยอมรับ</button>
			
					    </div>
					</div>
    		</div>
			</div>
		</div>
	
		


		
		@include('inc_footer')
			<script type="text/javascript">
				$(window).load(function () {
					$('.flexslider-caption').flexslider({
						animation: "fade"
						, animationSpeed: 1500
						, slideshow: true
						, controlNav: false, //Boolean: Create navigation for paging control of each slide? Note: Leave true for manualControls usage
						directionNav: false, //animationLoop: false,
						start: function (slider) {
							$('.slidecaption').removeClass('actioncaption');
							$('.flex-active-slide').find('.slidecaption').addClass('actioncaption');
							$('.slider').removeClass('loading');
							$(".slides li").each(function (index) {
								if ($(this).children('div').hasClass('vdo')) {
									$(this).addClass('hasvdo');
								}
							});
						}
						, after: function (slider) {
							$('.slidecaption').removeClass('actioncaption');
							$('.flex-active-slide').find('.slidecaption').addClass('actioncaption');
							$(".slides li").each(function (index) {
								if ($(this).children('div').hasClass('vdo')) {
									$(this).addClass('hasvdo');
								}
							});
						}
					});
				});
			</script>
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
			<script type="text/javascript">
				$(document).ready(function () {
					$('.inno_update').owlCarousel({
						loop: false
						, margin: 20
						, autoplay: false
						, autoplayTimeout: 4000
						, autoplayHoverPause: false
						, smartSpeed: 2000
						, nav: false
						, dots: true
						, navClass: ['owl-prev', 'owl-next']
						, responsive: {
							0: {
								items: 1
								, slideBy: 1
								, margin: 10
								, loop: false
								, dots: true
							}
							, 640: {
								items: 3
								, slideBy: 1
								, loop: false
							}
							, 1024: {
								items: 4
								, slideBy: 1
							}
							, 1200: {
								items: 4
								, slideBy: 1
							}
						}
					})
				});
			</script>
						<script>
				$(window).ready(function () {
					setTimeout(function () {
						$('#modal-subscribe').modal("show")
					}, 2500)
				})
			</script>
</body>

</html>