<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
<link rel="stylesheet" href="{{asset('side-shopping-cart/css/style.css')}}">
<script src="{{asset('side-shopping-cart/js/modernizr.js')}}"></script>
<script src="{{asset('side-shopping-cart/js/main.js')}}"></script>
<script src="{{asset('side-shopping-cart/js/jquery.mobile.custom.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<style>
		.menumobile {
	position: relative;
}
.menumobile li {
	border-bottom: 1px solid #eeeeee;
	padding: 15px;
	position: relative;
	font-size: 0.9em;
}
		.second-nav {
		left: -100%;
		background: #FFF;
		-webkit-transition: left 1.0s;
		-moz-transition: left 1.0s;
		transition: left 1.0s;
	}
	
	.second-nav {
		position: fixed;
		top: 0;
		height: 100%;
		width: 300px;
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
		z-index: 3;
	}
	
	.second-nav.speed-in {
		left: 0;
	}
	.wrap_menu {
		background-color: rgba(255, 255, 255, 0.95);
		padding: 0px 2%;
		position: relative;
		z-index: 98;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
	}
	
	ul#mainmenu ul {
		visibility: hidden;
		position: absolute;
		left: 0;
		top: 100%;
		opacity: 0;
		-moz-transition: all 0.5s;
		-webkit-transition: opacity 0.5s;
		-o-transition: opacity 0.5s, visibility 0.5s;
		transition: opacity 0.5s;
	}
	
	ul#mainmenu li:hover>ul {
		visibility: visible;
		opacity: 1;
		background-color: white;
		color: black;
		border: 1px solid #eeeeee;
		padding: 10px !important;
	}
	
	ul#mainmenu li {
		position: relative;
		display: block;
		white-space: nowrap;
		float: left;
	}
	
	ul#mainmenu li:hover {
		z-index: 1;
		color: black;
	}
	
	ul#mainmenu ul ul {
		position: absolute;
		left: 100%;
		top: 0;
	}
	
	ul#mainmenu {
		z-index: 999;
		position: relative;
		display: inline-block;
		padding: 0;
	}
	
	* html ul#mainmenu li a {
		display: inline-block;
	}
	
	ul#mainmenu ul a {
		padding: 5px 15px;
/*		background-color: white;*/
		color: black;
		text-decoration: none;
		font-size: 0.8em;
	}
	
	ul#mainmenu li:hover>a,
	ul#mainmenu li a.pressed {
		color: black;
		text-decoration: none;
	}
	
	ul#mainmenu li.menutop>a {
		-moz-transition: all 0.5s;
		-webkit-transition: all 0.5s;
		-o-transition: all 0.5s;
		color: black;
	}
	
	.dropdownmain li {
		float: none !important;
	}
	
	.menumobile {
		position: relative;
	}
	
	.menumobile li {
		border-bottom: 1px solid #eeeeee;
		padding: 15px;
		position: relative;
		font-size: 0.9em;
	}
	
	.second-nav {
		left: -100%;
		background: #FFF;
		-webkit-transition: left 1.0s;
		-moz-transition: left 1.0s;
		transition: left 1.0s;
	}
	
	.second-nav {
		position: fixed;
		top: 0;
		height: 100%;
		width: 300px;
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
		z-index: 3;
	}
	
	.second-nav.speed-in {
		left: 0;
	}
	
	.wrap_menu {
		background-color: rgba(255, 255, 255, 0.95);
		padding: 0px 2%;
		position: relative;
		z-index: 98;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
	}
	
	.wrap_menu.sticky {
		position: fixed;
		z-index: 999;
		background-color: rgba(255, 255, 255, 0.95);
		right: 0;
		top: 0;
		left: 0;
		padding: 0 1%;
		border-bottom: 1px solid #eee;
		height: 80px;
	}
	
	.wrap_menu.sticky .mainmenu {
		margin: 20px 0px;
	}
	
	.wrap_menu.sticky .langselect img {
		width: 40px;
	}
	
	.wrap_menu.sticky .mainlogo {
		margin: 10px 0px;
	}
	
	.wrap_menu.sticky .mainlogo a img {
		width: 40%;
	}
	
	@media (max-width: 1600px) {
		.wrap_menu.sticky .mainlogo {
			margin: 20px 0px;
		}
	}
	
	@media (max-width: 1500px) {
		.wrap_menu.sticky .mainlogo {
			margin: 13px 0px;
		}
		.wrap_menu.sticky .mainlogo a img {
			width: 60%;
		}
	}
	
	@media (max-width: 1199px) {
		.wrap_menu.sticky .mainlogo {
			margin: 15px 0px;
		}
		.wrap_menu.sticky .mainlogo a img {
			width: 100%;
		}
	}
</style>


