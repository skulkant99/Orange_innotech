<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('inc_header') <?php $pageName="funds_perf"; ?>
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
		
		.title_head1 {
			text-align: left;
		}
		
	</style>
	@include('inc_topmenu')
		<div class="container-fluid nopad">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
							<li class="breadcrumb-item active" aria-current="page">ผลการดำเนินงาน</li>
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
						<div class="row">
							<div class="col-lg-5">
								<div class="search_funds">
									<label>เลือกกองทุน</label>
									<select id="selectbasic" name="selectbasic" class="form-control">
										<option value="1">กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว</option>
										<option value="2">กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว</option>
									</select>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="search_funds">
									<label>เลือกวันที่ต้องการแสดงข้อมูล</label>
									<form action="example.php" method="post">
										<input autocomplete="off" class="datepicker form-control boxbox" placeholder="DD/MM/YY" /> </form>
								</div>
							</div>
							<div class="col-lg-2"> <a href="#" class="btn btn-success">ตกลง</a> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="sec_title">
							<h2>ผลการดำเนินงานตามปีปฎิทินย้อนหลัง</h2>
							<h5>ข้อมูล ณ วันที่ 17 เมษายน 2562</h5> </div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table funds_table_perf table-bordered table-responsive-lg">
							<thead>
								<tr>
									<th scope="col" class="text-left">กองทุน EP-LTF</th>
									<th scope="col">Year to date</th>
									<th scope="col">3 เดือน</th>
									<th scope="col">6 เดือน</th>
									<th scope="col">1 ปี</th>
									<th scope="col">3 ปี</th>
									<th scope="col">5 ปี</th>
									<th scope="col">10 ปี</th>
									<th scope="col">ตั้งแต่จัดตั้งกองทุน</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="text-left">เกณฑ์มาตรฐาน</th>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของผลการดำเนินงาน</th>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของตัวชี้วัด</th>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="sec_title">
							<h2>ผลการดำเนินงานตามปีปฎิทินย้อนหลัง (% ต่อปี)</h2> </div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table funds_table_perf table-bordered  table-responsive-lg">
							<thead>
								<tr>
									<th scope="col" class="text-left">กองทุน EP-LTF</th>
									<th scope="col">Year to date</th>
									<th scope="col">3 เดือน</th>
									<th scope="col">6 เดือน</th>
									<th scope="col">1 ปี</th>
									<th scope="col">3 ปี</th>
									<th scope="col">5 ปี</th>
									<th scope="col">10 ปี</th>
									<th scope="col">ตั้งแต่จัดตั้งกองทุน</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="text-left">เกณฑ์มาตรฐาน</th>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของผลการดำเนินงาน</th>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของตัวชี้วัด</th>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
									<td>2.78</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="list_warn">
							<li><i class="fas fa-exclamation-triangle"></i> เกณฑ์มาตรฐาน : ผลตอบแทนรวมตลาดหลักทรัพย์แห่งประเทศไทย (SET TRI)</li>
							<li><i class="fas fa-exclamation-triangle"></i> เอกสารการวัดผลการดําเนินงานของกองทุนรวมฉบับนี ;ได้จัดทําขึ ;นตามมาตรฐานการวัดและนําเสนอผลการดําเนินงานของกองทุนรวมของสมาคมบริษัทจัดการลงทุน</li>
							<li><i class="fas fa-exclamation-triangle"></i> ผลการดําเนินงานในอดีตของกองทุนรวมมิได้เป็ นสิCงยืนยันถึงผลการดําเนินงานในอนาคต </li>
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
					$(function () {
						$('.datepicker').datepicker({
							dateFormat: 'dd/mm/yy'
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