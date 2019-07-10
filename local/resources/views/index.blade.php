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
		/*
		::-webkit-scrollbar {
			width: 2px;
		}
		
*/
		
		.display-slide {
			display: none;
		}
		
		.set_list {
			margin-top: -3px;
		}
		
		.set_list li {
			display: inline-block;
			font-size: 1.5em;
			font-family: 'Kanit';
			background-color: #379494;
			padding: 5px 15px;
			width: 33.4%;
			text-align: center;
		}
		.set_list li a{
			color: white;
		}
		.set_list li.active {
			border-top: 3px solid #379494;
			padding: 5px 15px;
			display: inline-block;
			background-color: transparent;
		}
		
		.set_list li.active a {
			color: #379494;
		}
		/*----Slideshow----------*/
		
		.flex-control-nav {
			bottom: 10px;
			z-index: 9;
			display: block;
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
		
		flexslider-caption .flex-direction-nav {
			display: block;
		}
		
		.wrap_slidecaption {
			padding: 20px;
			position: absolute;
			top: 35%;
			width: 50%;
			height: 100px;
			left: 10%;
		}
		
		.wrap_parallax {
			position: relative;
			height: 115vh;
			overflow: hidden;
			display: flex;
			justify-content: center;
			align-items: center;
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
			font-family: 'kanit_mediumregular';
		}
		
		.wrap_slidecaption h3 {
			padding-top: 20px;
			line-height: 35px;
			font-size: 1.8em;
			font-weight: normal;
		}
		
		@media (max-width: 1600px) {
			.wrap_slidecaption h2 {
				font-size: 2em;
			}
			.wrap_slidecaption h3 {
				font-size: 1.2em;
			}
		}
		
		@media (max-width: 1199px) {
			.wrap_slidecaption h2 {
				font-size: 1.5em;
			}
			.wrap_slidecaption h3 {
				font-size: 1.2em;
			}
			.wrap_parallax {
				height: 60vh;
			}
			.wrap_slidecaption {
				width: 60%;
			}
		}
		
		@media (max-width: 991px) {
			.wrap_parallax {
				height: 50vh;
				z-index: 1;
			}
			.wrap_slidecaption h2 {
				font-size: 1.3em;
			}
			.wrap_slidecaption h3 {
				font-size: 1em;
			}
			.wrap_slidecaption {
				top: 20%;
			}
		}
		
		@media (max-width: 767px) {
/*
			.wrap_parallax {
				height: 30vh;
			}
*/
			.wrap_slidecaption {
				width: 100%;
				top: 25%;
				left: 0;
			}
			.wrap_slidecaption h2 {
				font-size: 0.9em;
			}
			.wrap_slidecaption h3 {
				font-size: 0.6em;
				padding-top: 0px;
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

		<section class="wrap_parallax">
			<div class="overlay">
				<div class="parallax">
					<div class="container-fluid nopad">
						<div class="row">
							<div class="col">
								<div class="flexslider-caption">
									<ul class="slides">
							
									@foreach ($banner as $_banner) 
										@if (isset($_banner->photo) && $_banner->photo)
										<li><img src="{{asset('uploads/Banner/'.$_banner->photo)}}" class="img-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block">
											<img src="{{asset('uploads/Banner/'.$_banner->photo_mobile)}}" class="img-fluid d-block d-sm-block d-md-block d-lg-none d-xl-none">
												<a href="#">
													{{$_banner->content}}
												</a>
											</li>
										@endif
										
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
							<div class="title_head1 smtext"> <span class="bluetxt blocktext">INNOTECH</span> &nbsp; INNOVATION &nbsp;|&nbsp; TECHNOLOGY &nbsp;|&nbsp; WEALTH </div>
						</div>
					</div>
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="row">
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
									<a href={{url('economic')}}><div class="listicon1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon1_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.economic')}}</span> </a>
								</div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
									<a href={{url('knowledge')}}><div class="listicon2  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon2_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.knowledge')}}</span> </a>
								</div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
									<a href={{url('downloadreport')}}><div class="listicon3  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon3_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.report')}}</span> </a>
								</div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
									<a href={{url('reportfunds')}}><div class="listicon4  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon4_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.reportfunds')}}</span> </a>
								</div>
								<div class="w-100"></div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
									<a href={{url('/')}}><div class="listicon5  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon5_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.investment')}}</span> </a>
								</div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
									<a href={{url('calendar')}}><div class="listicon6  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon6_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.calendar')}}</span> </a>
								</div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
									<a href={{url('downloadform')}}><div class="listicon7  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon7_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.downloadform')}}</span> </a>
								</div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">
									<a href={{url('statusupdate')}}><div class="listicon8  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon8_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.statusupdate')}}</span> </a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
								<iframe frameborder=0 scrolling=no width="200" height="260" src="https://weblink.settrade.com/banner/banner3.jsp"></iframe>
							{{-- <div class="graphset">
								<div class="row">
									<div class="col">
										<div class="set_list select-display-slide">
											<li class="active" rel="1"> <a href="javascript:void(0)">SET</a> </li>
											<li rel="2" style="margin-left:-7px;"> <a href="javascript:void(0)">  MAI</a> </li>
											<li rel="3" style="margin-left:-7px;"> <a href="javascript:void(0)">  TFEX</a> </li>
										</div>
									</div>
								</div>
								<div class="display-slide" rel="1" style="display:block;">
									<div class="row">
										<div class="col">
											<div class="timeset"> 04/04/62 | 12:35:21 </div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<ul class="listset_tab1">
												<li><a href="#" class="active">สรุปภาวะตลาด</a></li>
												<li><a href="#">สรุปการซื้อขายสิ้นวัน</a></li>
												<li><a href="#">ข้อมูลสถิติ</a></li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<ul class="listset_tab">
												<li><a href="#" class="active">SET</a></li>
												<li><a href="#">SET50</a></li>
												<li><a href="#">SET100</a></li>
												<li><a href="#">sSET</a></li>
												<li><a href="#">SETHD</a></li>
												<li><a href="#">SETCLMV</a></li>
												<li><a href="#">SETTHSI</a></li>
											</ul>
										</div>
									</div>
									<div class="graphset_inc">
									<canvas id="graph" width="250" height="170"> </canvas> 
									  </div>
									<div class="graphset_inc2">
									<div class="table-wrapper-scroll-y my-custom-scrollbar">
										<table class="table set_table">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Last</th>
													<th scope="col">Change</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<th scope="col">SET</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SET50</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SET100</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">sSET</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETHD</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETCLMV</th>
												<td><span class="redtext">1,333.65</span></td>
												<td><span class="redtext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETTHSI</th>
												<td><span class="redtext">1,333.65</span></td>
												<td><span class="redtext">+0.43</span></td>
											</tr>
										  <tr>
										  	<td  colspan="2">Mkt Status</td>
										  	<td>Open(I)</td>
										  </tr>
										    <tr>
										  	<td  colspan="2">Volumn(000)</td>
										  	<td>5,445,434</td>
										  </tr>
										    <tr>
										  	<td  colspan="2">Value (M)</td>
										  	<td>12,444,12</td>
										  </tr>
										  <tr class="threelevels">
										  	<td class="redtext"><i class="fas fa-sort-down"></i><br> 587 <br> Losers</td>
										  	<td class="yellowtext"><i class="fas fa-sort fa-rotate-90"> </i><br> 553 <br> Unchanges</td>
										  	<td class="greentext"><i class="fas fa-sort-up"></i> <br> 587 <br> Gainers</td>
										  </tr>
										  <tr class="threelevels">
										  	<td colspan="3">ราคาดัชนีผลตอบแทนรวม (TRI)</td>
										  </tr>
										  <tr>
										  	<td colspan="3">
										  	<span style="color:dimgray;">07/04/2019</span>
										  	</td>
										  </tr>
										  <tr>
										  <th scope="col">SET TRI</th>
										  	<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
										  </tr>
											  </tbody>
										</table>
										</div>
									</div>
								</div>
								<div class="display-slide" rel="2">
									<div class="row">
										<div class="col">
											<div class="timeset"> 04/04/62 | 12:35:21 </div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<ul class="listset_tab1">
												<li><a href="#" class="active">สรุปภาวะตลาด</a></li>
												<li><a href="#">สรุปการซื้อขายสิ้นวัน</a></li>
												<li><a href="#">ข้อมูลสถิติ</a></li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<ul class="listset_tab">
												<li><a href="#" class="active">SET</a></li>
												<li><a href="#">SET50</a></li>
												<li><a href="#">SET100</a></li>
												<li><a href="#">sSET</a></li>
												<li><a href="#">SETHD</a></li>
												<li><a href="#">SETCLMV</a></li>
												<li><a href="#">SETTHSI</a></li>
											</ul>
										</div>
									</div>
									<div class="graphset_inc">
									<canvas id="graph" width="250" height="170"> </canvas> 
									
									  </div>
									<div class="graphset_inc2">
									<div class="table-wrapper-scroll-y my-custom-scrollbar">
										<table class="table set_table">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Last</th>
													<th scope="col">Change</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<th scope="col">SET</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SET50</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SET100</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">sSET</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETHD</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETCLMV</th>
												<td><span class="redtext">1,333.65</span></td>
												<td><span class="redtext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETTHSI</th>
												<td><span class="redtext">1,333.65</span></td>
												<td><span class="redtext">+0.43</span></td>
											</tr>
										  <tr>
										  	<td  colspan="2">Mkt Status</td>
										  	<td>Open(I)</td>
										  </tr>
										    <tr>
										  	<td  colspan="2">Volumn(000)</td>
										  	<td>5,445,434</td>
										  </tr>
										    <tr>
										  	<td  colspan="2">Value (M)</td>
										  	<td>12,444,12</td>
										  </tr>
										  <tr class="threelevels">
										  	<td class="redtext"><i class="fas fa-sort-down"></i><br> 587 <br> Losers</td>
										  	<td class="yellowtext"><i class="fas fa-sort fa-rotate-90"> </i><br> 553 <br> Unchanges</td>
										  	<td class="greentext"><i class="fas fa-sort-up"></i> <br> 587 <br> Gainers</td>
										  </tr>
										  <tr class="threelevels">
										  	<td colspan="3">ราคาดัชนีผลตอบแทนรวม (TRI)</td>
										  </tr>
										  <tr>
										  	<td colspan="3">
										  	<span style="color:dimgray;">07/04/2019</span>
										  	</td>
										  </tr>
										  <tr>
										  <th scope="col">SET TRI</th>
										  	<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
										  </tr>
											  </tbody>
										</table>
										</div>
									</div>
								</div>
								<div class="display-slide" rel="3">
									<div class="row">
										<div class="col">
											<div class="timeset"> 04/04/62 | 12:35:21 </div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<ul class="listset_tab1">
												<li><a href="#" class="active">สรุปภาวะตลาด</a></li>
												<li><a href="#">สรุปการซื้อขายสิ้นวัน</a></li>
												<li><a href="#">ข้อมูลสถิติ</a></li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<ul class="listset_tab">
												<li><a href="#" class="active">SET</a></li>
												<li><a href="#">SET50</a></li>
												<li><a href="#">SET100</a></li>
												<li><a href="#">sSET</a></li>
												<li><a href="#">SETHD</a></li>
												<li><a href="#">SETCLMV</a></li>
												<li><a href="#">SETTHSI</a></li>
											</ul>
										</div>
									</div>
									<div class="graphset_inc">
									<canvas id="graph" width="250" height="170"> 
</canvas> 
									
									  </div>
									<div class="graphset_inc2">
									<div class="table-wrapper-scroll-y my-custom-scrollbar">
										<table class="table set_table">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Last</th>
													<th scope="col">Change</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<th scope="col">SET</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SET50</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SET100</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">sSET</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETHD</th>
												<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETCLMV</th>
												<td><span class="redtext">1,333.65</span></td>
												<td><span class="redtext">+0.43</span></td>
											</tr>
										  <tr>
												<th scope="col">SETTHSI</th>
												<td><span class="redtext">1,333.65</span></td>
												<td><span class="redtext">+0.43</span></td>
											</tr>
										  <tr>
										  	<td  colspan="2">Mkt Status</td>
										  	<td>Open(I)</td>
										  </tr>
										    <tr>
										  	<td  colspan="2">Volumn(000)</td>
										  	<td>5,445,434</td>
										  </tr>
										    <tr>
										  	<td  colspan="2">Value (M)</td>
										  	<td>12,444,12</td>
										  </tr>
										  <tr class="threelevels">
										  	<td class="redtext"><i class="fas fa-sort-down"></i><br> 587 <br> Losers</td>
										  	<td class="yellowtext"><i class="fas fa-sort fa-rotate-90"> </i><br> 553 <br> Unchanges</td>
										  	<td class="greentext"><i class="fas fa-sort-up"></i> <br> 587 <br> Gainers</td>
										  </tr>
										  <tr class="threelevels">
										  	<td colspan="3">ราคาดัชนีผลตอบแทนรวม (TRI)</td>
										  </tr>
										  <tr>
										  	<td colspan="3">
										  	<span style="color:dimgray;">07/04/2019</span>
										  	</td>
										  </tr>
										  <tr>
										  <th scope="col">SET TRI</th>
										  	<td><span class="greentext">1,333.65</span></td>
												<td><span class="greentext">+0.43</span></td>
										  </tr>
											  </tbody>
										</table>
										</div>
									</div>
								</div>
						
							</div> --}}
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
								<div class="head_nav"> {{$fund_S[0]->StrFundShortName}} </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="{{asset('images/S-EQRMF.png')}}" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนรวมเพื่อการเลี้ยงชีพ (RMF)
									@php
										$date = new DateTime($fund_S[0]->DTENAVDATE);
										$newdate = $date->format('d/m/Y');												
									@endphp
									<br> ณ วันที่ {{$newdate}} </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>{{number_format($fund_S[0]->DECNAV_UNIT,2,'.','')}}</th>
											</tr>
										</thead>
										<tbody>
											@php
												$bath_ep = $fund_S[0]->DACNAVLAST - $fund_S[0]->DACNAVBEFOR;
												$percent_ep = ($bath_ep*100)/100;
											@endphp
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+{{number_format($bath_ep,2,'.','')}}</span></td>
											</tr>
											<tr>
												<td>+{{number_format($percent_ep,2,'.','')}}%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="{{url('/funds_seqrmf')}}" target="_blank" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
					</div>
						<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="box_nav">
								<div class="head_nav"> {{$fund_EP[0]->StrFundShortName}} </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="{{asset('images/EP_LTF.png')}}" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนรวมหุ้นระยะยาว (LTF)
									@php
										$date = new DateTime($fund_EP[0]->DTENAVDATE);
										$newdate = $date->format('d/m/Y');												
									@endphp
									<br> ณ วันที่ {{$newdate}} </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>{{number_format($fund_EP[0]->DECNAV_UNIT,2,'.','')}}</th>
											</tr>
										</thead>
										<tbody>
											@php
												$bath_s = $fund_EP[0]->DACNAVLAST - $fund_EP[0]->DACNAVBEFOR;
												$percent_s = ($bath_s*100)/100;
											@endphp
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">+{{number_format($bath_s,2,'.','')}}</span></td>
											</tr>
											<tr>
												<td>+{{number_format($percent_s,2,'.','')}}%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="{{url('/funds_seqrmf')}}" class="btn btn-primary" target="_blank">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
							<div class="box_nav">
								<div class="head_nav"> &nbsp; </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="{{asset('images/Ep_LTF3.png')}}" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> &nbsp;<br>&nbsp;</div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>0</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td><span class="greentext">0</span></td>
											</tr>
											<tr>
												<td>0</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="{{url('/funds_seqrmf')}}" class="btn btn-primary">ดูข้อมูลเพิ่มเติม</a> </div>
							</div>
						</div>
<!--
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
						
-->
					</div>
					<div class="row wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
						<div class="col">
							<div class="btn_center"> <a href="{{url('mutualfunds')}}" class="btn btn-secondary">ดูทั้งหมด คลิก</a> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_section2 mtedit wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
				<div class="container">
					<div class="row">
						<div class="col wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="title_head1 d-none d-sm-none d-md-block d-lg-block d-xl-block"> ผลการดำเนินงาน <span class="bluetxt">FUND PERFORMANCE</span></div>
							<div class="title_head1 d-block d-sm-block d-md-none d-lg-none d-xl-none"> ผลการดำเนินงาน
								<br> <span class="bluetxt">FUND PERFORMANCE</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg_section3  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
				<div class="container">
				
					<div class="row  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.3s">
						<div class="col">
						<label class="mt-3">เลือกกองทุน</label>
						 <select id="selectbasic" name="selectbasic" class="form-control select_set">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
						</select>
						<script src="//www.chartjs.org/dist/master/Chart.min.js"></script>
						<canvas id="myChart"  height="100"></canvas>
						<script>
								var ctx = document.getElementById('myChart').getContext('2d');
								var myChart = new Chart(ctx, {
									type: 'line',
									data: {
										labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
										datasets: [{
											label: '# of Votes',
											data: [5, 10, 9, 15, 13, 17],
											backgroundColor: 'rgba(255, 159, 64, 0.2)',
											borderColor: 'rgba(255, 159, 64,1 )',
											borderWidth: 2,
											lineTension :0.000001,
										},{
											label: '# of Votes',
											data: [7, 13, 14, 17, 15, 22],
											backgroundColor: 'rgba(255, 99, 132, 0.2)',
											borderColor: 'rgba(255, 99, 132, 1)',
											borderWidth: 2,
											lineTension :0.000001,
										}]
									},
									options: {
										scales: {
											yAxes: [{
												ticks: {
													beginAtZero: true
												}
											}]
										}
									}
								});
						</script>
							
						</div>
					</div>
					<div class="row mt-3">
						<div class="col wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.35s">
							<table class="table table-responsive-lg">
							<thead>
								<tr>
									<th scope="col">NAV as of</th>
									<th scope="col">YTD</th>
									<th scope="col">3M</th>
									<th scope="col">6M</th>
									<th scope="col">1Y</th>
									<th scope="col">3Y</th>
									<th scope="col">5Y</th>
									<th scope="col">10Y</th>
									<th scope="col">Since Inception</th>
								</tr>
							</thead>
							<tbody>
							<tr class="lightgreentxt">
								<th scope="col">EP-LTF</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
							<tr class="lightgreentxt">
								<th scope="col">SET Index (SET)</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
							<tr class="lightgreentxt">
								<th scope="col">SET Total Return Index (SET TRI)</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
							<tr class="lightgreentxt">
								<th scope="col">SET EP-LTF</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
							<tr class="lightgreentxt">
								<th scope="col">SD SET</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
							<tr class="lightgreentxt">
								<th scope="col">SD SET TRI</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
							<tr class="lightgreentxt">
								<th scope="col">INformation Ratio (Vs SET)</th>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
								<td>2.22%</td>
							</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.4s">
							<div class="text_detail">
								<h2>{{trans('messages.warning')}}</h2>
								@foreach ($warning as $k_warning => $v_warning)
								 <li>{!!($warning[$k_warning]['name_'.$lang])!!}</li>
								@endforeach
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
							@foreach($information as $_information => $value_information) 
							
									<div class="item">
										<div class="box_nav">
											<div class="pic_nav">
												<div class="hov-menu-sty2">
													<figure>
														@php
															$photo = json_decode($value_information->photo, true)
														@endphp
														@if(isset($photo) && $photo)
															<a href="{{url('newsinside/'.$value_information->id)}}"><img src="{{asset('uploads/Information/'.$photo[0])}}" class="img-fluid"> </a>
														@endif
													</figure>
												</div>
											</div>
									
											<div class="inno_details">{{($information[$_information]['title_'.$lang])}}</div> 
											<a href="{{url('newsinside/'.$value_information->id)}}" class="readmore">{{trans('messages.read_more')}}</a> 
										</div>
									</div>
								
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
					, controlNav: true, //Boolean: Create navigation for paging control of each slide? Note: Leave true for manualControls usage
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
		<script type="text/javascript">
			$(document).ready(function () {
				$(".select-display-slide > li").click(function () {
					var rel = $(this).attr("rel");
					console.log(rel);
					$('.display-slide').hide();
					$('.display-slide[rel=' + rel + ']').fadeIn();
					$(".select-display-slide > li").removeClass("active");
					$(this).addClass("active");
				});
			});
		</script>
		<script>
						var graph;
					var xPadding = 30;
					var yPadding = 30;
					var data = {
							values: [{
									X: "Jan",
									Y: 12
							}, {
									X: "Feb",
									Y: 28
							}, {
									X: "Mar",
									Y: 18
							}, {
									X: "Apr",
									Y: 34
							}, {
									X: "May",
									Y: 40
							}, ]
					};
					 // Returns the max Y value in our data list
					function getMaxY() {
							var max = 0;
							for (var i = 0; i < data.values.length; i++) {
									if (data.values[i].Y > max) {
											max = data.values[i].Y;
									}
							}
							max += 10 - max % 10;
							return max;
					}
					 // Return the x pixel for a graph point
					function getXPixel(val) {
							return ((graph.width() - xPadding) / data.values.length) * val + (xPadding * 1.5);
					}
					 // Return the y pixel for a graph point
					function getYPixel(val) {
							return graph.height() - (((graph.height() - yPadding) / getMaxY()) * val) - yPadding;
					}
					$(document).ready(function () {
							graph = $('#graph');
							var c = graph[0].getContext('2d');
							c.lineWidth = 2;
							c.strokeStyle = '#eb6b30';
							c.font = 'italic 8pt sans-serif';
							c.textAlign = "center";
							// Draw the axises
							c.beginPath();
							c.moveTo(xPadding, 0);
							c.lineTo(xPadding, graph.height() - yPadding);
							c.lineTo(graph.width(), graph.height() - yPadding);
							c.stroke();
							// Draw the X value texts
							for (var i = 0; i < data.values.length; i++) {
									c.fillText(data.values[i].X, getXPixel(i), graph.height() - yPadding + 20);
							}
							// Draw the Y value texts
							c.textAlign = "right"
							c.textBaseline = "middle";
							for (var i = 0; i < getMaxY(); i += 10) {
									c.fillText(i, xPadding - 10, getYPixel(i));
							}
							c.strokeStyle = '#379494';
							// Draw the line graph
							c.beginPath();
							c.moveTo(getXPixel(0), getYPixel(data.values[0].Y));
							for (var i = 1; i < data.values.length; i++) {
									c.lineTo(getXPixel(i), getYPixel(data.values[i].Y));
							}
							c.stroke();
							// Draw the dots
							c.fillStyle = '#333';
							for (var i = 0; i < data.values.length; i++) {
									c.beginPath();
									c.arc(getXPixel(i), getYPixel(data.values[i].Y), 4, 0, Math.PI * 2, true);
									c.fill();
							}
					});
</script>
</body>

</html>