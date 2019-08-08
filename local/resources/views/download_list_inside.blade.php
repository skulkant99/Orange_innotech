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
		.page-item.active .page-link {
			z-index: 1;
			color: #fff;
			background-color: #379595;
			border-color: #379595;
		}
		.page-link {
			position: relative;
			display: block;
			padding: 0.4rem 0.75rem;
			margin-left: -1px;
			line-height: 1.25;
			color: #007bff;
			background-color: #fff;
			border: 1px solid #dee2e6;
		}
		p.warning-message {
			text-align: center;
			font-style: italic;
			margin-bottom: 60px;
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
							
								{{-- @foreach ($file_type as $k_file_type => $_file_type)
									<h2>{{$file_type[$k_file_type]['name_'.$lang]}}</h2>
								@endforeach    --}}
								@if (isset($file_list[0]) && $file_list[0]->month_no != null && $file_list[0]->month_no != null && $file_list[0]->year_no != null)
									<h2>{{$file_list[0]['name_'.$lang]}}</h2>
									
								@endif
									
									@foreach ($file_list as $k_file_list => $v_file_list)
										{{-- {{dd($file_list[$k_file_list + 3]['years_name'])}} --}}
										@if (is_null($v_file_list->month_no) && is_null($v_file_list->month_no) && is_null($v_file_list->year_no))
											<div class="row">
												<div class="col">
													<div class="box_download_doc">

														@if ($k_file_list > 0)												
															@if ($file_list[$k_file_list]['years_name'] != $file_list[$k_file_list-1]['years_name'])
																<div class="numberlist"> {{$k_file_list+1}} </div>
																<div class="detail_doc">{{$v_file_list->name_th}}	</div>														
															@else
																<div class="numberlist"> {{$k_file_list+1}} </div>
																<div class="detail_doc">{{$v_file_list->name_th}}	</div>	
															@endif
														@else
															{{-- {{dd(isset($file_list[$k_file_list + 1]['years_name']))}} --}}
															@if (isset($file_list[$k_file_list + 1]['years_name']) && $file_list[$k_file_list]['years_name'] != $file_list[$k_file_list + 1]['years_name'])
																<div class="numberlist"> {{$k_file_list+ 1}} </div>
																<div class="detail_doc">{{$v_file_list->name_th}}	</div>																
															@else
																<div class="numberlist"> {{$k_file_list+1}} </div>
																<div class="detail_doc">{{$v_file_list->name_th}}	</div>	
															@endif	
														@endif
														
														<div class="btn_download"><a href="{{asset('uploads/'.$v_file_list->file)}}" class="btn btn-primary" target="_blank">{{trans('messages.download')}} <i class="fas fa-download"></i></a></div>
													</div>		
												</div>
											</div>
										@elseif (is_null($v_file_list->month_no))
											<div class="row">
												{{-- <div class="col">
													{{$v_file_list->years_name}}	{{$v_file_list->name_th}}
												</div>
												<div class="col">
													<a href="{{asset('uploads/'.$v_file_list->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
												</div> --}}
												<div class="col">
														@if ($k_file_list > 0)												
															@if ($file_list[$k_file_list]['years_name'] != $file_list[$k_file_list-1]['years_name'])
																<hr>
																{{$v_file_list->years_name}}	{{$v_file_list->name_th}}															
															@else
																{{$v_file_list->years_name}}	{{$v_file_list->name_th}}
															@endif
														@else
															{{-- {{dd(isset($file_list[$k_file_list + 1]['years_name']))}} --}}
															@if (isset($file_list[$k_file_list + 1]['years_name']) && $file_list[$k_file_list]['years_name'] != $file_list[$k_file_list + 1]['years_name'])
																<hr>
																{{$v_file_list->years_name}}	{{$v_file_list->name_th}}															
															@else
																{{$v_file_list->years_name}}	{{$v_file_list->name_th}}
															@endif	
														@endif
														
															<a href="{{asset('uploads/'.$v_file_list->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
															
													</div>
											</div>
										
										@elseif($v_file_list->date_no != null)
										<div class="row">
												
												<div class="col">
													@if ($k_file_list > 0)												
														@if ($file_list[$k_file_list]['years_name'] != $file_list[$k_file_list-1]['years_name'])
															<hr>
														   	{{$v_file_list->date_no}}    {{$v_file_list->months_name}}	 {{$v_file_list->years_name}}														
														@else
															{{$v_file_list->date_no}}    {{$v_file_list->months_name}}	 {{$v_file_list->years_name}}
														@endif
													@else
														@if (isset($file_list[$k_file_list + 1]['years_name']) && $file_list[$k_file_list]['years_name'] != $file_list[$k_file_list + 1]['years_name'])
															<hr>
															{{$v_file_list->date_no}}    {{$v_file_list->months_name}}	 {{$v_file_list->years_name}}														
														@else
															{{$v_file_list->date_no}}    {{$v_file_list->months_name}}	 {{$v_file_list->years_name}}
														@endif	
													@endif
													
														<a href="{{asset('uploads/'.$v_file_list->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
														
												</div>
												
											</div>	
										@else
											
										
											<div class="row">
											
												<div class="col">
													
													@if ($k_file_list > 0)
																								
														@if ($file_list[$k_file_list]['years_name'] != $file_list[$k_file_list-1]['years_name'])
															<hr>
															{{$v_file_list->years_name}}	{{$v_file_list->months_name}}															
														@else
															{{$v_file_list->years_name}}	{{$v_file_list->months_name}}
														@endif
													@else
														@if (isset($file_list[$k_file_list + 1]['years_name']) && $file_list[$k_file_list]['years_name'] != $file_list[$k_file_list + 1]['years_name'])
															<hr>
															{{$v_file_list->years_name}}	{{$v_file_list->months_name}}															
														@else
															{{$v_file_list->years_name}}	{{$v_file_list->months_name}}
														@endif	
													@endif
													
														<a href="{{asset('uploads/'.$v_file_list->file)}}" class="downloadbtn" target="_blank">ดาวน์โหลด <i class="fas fa-download"></i></a>
														
												</div>
												
											</div>	
																				
										@endif
									
									
									@endforeach
																
									<hr>

							
						
							{{-- <div class="row mt-5 mb-5 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.1s">
									<div class="col">
										<div class="pagination_bot">
											<nav class="pagination-container">
												<div class="pagination"> 
														{{$fund_type->links()}}
													
													</div>
											</nav>
										</div>
									</div>
							</div>  --}}
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.1s">
					<div class="row">
						<div class="col">
							@for($i = 1; $i <= count($fund_type); $i++)
								@foreach ($fund_type as $k_fund_type => $_fund_type)
									<div class="box_download_doc">
										<div class="numberlist">
											{{$i++}}
										</div>
										<div class="detail_doc">
											{{$fund_type[$k_fund_type]['name_'.$lang]}}
										</div>
										<div class="btn_download">
											<a href="{{url('downloadinside/'.$_fund_type->id)}}" class="btn btn-primary">ดูรายละเอียด</a> 
										</div>
									</div>
								@endforeach
							@endfor
						</div>
					</div>
				</div>
				<hr> --}}
			
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