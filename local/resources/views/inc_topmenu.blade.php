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
	.wrap_menu.sticky .langselect img{
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
			margin:13px 0px;
		}
		.wrap_menu.sticky .mainlogo a img{
			width: 60%;
		}
	}
	@media (max-width: 1199px) {
		.wrap_menu.sticky .mainlogo {
			margin: 15px 0px;
		}
		.wrap_menu.sticky .mainlogo a img{
			width: 100%;
		}
	}
</style>

<div class="topbg">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="sideright_top">
					<li><a href="#">ลงทะเบียน | เข้าสู่ระบบ</a></li>
					<li>
						<div class="search-container d-none d-sm-none d-md-none d-lg-block d-xl-block">
							<input type="text" id="search-bar" placeholder="Search.."> <a href="#"><i class="fa fa-search search-icon"></i></a> </div>
					</li>
					<li><div class="langselect d-block d-sm-block d-md-block d-lg-none d-xl-none">
								<a href="#"><img src="{{asset('images/icon_home.png')}}"></a>
								<a href="#"><img src="{{asset('images/th.png')}}"></a>
								<a href="#"><img src="{{asset('images/en.png')}}"></a>
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
					<ul>
						<?php foreach ($category as $_category) {
							echo '<li data-page="'.$_category->link.'"><a href="'.$_category->link.'">'.$_category->name_th.'</a></li>';
						} ?>
						<!-- <li data-page="home"><a href="#">กองทุน</a></li>
						<li data-page="#"><a href="#">มูลค่าหน่วยลงทุน</a></li>
						<li data-page="#"><a href="#">ผลการดำเนินงาน</a></li>
						<li data-page="#"><a href="#">ทำรายการ </a></li>
						<li data-page="#"><a href="#">ข้อมูลข่าวสาร</a></li>
						<li data-page="#"><a href="#">เกี่ยวกับเรา </a></li>
						<li data-page="#"><a href="#">ติดต่อเรา </a></li> -->
						<li>
							<div class="langselect">
								<a href="#"><img src="{{asset('images/home.png')}}"></a>
								<a href="#"><img src="{{asset('images/th.png')}}"></a>
								<a href="#"><img src="{{asset('images/en.png')}}"></a>
							</div>
						</li>
					</ul>
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
			<a href="index.php"><img src="{{asset('images/logo.png')}}"></a>
		</div>
		<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
		<li><a class="cd-search-trigger" href="javascript:void(0)"><span></span></a></li>
		<div id="cd-search" class="cd-search">
			<form>
				<input type="search" placeholder="Search..."> </form>
		</div>
		
	</header>
	<nav id="main-nav">
		<div class="menu-m padd">
			<ul class="menumobile">
				<li>
				<div class="mmmbg-0"><a href="{{url('/')}}"> Home</a></div>
				</li>
<!--
				<li class="click_second_nav" rel="1">
					<div class="mmmbg-1"><a href="#"> Home Accessories
               </a></div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
				<li class="click_second_nav" rel="2">
					<div class="mmmbg-2"><a href="#">Home Fragrance  </a></div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
				<li class="click_second_nav" rel="3">
					<div class="mmmbg-3"><a href="#">Bath and Body  </a></div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
				<li class="click_second_nav" rel="4">
					<div class="mmmbg-4"><a href="#">Furniture  </a> </div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
				<li class="click_second_nav" rel="5">
					<div class="mmmbg-5"><a href="#">Kitchen Ware  </a> </div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
				<li class="click_second_nav" rel="6">
					<div class="mmmbg-4"><a href="#">Lighting </a> </div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
				<li class="click_second_nav" rel="7">
					<div class="mmmbg-7"><a href="#">Brands</a> </div> <span class="arrr"><i class="fas fa-angle-right"></i></span> </li>
