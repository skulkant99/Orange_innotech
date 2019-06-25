<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	@include('inc_header') <?php $pageName="funds"; ?>
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
							<li class="breadcrumb-item"><a href="#">{{trans('messages.home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('messages.privatefunds')}}</li>
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
								<div class="bannertop_private">
									<div class="container">
										<div class="row">
											<div class="col">
												<div class="bannertxt_top">
													<h5>INNOTECH</h5>
													<h1>กองทุนส่วนบุคคล<span class="boldtext"> Private Funds</span></h1> </div>
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
						<div class="title_head1"> กองทุนส่วนบุคคล <span class="bluetxt">Private Funds</span> </div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col">
						<div class="detail_private">
							<h2>{{trans('messages.fund_data')}}</h2>
							<p><span class="orangetxt">{{trans('messages.privatefunds')}} </span>
								@foreach ($fund as $k_fund => $v_fund)
									@if ($v_fund->sort_id == 1)
										{!!($fund[$k_fund]['detail_'.$lang])!!}
									@endif
								@endforeach
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="bggray mt-5">
				<div class="container">
					<div class="row">
						<div class="detail_private" style="margin-left:20px;">
								@foreach ($fund as $k_fund => $v_fund)
									@if ($v_fund->sort_id == 2)
										{!!($fund[$k_fund]['detail_'.$lang])!!}
									@endif
								@endforeach
							{{-- <h2>คุณสมบัติของนักลงทุน</h2>
							<p>เงินลงทุนในกองทุนส่วนบุคคลอาจมาจากผู้ลงทุนประเภท “บุคคลธรรมดา” หรือ “นิติบุคคล” ก็ได้ แต่ต้องเป็นผู้ลงทุนที่มีสัญชาติไทยทั้งหมด หรือเป็นผู้ลงทุนชาวต่างชาติทั้งหมดเท่านั้น
								<br> (กองทุนรวมจึงมีสัญชาติเป็นไปตามสัญชาติของผู้ลงทุน ดังนั้น จะเป็นกองเงินลงทุนที่มาจากผู้ลงทุนสัญชาติไทยร่วมกับผู้ลงทุนต่างชาติไม่ได้) ในกรณีของคณะบุคคลจะต้องประกอบด้วย
								<br> บุคคลอย่างน้อย 2 คนขึ้นไป แต่ต้องไม่เกิน 9 คน</p> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col">
						<div class="detail_private">
							@foreach ($fund as $k_fund => $v_fund)
								@if ($v_fund->sort_id == 3)
									{!!($fund[$k_fund]['detail_'.$lang])!!}
								@endif
							@endforeach
							{{-- <h2>กองทุนส่วนบุคคลถูกคุ้มครองด้วยกฏหมายและองค์กรใดร</h2>
							<p>ธุรกิจการจัดการกองทุนส่วนบุคคล อยู่ภายใต้กรอบกฎหมายตามพระราชบัญญัติหลักทรัพย์และตลาดหลักทรัพย์ พ.ศ.2535 และอยู่ภายใต้การกำกับดูแลของสำนักงานคณะกรรมการกำกับหลักทรัพย์และตลาดหลักทรัพย์ (สำนักงาน ก.ล.ต.)</p> --}}
							<h2 class="mt-5">{{trans('messages.structure')}}</h2>
							<a href="images/private_funds_05.png" class="single_image"><img src="images/private_funds_05.png" class="img-fluid"></a>
						</div>
					</div>
				</div>
			</div>
				<div class="bggray mt-5">
				<div class="container">
					<div class="row">
						<div class="detail_private" style="margin-left:20px;">
							@foreach ($fund as $k_fund => $v_fund)
								@if ($v_fund->sort_id == 5)
									{!!($fund[$k_fund]['detail_'.$lang])!!}
								@endif
							@endforeach
							{{-- <h2>นโยบายการลงทุนของกองทุนส่วนบุคคล</h2>
							<p>เนื่องจากกองทุนส่วนบุคคล เป็นการบริหารจัดการกองทุนภายใต้ข้อตกลงระหว่างผู้ลงทุนและบริษัทจัดการ ทำให้กองทุนส่วนบุคคลสามารถมี นโยบายการลงทุนที่หลากหลาย และผู้ลงทุนสามารถเปลี่ยนแปลงนโยบายการลงทุนได้ตามความต้องการ อย่างไรก็ดี เพื่อประโยชน์สูงสุดแก่ผู้ลงทุนภายใต้ความเสี่ยงที่เหมาะสม ก่อนการว่าจ้างบริหารจัดการกองทุนส่วนบุคคล บริษัทจัดการจะขอข้อมูลของลูกค้าเกี่ยวกับฐานะทางการเงิน ภาระทางการเงิน ระยะเวลาในการลงทุน ประสบการณ์ในการลงทุน ระดับความเสี่ยงที่ยอมรับได้และผลตอบแทนที่คาดหวัง เพื่อทำความรู้จักสถานะของลูกค้า (Know your customer) และนำข้อมูลที่ได้มาวิเคราะห์เพื่อกำหนดนโยบายการลงทุนให้เหมาะสมกับลูกค้า (Suitability) ก่อนการกำหนดนโยบายการลงทุน ทั้งนี้ ตัวอย่างนโยบายการลงทุนของกองทุนส่วนบุคคลที่เป็นที่นิยมในปัจจุบัน ได้แก่</p> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col">
						@foreach ($fund as $k_fund => $v_fund)
							@if ($v_fund->sort_id == 6)
								{!!($fund[$k_fund]['detail_'.$lang])!!}
							@endif
						@endforeach
					
							
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="benefit_info">
							<h3> คาดหวังผลตอบแทนน้อย <br> <span class="bluetxt lighttxt">ความเสี่ยงต่ำ(Conservative)</span></h3>
							<img src="images/private_funds_09.png" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="benefit_info">
							<h3> คาดหวังผลตอบแทนปานกลาง <br> <span class="bluetxt lighttxt">ความเสี่ยงปานกลาง (Moderate)</span></h3>
							<img src="images/private_funds_11.png" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="benefit_info">
							<h3> คาดหวังผลตอบแทนสูง  <br> <span class="bluetxt lighttxt">ความเสี่ยงสูง (Aggressive)</span></h3>
							<img src="images/private_funds_13.png" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="color_each">
							<img src="images/private_funds_19.png"> {{trans('messages.debt')}}
						</div>
					</div>
					<div class="col">
						<div class="color_each">
							<img src="images/private_funds_22.png"> {{trans('messages.equity')}}
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col">
						<div class="detail_private">
							@foreach ($fund as $k_fund => $v_fund)
								@if ($v_fund->sort_id == 7)
									{!!($fund[$k_fund]['detail_'.$lang])!!}
								@endif
							@endforeach
							{{-- <h2>ภาระทางภาษีของกองทุนส่วนบุคคล</h2>
							<p>  เสียภาษีในอัตราปกติตามประเภทของผู้ลงทุนและลักษณะของตราสารที่ลงทุน	</p>
						<br>
							<h2>กองทุนส่วนบุคคล แตกต่างจากกองทุนรวมอย่างไร</h2>
							<p>  ทรัพย์สินของกองทุนส่วนบุคคลไม่ได้จัดสรรออกเป็นหน่วยลงทุนอย่างกองทุนรวม ผู้ลงทุนเพียงแต่นำเงินลงทุนที่มีอยู่ไปให้บริษัทจัดการนำไปวางแผนและจัดการลงทุนตามความเหมาะสมกับตนเอง ดังนั้น กรรมสิทธิ์ในทรัพย์สินหรือเงินกองทุนจึงเป็นของผู้ลงทุน ชื่อเจ้าของทรัพย์สินก็เป็นชื่อของผู้ลงทุน แต่จะมีการระบุชื่อของบริษัทจัดการควบคู่ไปด้วย เพื่อให้เกิดความชัดเจนว่าทรัพย์สินของผู้ลงทุนนั้นถูกบริหารโดยบริษัทจัดการ <br><br>
								 ผลตอบแทนที่ได้รับจากการลงทุนในกองทุนส่วนบุคคลอาจต้องเสียภาษีด้วยตามสถานะของเจ้าของเงิน (ที่อาจเป็นได้ทั้งบุคคลธรรมดาหรือนิติบุคคล) เช่น หากคุณเป็นบุคคลธรรมดาและกองทุนส่วนบุคคลนำเงินไปลงทุนในตราสารหนี้ที่ได้รับผลตอบแทนเป็นดอกเบี้ย ดอกเบี้ยที่ได้รับก็ต้องถูกหักภาษีตามปกติ (แต่ถ้าเป็นกองทุนรวมเมื่อนำเงินไปลงทุนและได้ผลตอบแทนในรูปของเงินปันผลหรือดอกเบี้ย ก็จะได้รับยกเว้นไม่ต้องเสียภาษี) <br><br>
								 ผู้ลงทุนในกองทุนส่วนบุคคลควรจะมีความรู้ความเข้าใจเกี่ยวกับการลงทุนอยู่ในระดับดี เพื่อจะได้มีความเข้าใจในนโยบายการลงทุนที่ผู้จัดการกองทุนนำเสนอ และสามารถร่วมกำหนดนโยบายการลงทุนที่เหมาะสมกับตนเองได้</p>
						<br>
							<h2>ประโยชน์ของการลงทุนในกองทุนส่วนบุคคล</h2>
							<p> - เพิ่มโอกาสในการลงทุนที่มากกว่าการลงทุนในหลักทรัพย์เองโดยตรง และเงินลงทุนสามารถกระจายความเสี่ยงได้มากกว่าการลงทุนโดยตรง โดยอาศัยทีมผู้จัดการกองทุนมืออาชีพในการคัดเลือกและจัดสรรเงินลงทุนให้แก่ผู้ลงทุน  <br>
								- มีความเป็นส่วนตัว และและมีความยืดหยุ่นกว่าการลงทุนในกองทุนรวมทั่วไป โดยผู้ลงทุนเป็นผู้กำหนดนโยบายร่วมกับผู้จัดการกองทุน และสามารถเปลี่ยนแปลงนโยบายการลงทุนได้ตามความต้องการของตน อีกทั้งยังสามารถยกเลิกสัญญาได้ตลอดเวลา (ต้องแจ้งความประสงค์การเลิกสัญญาเป็นลายลักษณ์อักษรเท่านั้น)  <br>
								- สามารถเข้าถึงข้อมูลรายละเอียดการลงทุนได้อย่างใกล้ชิด เสมือนลงทุนด้วยตนเอง  <br>
								- บริษัทจัดการจะหาโอกาสการลงทุนในตราสารใหม่ๆที่ให้ผลตอบแทนสูงอยู่เสมอ อาทิ ตราสารที่เสนอขายในตลาดแรก เป็นต้น  <br>
								- มีอำนาจต่อรองที่มากขึ้นจากการบริหารเงินกองทุนรวมกัน  <br>
								- ลดภาระการติดต่อสถาบันการเงิน การติดตามข่าวสาร และ การบริหารเงินด้วยตนเอง</p> <br>
			
							<h2>ติดต่อ-สอบถาม</h2>
							<p>ฝ่ายการตลาดกองทุนส่วนบุคคล บริษัทหลักทรัพย์จัดการกองทุน โซลาริส จำกัด  <br>โทร 02 – 624 – 6305 และ 02 – 624 – 6313</p>
						<br><br> --}}
					
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
			
				<script>
                $(document).ready(function () {
                    $(".single_image").fancybox();
                });
            </script>
</body>

</html>