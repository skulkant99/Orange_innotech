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
		#divToPrint{
			display:none;
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
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.contact')}}</li>
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
							{!!($address['name_'.$lang])!!}
						</div>
						
						
						</div>
						<div class="col-12 col-md-6"> 
							<div class="googlemap">
								<iframe src="{{$location->name_th}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
								<li><img src="{{asset('images/mail.png')}}"> Email marketing@innotechasset.com</li>
							</div>
						</div>
						<div class="col-12 col-md-6"> 
							<div class="title_head2 wow fadeInUp"> <span class="bluetxt">INFORM</span> แจ้งเบาะแส </div>
							<form id="add_contact">
								<div class="contactform">
									<label>ชื่อ-นามสกุล</label>
										<input id="name" name="name" type="text" class="form-control input-md">
									<label>อีเมล</label>
										<input id="email" name="email" type="text" class="form-control input-md">
									<label>หัวข้อ</label>
										<input id="title" name="title" type="text" class="form-control input-md">
									<label>ข้อความ</label>
										<textarea class="form-control" id="detail" name="detail" rows="6"></textarea>
									<div class="btn_first"> 
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
										<button type="submit"  class="btn btn-primary">ส่งข้อมูล</button>
									</div>
								</div>
							</form>
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
					@foreach ($career as $k_career => $v_career)
						<div class="col-6 col-lg-4">
								<div class="box_career">
								<a href="#{{$v_career->sort_id}}" class="text_job inline">{{$career[$k_career]['name_'.$lang]}}
								<span class="viewcareer"><i class="fas fa-chevron-circle-right"></i></span></a>
								<a href="{{asset('uploads/'.$v_career->file)}}" target="_blank" class="btnapply">Apply Now</a>
							</div>
						</div>
					@endforeach
					
					{{-- <div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#data" class="text_job inline">ผู้ประสานงานฝ่ายขาย
							<span class="viewcareer"><i class="fas fa-chevron-circle-right"></i></span></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
					<div class="box_career">
							<a href="#data" class="text_job inline">ผู้ประสานงานฝ่ายขาย
							<span class="viewcareer"><i class="fas fa-chevron-circle-right"></i></span></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#data" class="text_job inline">ผู้ประสานงานฝ่ายขาย
							<span class="viewcareer"><i class="fas fa-chevron-circle-right"></i></span></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#data" class="text_job inline">ผู้ประสานงานฝ่ายขาย
							<span class="viewcareer"><i class="fas fa-chevron-circle-right"></i></span></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div>
					<div class="col-6 col-lg-4">
						<div class="box_career">
							<a href="#data" class="text_job inline">ผู้ประสานงานฝ่ายขาย
							<span class="viewcareer"><i class="fas fa-chevron-circle-right"></i></span></a>
							<a href="#" class="btnapply">Apply Now</a>
						</div>
					</div> --}}
				</div>
			</div>
			<br><br>
		</main>
			
			
					@foreach ($career as $k_career => $v_career)
					<div id="divToPrint">
								<div id="{{$v_career->sort_id}}" >
										<div class="jobdetail_box_title ">
											<h2>รายละเอียดตำแหน่งงาน </h2>
									</div>
										<div class="jobdetail_box">
											<h2>{{$career[$k_career]['name_'.$lang]}}</h2>
											<div class="row">
												<div class="col">
												<h4><img src="images/icon_job_03.png"> คุณสมบัติ</h4>
													{!!($career[$k_career]['properties_'.$lang])!!}
												</div>
												<div class="col">
													<h4><img src="images/icon_job_05.png"> รายละเอียดของงาน</h4>
													{!!($career[$k_career]['detail_'.$lang])!!}
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<h4><img src="images/icon_job_10.png"> สวัสดิการ</h4>
													{!!($career[$k_career]['benefit_'.$lang])!!}
													<a href="#" class="btn btn-primary"  onclick='printDiv();'>Print <i class="fas fa-print"></i></a> 
												
												</div>
											</div>
									</div>	
								</div>	
							</div>
					@endforeach
				
			
				{{-- <div style="display:none">
						<div id="data">
								<div class="jobdetail_box_title">
									<h2>รายละเอียดตำแหน่งงาน </h2>
							</div>
								<div class="jobdetail_box">
									<h2>พนักงานประสานงานฝ่ายขาย</h2>
									<div class="row">
										<div class="col">
										<h4><img src="images/icon_job_03.png"> คุณสมบัติ</h4>
											<p>- เพศหญิง อายุ 23-35 ปี <br>
											- วุฒิการศึกษา ปวส. <br>
											- ปริญญาตรีในสาขาการบัญชี หรือสาขาที่เกี่ยวข้อง <br>
											- มีประสบการณ์ในงานด้านบัญชีไม่ต่ำกว่า 1 ปี <br>
											- มีความรู้ความเข้าใจด้านระบบบัญชี <br>
											- สามารถใช้โปรแกรมสำเร็จรูปทางบัญชี <br>
											มีความละเอียดรอบครอบ และซื่อสัตย์ต่องานที่ทำ</p>
										</div>
										<div class="col">
											<h4><img src="images/icon_job_05.png"> รายละเอียดของงาน</h4>
											<p>รับผิดชอบบันทึกบัญชี เอกสารด้านบัญชี วางบิล 
												รับเช็ค ใบกำกับภาษี จัดทำรายงาน</p>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col">
											<h4><img src="images/icon_job_10.png"> สวัสดิการ</h4>
											<p>- โบนัสประจำปี  <br>
												- เบี้ยขยัน  <br>
												- ประกันสังคม   <br>
												- ประกันอุบัติเหตุ(กลุ่ม)  <br>
												- เสื้อฟอร์ม </p> 
									<a href="#" class="btn btn-primary">Print <i class="fas fa-print"></i></a> 
									
										</div>
									</div>
							</div>	
						</div>
					</div> --}}

					
		
		@include('inc_footer')
				<script>
					$('#add_contact').validate({
						errorElement: 'div',
						errorClass: 'invalid-feedback',
						focusInvalid: false,
						rules: {
							name: {
									required: true,
								},
							email: {
									required: true,
							},
							detail: {
									required: true,
								},
						
						
						},
						messages: {
							name: {
										required: "Please enter your name",
								},
							email : {
										required: "Please enter your email",
							},
							detail: {
										required: "Please enter detail",
								},
							
						},
						highlight: function (e) {
								// validate_highlight(e);
						},
						success: function (e) {
								validate_success(e);
						},
						errorPlacement: function (error, element) {
								validate_errorplacement(error, element);
						},
						submitHandler: function (form) {
								var btn = $(form).find('[type="submit"]');
								btn.attr('disabled',true);
								$.ajax({
										method : "POST",
										url : "{{url('/AddContact')}}",
										dataType : 'json',
										data : $(form).serialize()
								}).done(function(rec){
										btn.attr('disabled',false);
										if(rec.status==1){
											// window.location = "{{url('profile')}}";
												resetFormCustom(form);
												swal('INFORM','สำเร็จ',"success");
			
										}else{
											swal(rec.title,rec.content,"error");
												btn.attr('disabled',false)
										}
								}).fail(function(){
										swal("สมัครสมาชิกผิดผลาด","อีเมล์มีการใช้งานแล้ว กรุณาตรวจสอบอีกครั้ง","error");
										btn.attr('disabled',false)
								});
						},
						invalidHandler: function (form) {
						}
				});
			</script>
			<script type="text/javascript">  
				
				function printDiv() 
				{

					var Print=document.getElementsById("divToPrint");

					var newWin=window.open('','Print-Window');

					newWin.document.open();
					newWin.document.write('<html><body onload="window.print()">'+Print.innerHTML+'</body></html>');

					newWin.document.close();

					setTimeout(function(){newWin.close();},1);

				}
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
			<script>
				$('.pagination-inner a').on('click', function () {
					$(this).siblings().removeClass('pagination-active');
					$(this).addClass('pagination-active');
				})
			</script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('.inline').fancybox({
						openEffect: 'elastic'
						, closeEffect: 'elastic'
						, prevEffect: 'none'
						, nextEffect: 'none'
						, width: '100%'
						, maxWidth: '900'
						, height: '80%'
						, autoScale: true
						, autoSize: true
					});
				});
			</script>
			
			
</body>

</html>