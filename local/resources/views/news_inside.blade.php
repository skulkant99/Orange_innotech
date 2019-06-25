<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="news"; ?>
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
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('messages.home')}} </a></li>
							<li class="breadcrumb-item"><a href="{{url('news')}}"> {{trans('messages.news')}}  </a></li>
							@foreach ($information_detail as $k_information_detail => $v_information_detail)
								<li class="breadcrumb-item active" aria-current="page">{{$information_detail[$k_information_detail]['title_'.$lang]}}</li>	
							@endforeach
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col">
					@foreach ($information_detail as $_information_detail)
						<div class="title_news_inside">
							<h2>{{$_information_detail->title_th}}</h2>
							@php
									$date_create = substr($_information_detail->updated_at,0,-8);
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
					@foreach ($information_detail as $k_information_detail => $v_information_detail)
					<div class="news_detail_inside">
						@php
							$photo = json_decode($v_information_detail->photo, true)
						@endphp
						@if (isset($photo) && $photo)
							<img src="{{asset('uploads/Information/'.$photo[1])}}" class="img-fluid">	
						@endif
						<br><br>
						<p>{!!($information_detail[$k_information_detail]['detail_'.$lang])!!}</p>
					</div>
					@endforeach
				</div>
			</div>
		
			</div>
		</div>
		@include('inc_footer')
</body>

</html>