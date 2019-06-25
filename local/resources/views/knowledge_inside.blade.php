<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header')<?php $pageName="knowledge_inside"; ?>
</head>

<body>
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
							<li class="breadcrumb-item"><a href="{{url('/knowledge')}}"> {{trans('messages.knowledge')}} </a></li>
							@foreach ($knowledge_detail as $k_knowledge_detail => $v_knowledge_detail)
								<li class="breadcrumb-item active" aria-current="page">{{$knowledge_detail[$k_knowledge_detail]['title_'.$lang]}}</li>	
							@endforeach
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col">
					@foreach ($knowledge_detail as $k_knowledge_detail => $v_knowledge_detail)
						<div class="title_news_inside">
							<h2>{{$knowledge_detail[$k_knowledge_detail]['title_'.$lang]}}</h2>
							@php
									$date_create = substr($v_knowledge_detail->updated_at,0,-8);
									$date_create_edit = explode('-', $date_create);
									$month = $date_create_edit[1];
									$day   = $date_create_edit[2];
									$year  = $date_create_edit[0]; 
							@endphp
							<p>{{$day.'/'.$month.'/'.$year}}</p>
							<hr> 
						</div>
					@endforeach
				</div>
			</div>
			<div class="container">
					<div class="row">
				<div class="col">
					@foreach ($knowledge_detail as $k_knowledge_detail => $v_knowledge_detail)
						<div class="news_detail_inside">
								@php
									$photo = json_decode($v_knowledge_detail->photo, true)
								@endphp
								@if (isset($photo) && $photo)
									<img src="{{asset('uploads/News/'.$photo[1])}}" class="img-fluid">	
								@endif
							<br><br>
							<p>
								{!!($knowledge_detail[$k_knowledge_detail]['detail_'.$lang])!!}
							</p>
						</div>
					@endforeach
				</div>
			</div>
		
			</div>
		</div>
		@include('inc_footer')
</body>

</html>