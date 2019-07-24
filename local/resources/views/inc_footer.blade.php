<style>
	.accordion-in-mobile-footer {
	 margin: 1rem 0;
	 padding: 0;
	 list-style: none;
	 border-top: 1px solid #e5e5e5;
 }
 
 .accordion-item {
	 border-bottom: 1px solid #e5e5e5;
 }
 /* Thumb */
 
 .accordion-thumb {
	 font-size: 1em;
	 margin: 0;
	 padding:10px;
	 cursor: pointer;
	 letter-spacing: 1px;
	 text-transform: uppercase;
 }
 
 .accordion-thumb::before {
	 float: right;
	 content: '';
	 display: inline-block;
	 height: 7px;
	 width: 7px;
	 margin-right: 1rem;
	 margin-left: .5rem;
	 vertical-align: middle;
	 border-right: 1px solid;
	 border-bottom: 1px solid;
	 -webkit-transform: rotate(-45deg);
	 transform: rotate(-45deg);
	 transition: -webkit-transform .2s ease-out;
	 transition: transform .2s ease-out;
	 transition: transform .2s ease-out, -webkit-transform .2s ease-out;
 }
 /* Panel */
 
 .accordion-panel {
	 margin: 0;
	 padding-bottom: .8rem;
	 display: none;
 }
 .listmenu-footer li{
	 padding-left: 20px;
 }
 .listmenu-footer  a{
	 color: white;
 }
 /* Active */
 
 .accordion-item.is-active .accordion-thumb::before {
	 -webkit-transform: rotate(45deg);
	 transform: rotate(45deg);
 }
 .footerbg {
	 background-color: #379595;
	 color: white;
 }
 
 .footermenugroup2 h1,
 .bordertopwhite {
	 border-bottom: 1px solid white;
 }
 
 .copyrighttext {
	 padding: 20px 60px;
	 font-size: 1em;
	 font-weight: 200;
 }
 
 .footermenugroup2,
 .footermenugroup {
	 padding: 20px 60px;
	 font-size: 1.2em;
 }
 
 .footermenugroup ul li a {
	 color: white;
 }
 
 .footermenugroup li {
	 line-height: 40px;
	 border-bottom: 1px solid white;
 }
 
 .footermenugroup2 li {
	 display: block;
	 line-height: 40px;
 }
 
 .footermenugroup2 a {
	 color: white;
 }
 
 .logofooter {
	 padding: 30px;
 }
 
 @media (max-width: 1500px) {
	 .footermenugroup2,
	 .footermenugroup {
		 font-size: 1em;
		 padding: 10px;
	 }
	 .copyrighttext {
		 font-size: 1em;
		 padding: 20px;
	 }
 }
 @media (max-width: 767px) {

	 .copyrighttext {
		 font-size: 0.8em;
		 padding: 20px;
	 }
	 .logofooter > img{
		 width: 140px;
	 }
	 
 }
