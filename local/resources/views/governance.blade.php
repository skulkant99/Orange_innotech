<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><?php $pageName="governance"; ?>

<head>
	@include('inc_header')
</head>
<style>
	.accordion .set {
	   background-color: #379595;
		color: white;
	}
	
	.accordion .set > a {
		
		display: block;
		font-size: 1.2em;
		font-weight: normal;
		padding: 10px 50px 10px 15px;
		position: relative;
		text-decoration: none;
		transition: all 0.2s linear 0s;
		cursor: pointer;
/*			background-color: rgba(255, 255, 255, 0.8);*/
		font-family: 'kanit';
		margin: 20px 0px;
	}
	
	.accordion .set > a:focus {
		outline: 0;
	}
	
	.accordion .set > a.active {
		border-bottom: none;
		width: auto;
		position: relative;
		margin-bottom: 0px;
		margin-top: 0px;
		 background-color: #379595;
		color: white;
	}
	
	.accordion .set > a i {
		   background-color: #379595;
		color: white;
		position: absolute;
		right: 15px;
		top: 50%;
		-webkit-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	
	.accordion .set > a.active i {
	   
		color: white;
	}
	
	.accordion .content {
		display: none;
		width: auto;
		position: relative;
		background-color: white;
	}
	
	.accordion .content h3 {
		font-size: 1em;
		padding-left: 15px;
		font-family: 'Kanit';
		margin-top: 10px;
	}
	
	.accordion .content p {
		color: dimgray;
		font-size: 1em;
		margin: 0;
		padding: 10px 20px 10px 45px;
	}
	


</style>

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
        .boldtext{
            font-size: 0.7em;
            letter-spacing: 1px;
        }
        .title_head1{
            text-align: left;
        }
        .btn-primary{
            border-radius: 50px;
            padding: 10px 50px;
            font-size: 1.1em;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn_download{
            text-align: center;
            margin-top:30px;
            float: right;
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
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.investment')}}</li>
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
								<div class="bannertop_gov">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>ธรรมาภิบาลการลงทุน <br> <span class="boldtext">  Investment Governance Code Policy: I Code Policy</span></h1> </div>
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
					<div class="col-md-8  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="title_head1"> บริษัทหลักทรัพย์จัดการกองทุน อินโนเทค จำกัด <br> <span class="bluetxt">Innotech Asset Management Company Limited</span> </div>
					</div>
					<div class="col-md-4 wow fadeInUp">
                 
					   <div class="btn_download">
					   
					      <span class="dategov">{{$governance[0]['title_'.$lang]}}</span> <br>
					      <a href="{{asset('uploads/'.$governance[0]['file'])}}" class="btn btn-primary"><i class="far fa-file-pdf"></i> Download </a> </div>
					</div>
				</div>
				<br>
				<br> </div>
				<hr>
			<div class="container-fluid nopad">
				
				<div class="row">
					<div class="col">
						<div class="container">
						<div class="row">
						    <div class="col">
                           <div class="detail_content">
							<h3>{{$governance[1]['title_'.$lang]}}</h3>
								{!!$governance[1]['detail_'.$lang]!!}
							<br><br>
							<h3>{{$governance[2]['title_'.$lang]}} </h3>
								{!!$governance[2]['detail_'.$lang]!!}
							<br><br>
                               
                               
                                </div>

						    </div>
						</div>
						<div class="row">
						    <div class="col">
						        <h2> <b><span class="bluetxt">นโยบายธรรมาภิบาลการลงทุน</span></b> (Investment Governance Code Policy - I Code Policy) 
                               </h2>
						    </div>
						</div>
							<div class="row">
								<div class="col">
									<div class="accordion accordion-01">
										@foreach ($governance as $k_governance => $v_governance)
											@if ($v_governance->sort_id > 3)
													<div class="set"> <a>{{$governance[$k_governance]['title_'.$lang]}}
													<i class="fas fa-plus-circle"></i></a>
														<div class="content">
															<p>{!!$governance[$k_governance]['detail_'.$lang]!!}</p>
														</div>
													</div>
											@endif
												
										@endforeach
										
										
									</div>
									<!-- /.accordion-01 -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br> </main>
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
			// accordion-01
			$(document).ready(function () {
				$(".accordion-01 .set > a").on("click", function () {
					if ($(this).hasClass('active')) {
						$(this).removeClass("active");
						$(this).siblings('.content').slideUp(200);
						$(".accordion-01 .set > a i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
					}
					else {
						$(".accordion-01 .set > a i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
						$(this).find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
						$(".accordion-01 .set > a").removeClass("active");
						$(this).addClass("active");
						$('.accordion-01 .content').slideUp(200);
						$(this).siblings('.content').slideDown(200);
					}
				});
			});
		</script>
</body>

</html>