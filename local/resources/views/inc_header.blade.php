<?php
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
?>
    <title>
        Innotech
    </title>
    <meta name="keywords" content="<?php echo $_keywords;?>" />
    <meta name="description" content="<?php echo $_description;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robot" content="index, follow" />
    <meta name="generator" content="Brackets">
    <meta name='copyright' content='Orange Technology Solution co.,ltd.'>
    <meta name='designer' content='Netthakan O.'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/layout.css')}}" media="screen,projection" />
    <link type="image/ico" rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">    
    <link rel="stylesheet" href="{{asset('woocommerce-FlexSlider-0690ec2/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('OwlCarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('WOW-master/css/libs/animate.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('WOW-master/css/site.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">

    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('woocommerce-FlexSlider-0690ec2/jquery.flexslider.js')}}"></script>
	<script src="{{asset('woocommerce-FlexSlider-0690ec2/demo/js/modernizr.js')}}"></script>
	<script src="{{asset('OwlCarousel/dist/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('WOW-master/dist/wow.js')}}"></script>
	<script src="{{asset('assets/global/js/modal.js')}}"></script>
	
	<script src="{{asset('assets/admin/vendors/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/global/js/validate.js')}}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){	
			if(f.fbq)return;
			n=f.fbq=function(){
					n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)
			};
			if(!f._fbq)f._fbq=n;
				n.push=n;
				n.loaded=!0;
				n.version='2.0';
				n.queue=[];
				t=b.createElement(e);
				t.async=!0;
				t.src=v;
				s=b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t,s)
		}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '2220987057981424');
			fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2220987057981424&ev=PageView&noscript=1"/></noscript>
	<!-- End Facebook Pixel Code -->
    
    
    <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="{{asset('fancybox/lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="{{asset('fancybox/source/jquery.fancybox.js?v=2.1.5')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('fancybox/source/jquery.fancybox.css?v=2.1.5')}}" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="{{asset('fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" />
	<script type="text/javascript" src="{{asset('fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="{{asset('fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" />
	<script type="text/javascript" src="{{('fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="{{asset('fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100,
			callback: function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		});
		wow.init();
		document.getElementById('moar').onclick = function() {
			var section = document.createElement('section');
			section.className = 'section--purple wow fadeInDown';
			this.parentNode.insertBefore(section, this);
		};

	</script>
    
    	
<script>
		$(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 300) {
					$('.go-top').fadeIn(300);
				} else {
					$('.go-top').fadeOut(300);
				}
			});

			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();

				$('html, body').animate({
					scrollTop: 0
				}, 800);
			})
		});

	</script>
	<a href="#" class="go-top"> <i class="fa fa-chevron-up"></i></a>