</style>
<div class="footerbg  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
 <div class="container-fluid nopad">
	 <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
	 <div class="row">
		 <div class="col-lg-3  wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="0.1s">
			 <div class="footermenugroup">
				 <ul>
					 <li><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
				 	 <li><a href="{{url('/mutualfunds')}}">{{trans('messages.privatefunds')}}</a></li>
				 	 <li><a href="{{url('/privatefunds')}}">{{trans('messages.mutualfunds')}}</a></li>
				 	 <li><a href="{{url('/fundsprice')}}">{{trans('messages.nav')}}</a></li>
				 	 <li><a href="{{url('/funds_perf')}}">{{trans('messages.performance')}}</a></li>
					 <li><a href="{{url('/transaction')}}">{{trans('messages.tran')}} </a></li>
					 <li><a href="{{url('/about')}}">{{trans('messages.about')}}</a></li>
				 	 <li><a href="{{url('/contact')}}">{{trans('messages.contact')}}</a></li>
				 </ul>
			 </div>
		 </div>
		 <div class="col-lg-5  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.2s">
			 <div class="footermenugroup">
				 <ul>
				 	<li><a href="{{url('/economic')}}">{{trans('messages.economic')}}</a></li>
					 <li><a href="{{url('/knowledge')}}">{{trans('messages.knowledge')}}</a></li>
				 	 <li><a href="{{url('/downloadreport')}}">{{trans('messages.report')}}</a></li>
					 <li><a href="{{url('/reportfunds')}}">{{trans('messages.reportfunds')}}</a></li>
					 <li><a href="#">{{trans('messages.investment')}}</a></li>
					 <li><a href="{{url('/calendar')}}">{{trans('messages.calendar')}}</a></li>
					 <li><a href="{{url('/downloadform')}}">{{trans('messages.downloadform')}}</a></li>
					 <li><a href="{{url('/statusupdate')}}">{{trans('messages.statusupdate')}}</a></li>
					 <li><a href="{{url('/faq')}}">{{trans('messages.faq')}}</a></li>
				 </ul>
			 </div>
		 </div>
		 @php
			 $contect = \App\Models\Contact::where('type','=','S')->select()->get();
		 @endphp
		 <div class="col-lg-4  wow fadeInRight" data-wow-duration="1.1s" data-wow-delay="0.3s">
			 <div class="footermenugroup2">
				 <h1>Contact us</h1>
				 @foreach ($contect as $_contect)
					 <li><img src="{{asset('uploads/Contact/'.$_contect->photo)}}"> <a href="{{$_contect->link}}" target="_blank">{{$_contect->name_th}}</a></li>
				 @endforeach
				 
				 {{-- <li>
					 <a href="#"><img src="{{asset('images/icon-www.png')}}"> www.innotechasset.com</a>
				 </li>
				 <li>
					 <a href="#"><img src="{{asset('images/icon-mail.png')}}"> marketing@innotechasset.com</a>
				 </li>
				 <li>
					 <a href="https://www.facebook.com/Innotechasset/" target="_blank"><img src="{{asset('images/icon-fb.png')}}"> Innotechasset</a>
				 </li>
				 <li>
					 <a href="#"><img src="{{asset('images/icon-line.png')}}"> Innotechasset</a>
				 </li> --}}
				 <br>
				 <h1>Company Group</h1>
				 <div class="companymenu">
				 <li><a href="http://www.seamico.com/" target="_blank"><img src="{{asset('images/company_03.png')}}"></a></li>
				 <li><a href="https://www.ktzmico.com" target="_blank"><img src="{{asset('images/company_05.png')}}"></a></li>
				 <li><a href="http://www.sedigital.io/" target="_blank"><img src="{{asset('images/company_07.png')}}"></a></li>
				 </div>
	 
			 </div>
		 </div>
	 </div>
	 <div class="row mt-3 mb-2">
		 <div class="col  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			 <div class="bordertopwhite"></div>
		 </div>
	 </div>
	 </div>
	 <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
				 <ul class="accordion-in-mobile-footer  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
					 <li class="accordion-item">
						 <h3 class="accordion-thumb">Site map</h3>
						 <div class="accordion-panel">
							 <ul class="listmenu-footer">
								<li><a href="{{url('/')}}">{{trans('messages.home')}}</a></li>
					 <li><a href="{{url('mutualfunds')}}">{{trans('messages.privatefunds')}}</a></li>
					 <li><a href="{{url('/privatefunds')}}">{{trans('messages.mutualfunds')}}</a></li>
					 <li><a href="{{url('/fundsprice')}}">{{trans('messages.nav')}}</a></li>
					 <li><a href="{{url('/funds_perf')}}">{{trans('messages.performance')}}</a></li>
					 <li><a href="{{url('/transaction')}}">{{trans('messages.tran')}}</a></li>
					 <li><a href="{{url('/about')}}">{{trans('messages.about')}}</a></li>
					 <li><a href="{{url('/contact')}}">{{trans('messages.contact')}}</a></li>
					  <li><a href="{{url('/economic')}}">{{trans('messages.economic')}}</a></li>
					 <li><a href="{{url('/knowledge')}}">{{trans('messages.knowledge')}}</a></li>
					 <li><a href="{{url('/downloadreport')}}">{{trans('messages.report')}}</a></li>
					 <li><a href="{{url('/reportfunds')}}">{{trans('messages.reportfunds')}}</a></li>
					 <li><a href="#">{{trans('messages.investment')}}</a></li>
					 <li><a href="{{url('/calendar')}}">{{trans('messages.calendar')}}</a></li>
					 <li><a href="{{url('/downloadform')}}">{{trans('messages.downloadform')}}</a></li>
					 <li><a href="{{url('/statusupdate')}}">{{trans('messages.statusupdate')}}</a></li>
					 <li><a href="{{url('/faq')}}">{{trans('messages.faq')}}</a></li>
							 </ul>
						 </div>
					 </li>
					 <li class="accordion-item">
						 <h3 class="accordion-thumb">Contact info</h3>
						 <div class="accordion-panel">
							 <ul class="listmenu-footer">
								@foreach ($contect as $_contect)
									<li><img src="{{asset('uploads/Contact/'.$_contect->photo)}}"> <a href="{{$_contect->link}}">{{$_contect->name_th}}</a></li>
								@endforeach
								{{-- <li><img src="{{asset('images/icon-tel.png')}}"><a href="#">02 624 6333</a> </li>
								<li>
									<a href="#"><img src="{{asset('images/icon-www.png')}}"> www.innotechasset.com</a>
								</li>
								<li>
									<a href="#"><img src="{{asset('images/icon-mail.png')}}"> marketing@innotechasset.com</a>
								</li>
								<li>
									<a href="https://www.facebook.com/Innotechasset/" target="_blank"><img src="{{asset('images/icon-fb.png')}}"> Innotechasset</a>
								</li>
								<li>
									<a href="#"><img src="{{asset('images/icon-line.png')}}"> Innotechasset</a>
								</li> --}}
							 </ul>
						 </div>
					 </li>
					 
					  <li class="accordion-item">
						 <h3 class="accordion-thumb">Company Group</h3>
						 <div class="accordion-panel">
							 <ul class="listmenu-footer">
							   <a href="http://www.seamico.com/" target="_blank"><img src="{{asset('images/company_03.png')}}" style="padding-left:10px;"></a>
								<a href="https://www.ktzmico.com" target="_blank"><img src="{{asset('images/company_05.png')}}"></a>
								<a href="http://www.sedigital.io/" target="_blank"><img src="{{asset('images/company_07.png')}}"></a>
							 </ul>
						 </div>
					 </li>
					 
				 </ul>
		  
	 </div>

	 <div class="row">
	 
		 <div class="col-lg-9 copyrighttext">{{trans('messages.copyrighttext')}}
			 <br> © 2019 INNOTECH ASSET MANAGEMENT COMPANY LIMITED ALL RIGHT RESERVED. </div>
		 <div class="col-lg-3 logofooter"> <img src="{{asset('images/logo_footer.png')}}"> </div>
	 </div>
 </div>
</div>
<script>
 $(function () {
	 // (Optional) Active an item if it has the class "is-active"	
	 $(".accordion-in-mobile-footer > .accordion-item.is-active").children(".accordion-panel").slideDown();
	 $(".accordion-in-mobile-footer > .accordion-item").click(function () {
		 // Cancel the siblings
		 $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
		 // Toggle the item
		 $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
	 });
 });
</script>