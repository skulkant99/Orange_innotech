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
		
		
		.container .btnth {
		  position: absolute;
		  top: 100%;
		  left: 35%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		 
		  color: white;
		  font-size: 16px;
		  padding: 12px 24px;
		  border: none;
		  cursor: pointer;
		  border-radius: 5px;
		  text-align: center;
		}
		.container .btnen {
		  position: absolute;
		  top: 100%;
		  left: 65%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		 
		  color: white;
		  font-size: 16px;
		  padding: 12px 24px;
		  border: none;
		  cursor: pointer;
		  border-radius: 5px;
		  text-align: center;
		}
		.tagnew{
            background-color: #eb6b2f;
            display: inline-block;
            color: white;
            padding: 4px 20px;
            letter-spacing: 1px;
            font-size: 0.8em;
            font-weight: bold;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            }
        .box_nav{
            position: relative;
		}
		.graphset h3 {
			text-align: center;
			margin: 3px 0px;
			color: #379494;
			font-family: 'kanit_mediumregular';

		}
		.btn_center {
			margin: 0 auto;
			display: table;
			margin-top: 8px;
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
				height: 34vh;
			}
			.wrap_slidecaption {
				width: 60%;
			}
		}
		
		@media (max-width: 991px) {
			.wrap_parallax {
				height: 54vh;
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

			.wrap_parallax {
				height: 30vh;
			}

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
         @media (max-width: 414px) {
            .wrap_parallax {
				height:40vh;
			}
        }
        
        @media (max-width: 375px) {
            .wrap_parallax {
				height:37vh;
			}
        }
        @media (max-width: 320px) {
            .wrap_parallax {
				height:28vh;
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
									<a href={{url('download/detail/1')}}><div class="listicon4  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
									<div class="listicon4_mobile d-block d-sm-block d-md-block d-lg-none d-xl-none"></div> 
									<span class="text_icon">{{trans('messages.reportfunds')}}</span> </a>
								</div>
								<div class="w-100"></div>
								<div class="col-6 col-md-3 col-lg-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
									<a href={{url('governance')}}><div class="listicon5  d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
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
								<div class="graphset">
										<div class="head_nav text-center" style="font-size:20px"> SET | ThaiBMA </div>
										<h3 style="font-size:15px">หลักทรัพย์วันนี้ <br>
											<span class="boldertext" style="font-size:15px">ข้อมูลจาก Settarde.com</span>
										</h3> 
										<div class="text-center">
											<iframe frameborder=0 scrolling=no width="200" height="260"  src="https://weblink.settrade.com/banner/banner3.jsp"></iframe>  
										</div>
										
									
									<div class="btn_center"> <a href="#" class="btn btn-warning">ดูข้อมูล Thai Bond Market</a> </div>
								
								</div>
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
								<div class="head_nav"> S-EQRMF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="{{asset('images/S-EQRMF.png')}}" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนรวมเพื่อการเลี้ยงชีพ (RMF)
									{{-- {{dd($fund_EP)}} --}}
									@php
										$date = new DateTime($fund_S->DTENAVDATE);
										$newdate = $date->format('d/m/Y');
											$date_create_edit = explode('/', $newdate);												
											$month = $date_create_edit[1];
											$year  = $date_create_edit[2] + 543;
											$day = $date_create_edit[0];
																					
									@endphp
									<br> ณ วันที่ {{$day}}/{{$month}}/{{$year}} </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>{{number_format($fund_S->DECNAV_UNIT,4)}}</th>
											</tr>
										</thead>
										<tbody>
											@php
												
												$bath = $fund_S_sum[0]->DECNAV_UNIT - $fund_S_sum[1]->DECNAV_UNIT;
												$percent = ($bath*100)/$fund_S_sum[1]->DECNAV_UNIT;
											@endphp
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td>
													@if ($bath > 0)
														<span class="greentext">+{{number_format($bath,2)}}</span>
													@else
														<span class="redtext">{{number_format($bath,2)}}</span>
													@endif
												</td>
											</tr>
											<tr>
												<td>
													@if ($percent > 0)
														+{{number_format($percent,2)}}%	
													@else
														{{number_format($percent,2)}}%	
													@endif
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="btn_first"> <a href="{{url('/fundsprice')}}"  class="btn btn-primary">{{ trans('messages.read_more') }}</a> </div>
							</div>
					</div>
						<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="box_nav">
								<div class="head_nav"> EP-LTF </div>
								<div class="pic_nav">
									<div class="hov-menu-sty">
										<figure>
											<a href="#"><img src="{{asset('images/EP_LTF.png')}}" class="img-fluid"> </a>
										</figure>
									</div>
								</div>
								<div class="detail_nav"> กองทุนรวมหุ้นระยะยาว (LTF)
									
									@php
										$date = new DateTime($fund_EP->DTENAVDATE);
										$newdate = $date->format('d/m/Y');
											$date_create_edit = explode('/', $newdate);												
											$month = $date_create_edit[1];
											$year  = $date_create_edit[2] + 543;
											$day = $date_create_edit[0];
																				
									@endphp
									<br> ณ วันที่ {{$day}}/{{$month}}/{{$year}} </div>
								<div class="table_nav">
									<table class="table table-bordered tablenavstyle">
										<thead>
											<tr>
												<td>มูลค่าหน่วยลงทุน</td>
												<th>{{number_format($fund_EP->DECNAV_UNIT,4)}}</th>
											</tr>
										</thead>
										<tbody>
											@php
												$bath = $fund_EP_sum[0]->DECNAV_UNIT - $fund_EP_sum[1]->DECNAV_UNIT;
												$percent = ($bath*100)/$fund_EP_sum[1]->DECNAV_UNIT;
											@endphp
											<tr>
												<td rowspan="2" style="vertical-align:middle;">เปลี่ยนแปลง</td>
												<td>
													@if ($bath > 0)
														<span class="greentext">+{{number_format($bath,2)}}</span>	
													@else
														<span class="redtext">{{number_format($bath,2)}}</span>	
													@endif
												</td>
											</tr>
											<tr>
												<td>
													@if ($percent > 0)
														+{{number_format($percent,2)}}%	
													@else
														{{number_format($percent,2)}}%	
													@endif
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div class="btn_first"> <a href="{{url('/fundsprice')}}" class="btn btn-primary" >{{ trans('messages.read_more') }}</a> </div>
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
								<div class="btn_first"> <a href="#" class="btn btn-primary">{{ trans('messages.read_more') }}</a> </div>
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
							<div class="btn_center"> <a href="{{url('/fundsprice')}}" class="btn btn-secondary">{{ trans('messages.view_all') }}</a> </div>
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
						<label class="mt-3">{{ trans('messages.choose_fund') }}</label>
							<select id="funds" name="selectbasic" class="form-control select_set" onchange="getFund(this)">
								@foreach ($fund as $k_fund => $v_fund)
									<option value="{{$v_fund->fund_short_name}}">{{$fund[$k_fund]['name_'.$lang]}}</option>
								@endforeach
							</select>
							@php
										$date_create = $perfor[0]->date;

										$date_create_edit = explode('-', $date_create);
										$month = $date_create_edit[1];
										$year   = $date_create_edit[0] + 543;
										$day  = $date_create_edit[2];

					
										switch ($month) {
											case '01':
												$month = "มกราคม";
												break;
											case '02':
												$month = "กุมภาพันธ์";
												break;
											case '03':
												$month = "มีนาคม";
												break;
											case '04':
												$month = "เมษายน";
												break;
											case '05':
												$month = "พฤษภาคม";
												break;
											case '06':
												$month = "มิถุนายน";
												break;
											case '07':
												$month = "กรกฎาคม";
												break;
											case '08':
												$month = "สิงหาคม";
												break;
											case '09':
												$month = "กันยายน";
												break;
											case '10':
												$month = "ตุลาคม";
												break;
											case '11':
												$month = "พฤศจิกายน";
												break;
											case '12':
												$month = "ธันวาคม";
												break;
											default:
												# code...
												break;
										}
									@endphp
						<p style="float:right;" id="date">ข้อมูล ณ วันที่ {{ $day}} {{$month}} {{$year}}</p>
						<canvas id="myChart"  height="100"></canvas>
						
						</div>
					</div>
					<div class="row mt-3">
						<div class="col wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.35s">
							<table class="table table-responsive-lg">
							<thead>
								<tr>
									<th scope="col">{{ trans('messages.nav_as_of') }}</th>
									<th scope="col">{{ trans('messages.YTD') }}</th>
									<th scope="col">{{ trans('messages.3M') }}</th>
									<th scope="col">{{ trans('messages.6M') }}</th>
									<th scope="col">{{ trans('messages.1Y') }}</th>
									<th scope="col">{{ trans('messages.3Y') }}</th>
									<th scope="col">{{ trans('messages.5Y') }}</th>
									<th scope="col">{{ trans('messages.10Y') }}</th>
									<th scope="col">{{ trans('messages.since_snception') }}</th>
								</tr>
							</thead>
								<tbody id="performance">
							<tr class="lightgreentxt" id="fund">
								<th scope="col">EP-LTF</th>
								@foreach ($perfor as $k_perfor => $v_perfor)
									@if ($v_perfor->sort_id <= 8)
										@if ($v_perfor->fund != 0)
											<td>{{$v_perfor->fund}}</td>	
										@else
											<td>N/A</td>
										@endif
									@endif
								@endforeach	
							</tr>
							<tr class="lightgreentxt" id="gain">
								<th scope="col">{{ trans('messages.THSETRI_Index') }}</th>
								@foreach ($perfor as $k_perfor => $v_perfor)
									@if ($v_perfor->sort_id <= 8)
										@if ($v_perfor->gain != 0)
											<td>{{$v_perfor->gain}}</td>	
										@else
											<td>N/A</td>
										@endif
									@endif
								@endforeach	
							</tr>
							<tr class="lightgreentxt" id="result">
								<th scope="col">{{ trans('messages.Sd_of') }} EP-LTF </th>
								@foreach ($perfor as $k_perfor => $v_perfor)
									@if ($v_perfor->sort_id <= 8)
										@if ($v_perfor->result != 0)
											<td>{{$v_perfor->result}}</td>	
										@else
											<td>N/A</td>
										@endif
									@endif
								@endforeach	
							</tr>
							<tr class="lightgreentxt" id="Indicator">
								<th scope="col">{{ trans('messages.Sd_of_THSETRI') }}</th>
								@foreach ($perfor as $k_perfor => $v_perfor)
									@if ($v_perfor->sort_id <= 8)
										@if ($v_perfor->Indicator != 0)
											<td>{{$v_perfor->Indicator}}</td>	
										@else
											<td>N/A</td>
										@endif
									@endif
								@endforeach		
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
							<p>{{ trans('messages.news_head') }}</p>
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
												@if ($value_information->active == 1)
													<div class="tagnew">NEW</div>	
												@endif
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
											@if ($value_information->status_pdf != 1)
												<a href="{{url('newsinside/'.$value_information->id)}}" class="readmore">{{trans('messages.read_more')}}</a> 	
											@else
												<a href="{{url('uploads/'.$value_information->file)}}" target="_blank" class="readmore">{{trans('messages.read_more')}}</a> 												
											@endif
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
			
				{{-- <a data-fancybox="popupdesktop" href="{{asset('uploads/Popup/'.$popup->photo_desktop)}}" class="popupdesktop"></a>
				<a data-fancybox="popuipad" href="{{asset('uploads/Popup/'.$popup->photo_ipad)}}" class="popuipad"></a>
				<a data-fancybox="popupxs" href="{{asset('uploads/Popup/'.$popup->photo_mobile)}}" class="popupxs"></a>   --}}

				<a data-fancybox="popupdesktop" href="#desktop" class="popupdesktop"></a>
				<a data-fancybox="popuipad" href="#ipad" class="popuipad"></a>
				<a data-fancybox="popupxs" href="#iphone" class="popupxs"></a>
			   
			   <div style="display:none;">
				   <div id="desktop"><a href="{{$popup->link}}" target="_blank"><img src="{{asset('uploads/Popup/'.$popup->photo_desktop)}}" class="d-none d-sm-none d-md-none d-lg-block d-xl-block img-fluid">
				   	<img src="{{asset('uploads/Popup/'.$popup->photo_desktop)}}" class="d-block d-sm-block d-md-block d-lg-none d-xl-none img-fluid">
				   </a></div>
			   </div>
			   <div style="display:none;">
					<div id="ipad"><a href="{{$popup->link}}" target="_blank"><img src="{{asset('uploads/Popup/'.$popup->photo_ipad)}}" class="d-none d-sm-none d-md-none d-lg-block d-xl-block img-fluid">
					<img src="{{asset('uploads/Popup/'.$popup->photo_ipad)}}" class="d-block d-sm-block d-md-block d-lg-none d-xl-none img-fluid">
					</a></div>
				</div>
				<div style="display:none;">
					<div id="iphone"><a href="{{$popup->link}}" target="_blank"><img src="{{asset('uploads/Popup/'.$popup->photo_mobile)}}" class="d-none d-sm-none d-md-none d-lg-block d-xl-block img-fluid">
					<img src="{{asset('uploads/Popup/'.$popup->photo_mobile)}}" class="d-block d-sm-block d-md-block d-lg-none d-xl-none img-fluid">
					</a></div>
				</div>
			
				
			
		
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
					    
						    <button type="button" class="btn btn-info" onclick="closeWin()" data-dismiss="modal">ปฎิเสธ</button>
        					<button type="button" class="btn btn-info" data-dismiss="modal">ยอมรับ</button>
			
					    </div>
					</div>
    		</div>
			</div>
		</div>



		
		@include('inc_footer')
		<script>
			function closeWin() {
					
					window.open("https://www.google.com/", "_self");
					window.close();
				}
		</script>	
		<script type="text/javascript">
			$(document).ready(function(){
					  $('[data-fancybox="popupdesktop"]').fancybox({
						   //toolbar : false
					  });
					  $('[data-fancybox="popupxs"]').fancybox({
						   //toolbar : false
					  });
					  $('[data-fancybox="popuipad"]').fancybox({
						   //toolbar : false
					  });
					  
		  
					  if (Modernizr.mq('(max-width: 375px)')) {
						 $( ".popupxs" ).trigger( "click" );
					  }
					  else if (Modernizr.mq('(max-width: 767px)')){
						
						 $( ".popuipad" ).trigger( "click" );
					  } 
					  else{

						$( ".popupdesktop" ).trigger( "click" );
					  }
				  });
			
				
								
		   </script>
		 
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
			<script src="//www.chartjs.org/dist/master/Chart.min.js"></script>
		
		<script>
			
			function getFund(selectObject) {
					var fund = selectObject.value;  
					$.ajax({
						method: "GET",
						url: "{{url('selectperformance')}}",
						data: { fund: fund }
					}).done(function( res ) {
						$('#fund').html('');
						$('#gain').html('');
						$('#result').html('');
						$('#Indicator').html('');
						$('#date').html('');
						var date_create = res[0].date;

						var date_create_edit = date_create.split('-');
						var month = date_create_edit[1];
						var year   = parseInt(date_create_edit[0]) + 543;
						var day  = date_create_edit[2];
									switch (month) {
											case '01':
												month = "มกราคม";
												break;
											case '02':
												month = "กุมภาพันธ์";
												break;
											case '03':
												month = "มีนาคม";
												break;
											case '04':
												month = "เมษายน";
												break;
											case '05':
												month = "พฤษภาคม";
												break;
											case '06':
												month = "มิถุนายน";
												break;
											case '07':
												month = "กรกฎาคม";
												break;
											case '08':
												month = "สิงหาคม";
												break;
											case '09':
												month = "กันยายน";
												break;
											case '10':
												month = "ตุลาคม";
												break;
											case '11':
												month = "พฤศจิกายน";
												break;
											case '12':
												month = "ธันวาคม";
												break;
											
										}
				
						if(res[0].type == 'EP-LTF'){
							var fund_per = `<th scope="col">EP-LTF</th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.fund != 0){
																fund_per += `<td>`+v.fund+`</td>`;
															}else{
																fund_per += `<td>N/A</td>`;
															}
															
														}								
												});	
							var	gain = `<th scope="col">{{ trans('messages.THSETRI_Index') }}</th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.gain != 0){
																gain += `<td>`+v.gain+`</td>`;
															}else{
																gain += `<td>N/A</td>`;
															}
														}								
												});	
							var	result = `<th scope="col">{{ trans('messages.Sd_of') }} EP-LTF </th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.result != 0){
																result += `<td>`+v.result+`</td>`;
															}else{
																result += `<td>N/A</td>`;
															}
														}								
												});	
							var	Indicator = `<th scope="col">{{ trans('messages.Sd_of_THSETRI') }}</th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.Indicator != 0){
																Indicator += `<td>`+v.Indicator+`</td>`;
															}else{
																Indicator += `<td>N/A</td>`;
															}
														}								
												});
							var date = `ข้อมูล ณ วันที่ `+day+` `+month+` `+year ;
							 
						}else{
							var fund_per = `<th scope="col">S-EQRMF</th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.fund != 0){
																fund_per += `<td>`+v.fund+`</td>`;
															}else{
																fund_per += `<td>N/A</td>`;
															}
														}								
												});	
							var	gain = `<th scope="col">{{ trans('messages.THSETRI_Index') }}</th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.gain != 0){
																gain += `<td>`+v.gain+`</td>`;
															}else{
																gain += `<td>N/A</td>`;
															}
														}								
												});	
							var	result = `<th scope="col">{{ trans('messages.Sd_of') }} S-EQRMFF </th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.result != 0){
																result += `<td>`+v.result+`</td>`;
															}else{
																result += `<td>N/A</td>`;
															}
														}								
												});	
							var	Indicator = `<th scope="col">{{ trans('messages.Sd_of_THSETRI') }}</th>`;
												$.each(res,function(k,v){
														if(v.sort_id <= 8){
															if(v.Indicator != 0){
																Indicator += `<td>`+v.Indicator+`</td>`;
															}else{
																Indicator += `<td>N/A</td>`;
															}
														}								
												});
							var date = `ข้อมูล ณ วันที่ `+day+` `+month+` `+year ;
						}
					
						
					console.log(fund_per);
					$('#fund').append(fund_per);
					$('#gain').append(gain);
					$('#result').append(result);
					$('#Indicator').append(Indicator);	
					$('#date').append(date);
					var year = [];
      				var fund_select = [];
					var gain_select = [];
					var fund_type = res[0].type;
					for(var i in res) {
						if(res[i].sort_id > 8){
							year.push(res[i].name);
							fund_select.push(res[i].fund);
							gain_select.push(res[i].gain);
						}
						
					}
					
					var ctx = document.getElementById('myChart').getContext('2d');
					var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: year,
						datasets: [{
							label: fund_type,
							data: fund_select,
							backgroundColor: 'rgba(255, 159, 64, 0.2)',
							borderColor: 'rgba(255, 159, 64,1 )',
							borderWidth: 2,
							lineTension :0.000001,
						},{
							label: 'Benchmark',
							data: gain_select,
							backgroundColor: 'rgba(55, 148, 148, 0.2)',
							borderColor: 'rgba(55, 148, 148, 1)',
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
					});
					
					
				}
		</script>
			<script>
			$( document ).ready(function() {
				$.ajax({
						method: "GET",
						url: "{{url('selectperformance')}}",
						data: { fund: 'EP-LTF' }
					}).done(function( res ) {
						var year = [];
						var fund_select = [];
						var gain_select = [];
						var fund_type = res[0].type;
						for(var i in res) {
							if(res[i].sort_id > 8){
								year.push(res[i].name);
								fund_select.push(res[i].fund);
								gain_select.push(res[i].gain);
							}
							
						}
						
						var ctx = document.getElementById('myChart').getContext('2d');
						var myChart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: year,
							datasets: [{
								label: fund_type,
								data: fund_select,
								backgroundColor: 'rgba(255, 159, 64, 0.2)',
								borderColor: 'rgba(255, 159, 64,1 )',
								borderWidth: 2,
								lineTension :0.000001,
							},{
								label: 'Benchmark',
								data: gain_select,
								backgroundColor: 'rgba(55, 148, 148, 0.2)',
								borderColor: 'rgba(55, 148, 148, 1)',
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
			$( ".btn" ).click(function() {
				// $('#ModalEdit').modal('hide');
			});
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