-->
				@foreach ($category as $_category) 
					<li><div class="mmmbg-0"><a href="{{$_category->link}}">{{$_category->name_th}}</a></div></li>
				@endforeach
				{{-- <li>
					<div class="mmmbg-0"><a href="#"> กองทุน</a></div>
				</li>
				<li>
					<div class="mmmbg-0"><a href="#"> มูลค่าหน่วยลงทุน</a></div>
				</li>
				<li>
					<div class="mmmbg-0"><a href="#"> ผลการดำเนินงาน</a></div>
				</li>
				<li>
					<div class="mmmbg-0"><a href="#">  ทำรายการ</a></div>
				</li>
				<li>
					<div class="mmmbg-0"><a href="#">  ข้อมูลข่าวสาร</a></div>
				</li>
				<li>
					<div class="mmmbg-0"><a href="#">  เกี่ยวกับเรา</a></div>
				</li>
				<li>
					<div class="mmmbg-0"><a href="#">   ติดต่อเรา</a></div>
				</li>  --}}
			</ul>
			
			 
		</div>
	</nav>
	<nav class="second-nav padd1" rel="1">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fas fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<li><a href="product_index.php">View all Home Accessories</a></li>
				<li><a href="product_index_categories.php">Cushion </a></li>
				<li><a href="product_index_categories.php">Tray </a></li>
				<li><a href="product_index_categories.php">Throw </a></li>
				<li><a href="product_index_categories.php">Decorative items </a></li>
				<li><a href="product_index_categories.php">Fan </a></li>
				<li><a href="product_index_categories.php">Vase </a></li>
				<li><a href="product_index_categories.php">Storage </a></li>
				<li><a href="product_index_categories.php">Carpet </a></li>
				<li><a href="product_index_categories.php">Artificial Plants </a></li>
				<li><a href="product_index_categories.php">Picture Frames </a></li>
				<li><a href="product_index_categories.php">Art Note Book </a></li>
			</ul>
		</div>
	</nav>
	<nav class="second-nav padd1" rel="2">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fa fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<li><a href="product_index.php">View all Home Fragrance</a></li>
				<li><a href="product_index_categories.php">Scent Differser  </a></li>
				<li><a href="product_index_categories.php">Candle </a></li>
			</ul>
		</div>
	</nav>
	<nav class="second-nav padd1" rel="3">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fa fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<li><a href="product_index.php">View all Bath & Body</a></li>
				<li><a href="#">Soap and Shower  </a></li>
				<li><a href="#">Shampoo & Treatment  </a></li>
				<li><a href="#">Moisturizer </a></li>
			</ul>
		</div>
	</nav>
	<nav class="second-nav padd1" rel="4">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fa fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<li><a href="product_index_furniture.php">View all Furniture</a></li>	
				<li><a href="product_index_categories.php">Chair  </a></li>
				<li><a href="product_index_categories.php">Bean bags </a></li>
				<li><a href="product_index_categories.php">Stool  </a></li>
				<li><a href="product_index_categories.php">Side Table  </a></li>
			</ul>
		</div>
	</nav>
	<nav class="second-nav padd1" rel="5">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fa fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<li><a href="product_index.php">View all Kitchen Ware</a></li>
				<li><a href="product_index_categories.php">Dinner Set  </a></li>
				<li><a href="product_index_categories.php">Ceramics </a></li>
				<li><a href="product_index_categories.php">Wooden products for Kitchen   </a></li>
				<li><a href="product_index_categories.php">Eco foodware </a></li>
			</ul>
		</div>
	</nav>
	<nav class="second-nav padd1" rel="6">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fa fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<li><a href="product_index.php">View all Lighting</a></li>
				<li><a href="product_index_categories.php">Pandant Lamp </a></li>
				<li><a href="product_index_categories.php">Table Lamp </a></li>
				<li><a href="product_index_categories.php">Floor Lamp  </a></li>
				
				


			</ul>
		</div>
	</nav>
	<nav class="second-nav padd1" rel="7">
		<div class="menu-m">
			<div class="menu-m">
				<div class="row back_nav"> <span class="backicon">
               <i class="fa fa-angle-left"></i> 
         </span> Back </div>
			</div>
			<ul class="menumobile">
				<h2 class="mm-guest">Top Brands</h2>
				
				<li class="seebb-aa"><a href="brands.php"><b>A-Z of Brands</b></a></li>
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
        var getPage = '<?php $pageName ?>';
        $(".mainmenu ul li").each(function () {
            var getMenu = $(this).attr("data-page");
            if (getPage == getMenu) {
                $(this).addClass('active');
            }
        });
    });
</script>