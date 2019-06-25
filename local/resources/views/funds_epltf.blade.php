<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="fundsprice"; ?>
</head>

<body>
	<style>
	
		
		.title_head1 {
			text-align: left;
		}
		.funds_table{
			text-align: left;
		}
		.funds_table thead tr th{
			text-align: center;
		}
		.funds_table.table-bordered th, .funds_table.table-bordered td{
			border:1px solid #464646;
		}

		.funds_table_perf {
			background-color: #f9f9f9;
			color: black;
		}
		
		.funds_table_perf thead {
			font-size: 1.3em;
			font-family: 'Kanit';
		}
		
		.funds_table_perf thead th {
			border-left: none;
			border-right: none;
		}
		
		.funds_table_perf .setheigh {
			height: 200px;
			font-family: 'Kanit';
		}
		
		.btn-primary {
			border-radius: 50px;
			padding: 10px 30px;
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
							<li class="breadcrumb-item"><a href="{{url('/fundsepltf')}}">{{trans('messages.nav')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว</li>
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
								<div class="bannertop_funds_detail">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h1>กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว
													<br><span class="boldtext"> EQUITY PRO LTF (EP-LTF)</span></h1> </div>
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
				<div class="row mt-5">
					<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="pic_icon"> <img src="images/funds_price_detail_05.png"> </div>
						<div class="righttext">
							<div class="title_head1"> กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว
								<br> <span class="bluetxt">EQUITY PRO LTF (EP-LTF)</span> </div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col">
						<div class="detail_content">
							@foreach ($fund as $k_fund => $v_fund)
								@if ($v_fund->sort_id == 1)
									{!!($fund[$k_fund]['detail_'.$lang])!!}
								@endif
							@endforeach
							{{-- <h2>เหมาะสำหรับ</h2>
							<li><i class="far fa-arrow-alt-circle-right"></i> เหมาะสมกับเงินลงทุนของผู้ลงทุนที่ต้องการสร้างผลตอบแทนจากการลงทุนในหุ้น และยอมรับความเสี่ยงจากการลงทุนในหุ้นได้ </li>
							<li><i class="far fa-arrow-alt-circle-right"></i> บุคคลธรรมดาที่ต้องการลงทุนระยะยาว โดยหากลงทุนตามเงื่อนไขที่กฎหมายกำหนดจะได้รับสิทธิประโยชน์ทางภาษี</li>
							<br>
							<br>
							<h2>วัตถุประสงค์</h2>
							<li><i class="far fa-arrow-alt-circle-right"></i> เพื่อส่งเสริมการลงทุนระยะยาว และการออมแบบผูกพันต่อเนื่องของผู้ถือหน่วยลงทุน
								<br> บุคคลธรรมดาที่ต้องการลงทุนระยะยาว โดยหากลงทุนตามเงื่อนไขที่กฎหมายกำหนดจะได้รับสิทธิประโยชน์ทางภาษี</li>
							<br>
							<br>
							<h2>นโยบายการลงทุน</h2>
							<li> ลงทุนในหุ้นของบริษัทจดทะเบียนในตลาดหลักทรัพย์และ/หรือตลาดหลักทรัพย์ใหม่ (MAI)โดยเฉลี่ยในรอบปีบัญชีไม่น้อยกว่าร้อยละ 65 ของมูลค่าทรัพย์สินสุทธิของกองทุนรวม อนึ่งกองทุนอาจลงทุนในตราสารที่มีลักษณะของสัญญาซื้อขายล่วงหน้าแฝง(Structured Note) เพื่อป้องกันความผันผวนของราคาตลาดหรือมีไว้ซึ่งสัญญาซื้อขายล่วงหน้าเพื่อการลดหรือป้องกันความเสี่ยงความผันผวน ของตลาดหรือเพื่อเพิ่มประสิทธิภาพการบริหารการลงทุน </li>
							<br>
							<br> --}}
							<h2><img src="images/funds_price_detail_08.png">{{trans('messages.risk_level')}}</h2>
							@foreach ($fund as $k_fund => $v_fund)
								@if ($v_fund->sort_id == 2)
									{!!($fund[$k_fund]['detail_'.$lang])!!}
								@endif
							@endforeach
							{{-- <table class="table funds_table_perf table-bordered table-responsive-lg">
								<thead>
									<tr>
										<th scope="col">1</th>
										<th scope="col">2</th>
										<th scope="col">3</th>
										<th scope="col">4</th>
										<th scope="col">5</th>
										<th scope="col">6</th>
										<th scope="col">7</th>
										<th scope="col">8</th>
									</tr>
								</thead>
								<tbody>
									<tr class="setheigh">
										<td>กองทุนรวม ตลาดเงินที่ลงทุน เฉพาะในประเทศ</td>
										<td>กองทุนรวม ตลาดเงินที่ลงทุน ในต่างประเทศ บางส่วน</td>
										<td>กองทุนรวม พันธบัตร รัฐบาล</td>
										<td>กองทุนรวม ตราสารหนี้</td>
										<td>กองทุน รวมผสม</td>
										<td>กองทุนรวม ตราสาร แห่งทุน</td>
										<td>กองทุนรวม หมวด อุตสาหกรรม</td>
										<td>กองทุนรวมที่ เน้นลงทุนใน ทรัพย์สิน ทางเลือก</td>
									</tr>
									<tr>
										<td colspan="3" class="risk_lower">ต่ำมาก</td>
										<td class="risk_low">ต่ำ</td>
										<td colspan="2" class="risk_mid">ปานกลาง</td>
										<td colspan="2" class="risk_high">สูง</td>
									</tr>
									<tr>
										<td colspan="8" class="bgblue">ระดับความเสี่ยง</td>
									</tr>
								</tbody>
							</table> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid nopad">
				<div class="row">
					<div class="col">
						<div class="bggray">
							<div class="container">
								<div class="row">
									<div class="col">
										@foreach ($fund as $k_fund => $v_fund)
											@if ($v_fund->sort_id == 3)
												{!!($fund[$k_fund]['detail_'.$lang])!!}
											@endif
										@endforeach
										{{-- <table class="table funds_table table-bordered table-responsive-lg">
											<thead>
												<tr>
													<th scope="col">การซื้อขายหน่วยลงทุน</th>
													<th scope="col">ค่าธรรมเนียมและค่าใช่จ่าย ที่เรียกเก็บจากผู้ถือหน่วย</th>
												</tr>
											</thead>
											<tbody>
												<tr class="setheigh">
													<td style="min-width:400px;">
														<div class="row">
															<div class="col"> ลงทุนครั้งแรกขั้นต่ำ </div>
															<div class="col"> 1,000 บาท </div>
														</div>
														<div class="row">
															<div class="col"> ลงทุนครั้งต่อไป </div>
															<div class="col"> 500 บาท </div>
														</div>
														<div class="row">
															<div class="col"> ขายคืนขั้นต่ำ	 </div>
															<div class="col"> 1,000 บาท </div>
														</div>
														<div class="row">
															<div class="col"> วันเวลาทำการ </div>
															<div class="col"> ซื้อได้ทุกวันทำการภายใน 15:30 น. <br>ขายได้ทุกวันทำการภายใน 14:00 น. </div>
														</div>
													</td>
													<td>
														
														<div class="row">
															<div class="col"> ค่าธรรมเนียมการขาย		 </div>
															<div class="col"> ไม่มี</div>
														</div>
														<div class="row">
															<div class="col"> ค่าธรรมเนียมการรับซื้อคืน	 </div>
															<div class="col"> ไม่เกิน 0.04% ต่อปี </div>
														</div>
														<div class="row">
															<div class="col"> ค่าธรรมเนียมการสับเปลี่ยนเข้า		 </div>
															<div class="col"> ไม่มี</div>
														</div>
														<div class="row">
															<div class="col">ค่าธรรมเนียมการสับเปลี่ยนออก		 </div>
															<div class="col"> ไม่มี </div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<table class="table funds_table table-bordered table-responsive-lg">
											<thead>
												<tr>
													<th scope="col">ค่าธรรมเนียมและค่าใช่จ่าย<br>ที่เรียกเก็บจากกองทุน (% ของมูลค่าทรัพย์สินสุทธิ)</th>
													<th scope="col">ค่าใช่จ่ายในการโฆษณา <br>ประชาส้มพันธ์และส่งเสริมการขายที่เรียกเก็บจากกองทุน</th>
												</tr>
											</thead>
											<tbody>
												<tr class="setheigh">
													<td style="min-width:425px;">
														<div class="row">
															<div class="col"> ค่าธรรมเนียมการจัดการ	 </div>
															<div class="col"> ไม่เกิน 1.25% ต่อปี</div>
														</div>
														<div class="row">
															<div class="col"> ค่าธรรมเนียมผู้ดูแลผลประโยชน์	 </div>
															<div class="col"> ไม่เกิน 0.04% ต่อปี</div>
														</div>
														<div class="row">
															<div class="col"> ค่าธรรมเนียมนายทะเบียน		 </div>
															<div class="col"> ไม่เกิน 0.07% ต่อปี</div>
														</div>
														<div class="row">
															<div class="col"> ค่าใช้จ่ายอื่นๆ	 </div>
															<div class="col"> ตามที่จ่ายจริง ไม่เกิน 0.25% ต่อปี</div>
														</div>
													</td>
													<td>
														
														<div class="row">
															<div class="col"> ในช่วงเสนอขายหน่วยลงทุนครั้งแรก </div>
															<div class="col"> ไม่มี </div>
														</div>
														<div class="row">
															<div class="col"> ภายหลังเสนอขายหน่วยลงทุนครั้งแรก	 </div>
															<div class="col"> ไม่มี </div>
														</div>
													
													</td>
												</tr>
											</tbody>
										</table> --}}
							
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row mt-5">
					<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="detail_content">
							<h2><img src="{{asset('images/funds_price_detail_12.png')}}"> เอกสารข้อมูลกองทุน (ดาวน์โหลด)</h2>
							<div class="list_download_ep"> 
								<a href="{{url('/downloadreport')}}" class="btn btn-primary">รายงานสถานะการลงทุนในแต่ละเดือน <i class="far fa-file-alt"></i></a> 
								<a href="{{url('/downloadreport')}}" class="btn btn-primary">หนังสือชี้ชวนส่วนสรุป <i class="far fa-file-alt"></i></a> 
								<a href="{{url('/downloadform')}}" class="btn btn-primary">รายละเอียดโครงการจัดการ <i class="far fa-file-alt"></i></a> 
								<a href="{{url('/downloadform')}}" class="btn btn-primary">คู่มือภาษี <i class="far fa-file-alt"></i></a> 
							</div>
						</div>
					</div>
				</div>
				<br>
				<br> </div>
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