<div class="topbg">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="sideright_top">
					<li><a href="{{url('account')}}">{{trans('messages.register')}} | {{trans('messages.login')}}</a></li>
					<li>
						
							<div class="search-container d-none d-sm-none d-md-none d-lg-block d-xl-block">
									<form  action="{{url('search')}}" method="GET" id="search_all" >
										<input type="text" id="search-bar" name="keyword" placeholder="{{trans('messages.search')}}.."> <a href="#"><i class="fa fa-search search-icon"></i></a> 	
									</form>
							</div>
						
						
					</li>
					<li><div class="langselect d-block d-sm-block d-md-block d-lg-none d-xl-none">
							<a href="{{url('/')}}"><img src="{{asset('images/icon_home.png')}}"></a>
							<a href="{{url('lang/th')}}"><img src="{{asset('images/th.png')}}"></a>
							<a href="{{url('lang/en')}}"><img src="{{asset('images/en.png')}}"></a>
						</div></li>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
	<div class="navmenu wrap_menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-xl-3">
					<div class="mainlogo">
					<a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="img-fluid"></a>
					</div>
				</div>
			
				<div class="col-lg-10 col-xl-9">
					<div class="mainmenu">
						<nav>
							<ul class='menutop' id='mainmenu'>
							<li data-page="home"><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
								<li class='menutop' data-page="funds"><a href='#' title='funds'>{{trans('messages.fund')}}</a>
									<ul class="dropdownmain">
										<li><a href="{{url('/privatefunds')}}">{{trans('messages.privatefunds')}}</a></li>
										<li><a href="{{url('/mutualfunds')}}">{{trans('messages.mutualfunds')}}</a></li>
										<li><a href="{{url('/trust')}}">{{trans('messages.trust')}}</a></li>
									</ul>
								</li>
								<li data-page="fundsprice"><a href="{{url('/fundsprice')}}">{{trans('messages.nav')}}</a></li>
								<li data-page="funds_perf"><a href="{{url('/funds_perf')}}">{{trans('messages.performance')}}</a></li>
								<li data-page="trans"><a href="{{url('/transaction')}}">{{trans('messages.tran')}} </a></li>
								<li data-page="news"><a href="{{url('/news')}}">{{trans('messages.news')}}</a></li>
								<li data-page="abt"><a href="{{url('/about')}}">{{trans('messages.about')}} </a></li>
								<li data-page="contact"><a href="{{url('/contact')}}">{{trans('messages.contact')}}</a></li>
								<li class="langcrop">
									<div class="langselect">
										<a href="{{url('/')}}"><img src="{{asset('images/home.png')}}"></a>
										<a href="{{url('lang/th')}}"><img src="{{asset('images/th.png')}}"></a>
										<a href="{{url('lang/en')}}"><img src="{{asset('images/en.png')}}"></a>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
	<div class="mobilemenu d-block d-sm-block d-md-block d-sm-none d-xl-none d-lg-none d-xl-none">
		<header>
			<div id="logo">
				<a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}"></a>
			</div>
			<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
			<li><a class="cd-search-trigger" href="javascript:void(0)"><span></span></a></li> 
			<div id="cd-search" class="cd-search">
				<form  action="{{url('search')}}" method="GET" id="search_all" >
					<input type="search" name="keyword" placeholder="{{trans('messages.search')}}.."> 
				</form>
			</div>
		</header>
		<nav id="main-nav">
			<div class="menu-m padd">
				<ul class="menumobile">
					<li>
						<div class="mmmbg-0"><a href="{{url('/')}}"> {{trans('messages.home')}}</a></div>
					</li>
					<li class="click_second_nav" rel="1">
						<div class="mmmbg-1"><a href="#"> {{trans('messages.fund')}}</a>
                   	</div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
					<li>
						<div class="mmmbg-0"><a href="{{url('/fundsprice')}}"> {{trans('messages.nav')}}</a></div>
					</li>
					<li>
						<div class="mmmbg-0"><a href="{{url('/funds_perf')}}"> {{trans('messages.performance')}}</a></div>
					</li>
					<li>
						<div class="mmmbg-0"><a href="{{url('/transaction')}}">  {{trans('messages.tran')}}</a></div>
					</li>
					<li>
						<div class="mmmbg-0"><a href="{{url('/news')}}">  {{trans('messages.news')}}</a></div>
					</li>
					<li>
						<div class="mmmbg-0"><a href="{{url('/about')}}">  {{trans('messages.about')}}</a></div>
					</li>
					<li>
						<div class="mmmbg-0"><a href="{{url('/contact')}}">   {{trans('messages.contact')}}</a></div>
					</li>
				</ul>
			</div>
		</nav>
		<nav class="second-nav padd1" rel="1">
			<div class="menu-m">
				<div class="menu-m">
					<div class="row back_nav"> <span class="backicon">
               <i class="fas fa-angle-left"></i> 
         </span> กลับ </div>
				</div>
				<ul class="menumobile">
					<li><a href="{{url('/privatefunds')}}">{{trans('messages.privatefunds')}}</a></li>
					<li><a href="{{url('/mutualfunds')}}">{{trans('messages.mutualfunds')}}</a></li>
					<li><a href="{{url('/trust')}}">{{trans('messages.trust')}}</a></li>
				</ul>
			</div>
		</nav>
		<div id="cd-shadow-layer"></div>
	</div>
</div>
<script>
	$(window).scroll(function () {
		if ($(this).scrollTop() > 25) {
			$('.wrap_menu').addClass("sticky");
		}
		else {
			$('.wrap_menu').removeClass("sticky");
		}
	});
</script>
<script>
	$(document).ready(function (e) {
		$('.click_second_nav').click(function () {
			var rel = $(this).attr("rel");
			//$('#main-nav').removeClass("speed-in");
			$('.second-nav[rel="' + rel + '"]').addClass("speed-in");
			return false;
		});
		$('#cd-hamburger-menu').click(function () {
			$('.second-nav').removeClass("speed-in");
		});
		$('.back_nav').click(function () {
			$('.second-nav').removeClass("speed-in");
		});
	})
</script>
<script>
	$(function () {
		var getPage = '<?php echo($pageName); ?>';
		$(".mainmenu nav ul li").each(function () {
			var getMenu = $(this).attr("data-page");
			if (getPage == getMenu) {
				$(this).addClass('active');
			}
		});
	});
</script>