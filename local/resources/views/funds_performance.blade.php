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
							<h5>ข้อมูล ณ วันที่ 30 เมษายน 2562</h5> </div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<table class="table funds_table_perf table-bordered table-responsive-lg">
							<thead>
								<tr>
									<th scope="col" class="text-left">กองทุน</th>
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
									<th scope="row" class="text-left">กองทุน EP-LTF</th>
									<td>4.35</td>
									<td>2.17</td>
									<td>2.58</td>
									<td>-3.53</td>
									<td>0.19</td>
									<td>2.03</td>
									<td>9.82</td>
									<td>90.97</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">เกณฑ์มาตรฐาน</th>
									<td>8.10</td>
									<td>4.10</td>
									<td>4.00</td>
									<td>-3.34</td>
									<td>9.17</td>
									<td>6.71</td>
									<td>17.47</td>
									<td>235.83</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของผลการดำเนินงาน  </th>
									<td>8.41</td>
									<td>7.12</td>
									<td>11.19</td>
									<td>12.37</td>
									<td>11.69</td>
									<td>13.12</td>
									<td>15.71</td>
									<td>16.21</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของตัวชี้วัด </th>
									<td>7.85</td>
									<td>7.44</td>
									<td>10.03</td>
									<td>11.43</td>
									<td>10.49</td>
									<td>11.68</td>
									<td>16.21</td>
									<td>18.89</td>
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
									<th scope="col" class="text-left">ปี</th>
									<th scope="col">2552</th>
									<th scope="col">2553</th>
									<th scope="col">2554</th>
									<th scope="col">25555</th>
									<th scope="col">2556</th>
									<th scope="col">2557</th>
									<th scope="col">2558</th>
									<th scope="col">2559</th>
									<th scope="col">2560</th>
									<th scope="col">2561</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="text-left">กองทุน EP-LTF</th>
									<td>29.01</td>
									<td>22.10</td>
									<td>7.75</td>
									<td>27.28</td>
									<td>1.15</td>
									<td>38.27</td>
									<td>-17.29</td>
									<td>-1.34</td>
									<td>10.93</td>
									<td>-10.70</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">เกณฑ์มาตรฐาน</th>
									<td>71.35</td>
									<td>47.80</td>
									<td>3.69</td>
									<td>40.53</td>
									<td>-3.63</td>
									<td>19.12</td>
									<td>-11.23</td>
									<td>23.85</td>
									<td>17.30</td>
									<td>-8.08</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของผลการดำเนินงาน</th>
									<td>23.55</td>
									<td>14.64</td>
									<td>20.62</td>
									<td>12.11</td>
									<td>20.22</td>
									<td>16.08</td>
									<td>13.48</td>
									<td>13.88</td>
									<td>8.60</td>
									<td>13.03</td>
								</tr>
								<tr>
									<th scope="row" class="text-left">ความผันผวนของตัวชี้วัด</th>
									<td>25.11</td>
									<td>17.66</td>
									<td>22.49</td>
									<td>12.69</td>
									<td>20.88</td>
									<td>13.03</td>
									<td>13.67</td>
									<td>14.19</td>
									<td>6.42</td>
									<td>12.04</td>
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