<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="funds_perf"; ?>
</head>

<body>
	<style>
		.title_head1 {
			text-align: left;
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
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.performance')}}</li>
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
								<div class="bannertop_performance">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>ผลการดำเนินงาน <br><span class="boldtext"> FUNDS PERFOMANCE</span></h1> </div>
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
						<div class="title_head1">ผลการดำเนินงาน <span class="bluetxt">FUNDS PERFOMANCE</span> </div>
					</div>
				</div>
				<br>
				<br> </div>
			<div class="bggray">
				<div class="container">
					<div class="box_search">
					<form id="search" action="{{url('seachfunds')}}" method="get" >
						<div class="row">
								<div class="col-lg-5">
										<div class="search_funds">
											<label>{{trans('messages.choose_fund')}}</label>
											<select id="fund" name="type" class="form-control" onchange="getFund(this)">
												{{-- @if (isset($perfor[0]->type) && $perfor[0]->type == "EP-LTF")
													<option value="EP-LTF" selected>กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว</option>
													<option value="S-EQRMF">กองทุนเปิดโซลาริสตราสารทุนเพื่อการเลี้ยงชีพ</option>
												@else
													<option value="EP-LTF">กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว</option>
													<option value="S-EQRMF" selected>กองทุนเปิดโซลาริสตราสารทุนเพื่อการเลี้ยงชีพ</option>
												@endif --}}
												
												@foreach ($fund as $k_fund => $v_fund)
													@if (count($perfor) > 0)		
														<option value="{{$v_fund->fund_short_name}}" {{($v_fund->fund_short_name == $perfor[0]->type?'selected':'')}} >{{$fund[$k_fund]['name_'.$lang]}}</option>
													@else				
														<option value="{{$v_fund->fund_short_name}}">{{$fund[$k_fund]['name_'.$lang]}}</option>
													@endif
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="search_funds">
											<label>{{trans('messages.choose_date')}}</label>
											<form action="example.php" method="post">
												<input autocomplete="off" class="datepicker form-control boxbox" name="date" id="date" placeholder="{{trans('messages.date_format')}}" /> </form>
										</div>
									</div>
									<div class="col-lg-2"> <button type="submit" class="btn btn-success">{{trans('messages.submit')}}</button> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			@if (count($perfor) > 0)
				
				<div class="container">
					<div class="row">
						<div class="col-lg-10">
							<div class="sec_title">
									<div class="row">
											<div class="col-lg-5">
												<h2>{{ trans('messages.PC') }}</h2>
												
											</div>
											<div class="col-lg-5">
												@foreach ($fund as $k_fund => $v_fund)
													<span class="bluetxt">{{($v_fund->fund_short_name == $perfor[0]->type?$v_fund['name_'.$lang]:'')}}</span>
												@endforeach
											</div>
									</div>
									
								
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
								<h5>ข้อมูล ณ วันที่ {{$day}} {{$month}} {{$year}}</h5> </div>
						</div>
						<div class="col-lg-2">
							<a href="{{url('performance/PDF/'.$perfor[0]->type.'/'.$perfor[0]->date)}}" target="_blank" class="btn btn-success">{{trans('messages.download')}}</a>
						</div>
					</div>
					@if ($perfor[0]->type == 'EP-LTF')
						<div class="row">
								<div class="col">
									
									<table class="table funds_table_perf table-bordered table-responsive-lg">
										<thead>
											<tr>
												<th scope="col" class="text-left">{{ trans('messages.nav_as_of') }}</th>	
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id <= 8)
														<th scope="col">{{$v_perfor->name}}</th>
													@endif
												@endforeach												
												
											</tr>
										</thead>
									
										<tbody>
										
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.nav_as_of') }} EP-LTF</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id <= 8)
														@if ($v_perfor->fund != 0)
															<th>{{$v_perfor->fund}}</th>
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach											
											
											</tr>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.THSETRI_Index') }}</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id <= 8)
														@if ($v_perfor->gain != 0)
															<th>{{$v_perfor->gain}}</th>
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
											
											</tr>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.Sd_of') }}  </th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id <= 8)
														@if ($v_perfor->result != 0)
															<th>{{$v_perfor->result}}</th>
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
											
											</tr>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.Sd_of_THSETRI') }} </th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id <= 8)
														@if ($v_perfor->Indicator != 0)
															<th>{{$v_perfor->Indicator}}</th>
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
												
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="sec_title">
										<h2>{{ trans('messages.PCY') }}</h2> </div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<table class="table funds_table_perf table-bordered  table-responsive-lg">
										<thead>
											<tr>
												<th scope="col" class="text-left">{{ trans('messages.year') }}</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id > 8)
														<th scope="col">{{$v_perfor->name}}</th>
													@endif
												@endforeach		
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.nav_as_of') }} EP-LTF</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id > 8)
														@if ($v_perfor->fund != 0)
															<th scope="col">{{$v_perfor->fund}}</th>	
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
												
											</tr>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.THSETRI_Index') }}</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id > 8)
														@if ($v_perfor->gain != 0)
															<th scope="col">{{$v_perfor->gain}}</th>	
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
											
											</tr>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.Sd_of') }}</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id > 8)
														@if ($v_perfor->result != 0)
															<th scope="col">{{$v_perfor->result}}</th>	
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
												
											</tr>
											<tr>
												<th scope="row" class="text-left">{{ trans('messages.Sd_of_THSETRI') }}</th>
												@foreach ($perfor as $k_perfor => $v_perfor)
													@if ($v_perfor->sort_id > 8)
														@if ($v_perfor->Indicator != 0)
															<th scope="col">{{$v_perfor->Indicator}}</th>	
														@else
															<th>N/A</th>
														@endif
													@endif
												@endforeach	
												
											</tr>
										</tbody>
									</table>
								</div>
							</div>
					@elseif($perfor[0]->type == 'S-EQRMF')
					<div class="row">
							<div class="col">
								
								<table class="table funds_table_perf table-bordered table-responsive-lg">
									<thead>
										<tr>
											<th scope="col" class="text-left">{{ trans('messages.nav_as_of') }}</th>	
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													<th scope="col">{{$v_perfor->name}}</th>
												@endif
											@endforeach												
											
										</tr>
									</thead>
								
									<tbody>
									
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.nav_as_of') }} S-EQRMF</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->fund != 0)
														<th>{{$v_perfor->fund}}</th>
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach											
										
										</tr>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.THSETRI_Index') }}</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->gain != 0)
														<th>{{$v_perfor->gain}}</th>
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
										
										</tr>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.Sd_of') }}  </th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->result != 0)
														<th>{{$v_perfor->result}}</th>
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
										
										</tr>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.Sd_of_THSETRI') }} </th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->Indicator != 0)
														<th>{{$v_perfor->Indicator}}</th>
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="sec_title">
									<h2>{{ trans('messages.PCY') }}</h2> </div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<table class="table funds_table_perf table-bordered  table-responsive-lg">
									<thead>
										<tr>
											<th scope="col" class="text-left">{{ trans('messages.year') }}</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													<th scope="col">{{$v_perfor->name}}</th>
												@endif
											@endforeach		
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.nav_as_of') }} S-EQRMF</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->fund != 0)
														<th scope="col">{{$v_perfor->fund}}</th>	
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.THSETRI_Index') }}</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->gain != 0)
														<th scope="col">{{$v_perfor->gain}}</th>	
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
										
										</tr>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.Sd_of') }}</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->result != 0)
														<th scope="col">{{$v_perfor->result}}</th>	
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
										<tr>
											<th scope="row" class="text-left">{{ trans('messages.Sd_of_THSETRI') }}</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->Indicator != 0)
														<th scope="col">{{$v_perfor->Indicator}}</th>	
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					@endif
					
					<div class="row">
						<div class="col">
							<div class="list_warn">
								<li><i class="fas fa-exclamation-triangle"></i> {{ trans('messages.war1') }} (SET TRI)</li>
								<li><i class="fas fa-exclamation-triangle"></i> {{ trans('messages.war2') }}</li>
								<li><i class="fas fa-exclamation-triangle"></i> {{ trans('messages.war3') }} </li>
								<li><i class="fas fa-exclamation-triangle"></i> {{ trans('messages.war4') }} </li>
							</div>
						</div>
					</div>
				</div>
			@else
			<div class="row">
				<div class="col"><br/>
					<p class="warning-message">{{ trans('messages.data_not_found') }}</p>
				</div>
			</div>
			@endif
		
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
				function getFund(selectObject) {
						var fund = selectObject.value;  
						
						if(fund){
							window.location = "{{url("select/performance")}}/"+fund;
						}
						
					}
			</script>
			<script>
				$(document).ready(function () {
					$(function () {
						$('.datepicker').datepicker({
							dateFormat: 'yy-mm-dd'
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