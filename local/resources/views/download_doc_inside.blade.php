<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')<?php $pageName="download_doc_inside"; ?>
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
							<li class="breadcrumb-item"><a href="{{url('downloadreport')}}">{{trans('messages.report')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page"> 
								@foreach ($file_type as $k_file_type => $_file_type)
									{{$file_type[$k_file_type]['name_'.$lang]}}
								@endforeach 
							</li>
							

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
		<main>
		<div class="container">
			<div class="row mt-5">
				<div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
					<div class="title_head1"> 
						@foreach ($file_type as $k_file_type => $_file_type)
							{{$file_type[$k_file_type]['name_'.$lang]}}
						@endforeach   
					</div>
				</div>
			</div>
			<div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
				<div class="row">
					<div class="col">
						<div class="downloaddetail">
							@foreach ($fund_type as $k_fund_type => $_fund_type)
								<h2>{{$fund_type[$k_fund_type]['name_'.$lang]}}</h2>
								@foreach ($_fund_type->FileReport as $data_file)
									@if (is_null($data_file->month_no))
										<div class="row">
											<div class="col">
												{{$data_file->years_name}}	{{$data_file->name_th}}
											</div>
											<div class="col">
												<a href="{{asset('uploads/'.$data_file->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
											</div>
										</div>
									@else
										<div class="row">
											<div class="col">
												{{$data_file->years_name}}	{{$data_file->months_name}}
											</div>
											<div class="col">
												<a href="{{asset('uploads/'.$data_file->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
											</div>
										</div>
									@endif
									
								@endforeach
							@endforeach
							
									{{-- @endforeach --}}
							
								
									
									{{-- <div class="row">
										<div class="col">
											2561	รายงานรอบปี
										</div>
										<div class="col">
											<a href="#" class="downloadbtn">ดาวน์โหลด <i class="fas fa-download"></i></a>
										</div>
									</div> --}}
								
							{{-- @endforeach --}}
							
							{{-- <h2>กองทุนเปิดโซลาริสตราสารทุนเพื่อการเลี้ยงชีพ (S-EQRMF)</h2>
							<div class="row">
								<div class="col">
									2561	รายงานรอบ 6 เดือน 
								</div>
								<div class="col">
									<a href="#" class="downloadbtn">ดาวน์โหลด <i class="fas fa-download"></i></a>
								</div>
							</div>
							<hr>
							<h2>กองทุนเปิดโซลาริสตราสารทุนเพื่อการเลี้ยงชีพ (S-EQRMF)</h2>
							<div class="row">
								<div class="col">
									2561	รายงานรอบ 6 เดือน 
								</div>
								<div class="col">
									<a href="#" class="downloadbtn">ดาวน์โหลด <i class="fas fa-download"></i></a>
								</div>
							</div>
							<hr>
							<h2>กองทุนเปิดโซลาริสตราสารทุนเพื่อการเลี้ยงชีพ (S-EQRMF)</h2>
							<div class="row">
								<div class="col">
									2561	รายงานรอบ 6 เดือน 
								</div>
								<div class="col">
									<a href="#" class="downloadbtn">ดาวน์โหลด <i class="fas fa-download"></i></a>
								</div>
							</div>
							<div class="row">
								<div class="col">
									2561	รายงานรอบปี
								</div>
								<div class="col">
									<a href="#" class="downloadbtn">ดาวน์โหลด <i class="fas fa-download"></i></a>
								</div>
							</div> 
							<hr>--}}
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
			
</body>

</html>