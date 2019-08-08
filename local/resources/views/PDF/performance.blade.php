
<style>
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

/* .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
.funds_table_perf {
    background-color: #379494;
    
   
    text-align: center;
   
}
.table-bordered {
    border: 1px solid #dee2e6;
}
table {
    border-collapse: collapse;
} */

.mainlogo {
    margin: 20px 0px;
    text-align: center;
}
/*.text-left {
    text-align: left !important;
} */
table {
  width: 100%;
}
th, td {
  text-align: left;
  padding: 3px;
}

body {
    font-family: 'kanit_extralightregular', sans-serif;
    animation: fade-in 1s, bg-move 10s linear infinite;
    -webkit-animation: fade-in 1s, bg-move 10s linear infinite;
    font-size: 1em;
    background-color: white;
}
</style>
<body style="font-size: 10pt;">
    <div class="mainlogo">
        <a href=""><img src="{{asset('images\logo.png')}}" class="img-fluid"></a>
    </div>
@if (count($perfor) > 0)
				
				
								<h2>ผลการดำเนินงานตามปีปฎิทินย้อนหลัง</h2>
									@php
										$date_create = $perfor[0]->date;

										$date_create_edit = explode('-', $date_create);
										$month = $date_create_edit[1];
										$year   = $date_create_edit[0] + 543;
										$day  = $date_create_edit[2];

					
										switch ($month) {
											case '01':
												$month = "มกราคม";
												break;
											case '02':
												$month = "กุมภาพันธ์";
												break;
											case '03':
												$month = "มีนาคม";
												break;
											case '04':
												$month = "เมษายน";
												break;
											case '05':
												$month = "พฤษภาคม";
												break;
											case '06':
												$month = "มิถุนายน";
												break;
											case '07':
												$month = "กรกฎาคม";
												break;
											case '08':
												$month = "สิงหาคม";
												break;
											case '09':
												$month = "กันยายน";
												break;
											case '10':
												$month = "ตุลาคม";
												break;
											case '11':
												$month = "พฤศจิกายน";
												break;
											case '12':
												$month = "ธันวาคม";
												break;
											default:
												# code...
												break;
										}
									@endphp
								<p>ข้อมูล ณ วันที่ {{$day}} {{$month}} {{$year}}</p> </div>
				
                @if ($perfor[0]->type == 'EP-LTF')
                
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-left" style="background-color: #379494; color: white; font-size: 1.1em;" >กองทุน</th>	
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id <= 8)
                                                <th scope="col" style="background-color: #379494; color: white;   font-size: 1.1em;">{{$v_perfor->name}}</th>
                                            @endif
                                        @endforeach												
                                        
                                    </tr>
                                </thead>
                            
                                <tbody>
                                
                                    <tr>
                                        <th scope="row" class="text-left" >กองทุน EP-LTF</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id <= 8)
                                                @if ($v_perfor->fund != 0)
                                                    <th style="background-color: #fdd495;">{{$v_perfor->fund}}</th>
                                                @else
                                                    <th style="background-color: #fdd495;">N/A</th>
                                                @endif
                                            @endif
                                        @endforeach											
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-left" >เกณฑ์มาตรฐาน</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id <= 8)
                                                @if ($v_perfor->gain != 0)
                                                    <th>{{$v_perfor->gain}}</th>
                                                @else
                                                    <th>N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-left" >ความผันผวนของผลการดำเนินงาน  </th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id <= 8)
                                                @if ($v_perfor->result != 0)
                                                    <th style="background-color: #fdd495; ">{{$v_perfor->result}}</th>
                                                @else
                                                    <th style="background-color: #fdd495; ">N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-left" >ความผันผวนของตัวชี้วัด </th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id <= 8)
                                                @if ($v_perfor->Indicator != 0)
                                                    <th >{{$v_perfor->Indicator}}</th>
                                                @else
                                                    <th >N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                        
                                    </tr>
                                </tbody>
                            </table>
                    
                                <h2>ผลการดำเนินงานตามปีปฎิทินย้อนหลัง (% ต่อปี)</h2> </div>
                   
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-left" style="background-color: #379494; color: white;  font-size: 1.1em;">ปี</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id > 8)
                                                <th scope="col" style="background-color: #379494;  color: white; font-size: 1.1em;">{{$v_perfor->name}}</th>
                                            @endif
                                        @endforeach		
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-left">กองทุน EP-LTF</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id > 8)
                                                @if ($v_perfor->fund != 0)
                                                    <th scope="col" style="background-color: #fdd495; ">{{$v_perfor->fund}}</th>	
                                                @else
                                                    <th style="background-color: #fdd495; ">N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-left" >เกณฑ์มาตรฐาน</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id > 8)
                                                @if ($v_perfor->gain != 0)
                                                    <th scope="col">{{$v_perfor->gain}}</th>	
                                                @else
                                                    <th>N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-left">ความผันผวนของผลการดำเนินงาน</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id > 8)
                                                @if ($v_perfor->result != 0)
                                                    <th scope="col" style="background-color: #fdd495; ">{{$v_perfor->result}}</th>	
                                                @else
                                                    <th style="background-color: #fdd495; ">N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-left">ความผันผวนของตัวชี้วัด</th>
                                        @foreach ($perfor as $k_perfor => $v_perfor)
                                            @if ($v_perfor->sort_id > 8)
                                                @if ($v_perfor->Indicator != 0)
                                                    <th scope="col">{{$v_perfor->Indicator}}</th>	
                                                @else
                                                    <th >N/A</th>
                                                @endif
                                            @endif
                                        @endforeach	
                                        
                                    </tr>
                                </tbody>
                            </table>
                     
                    @elseif($perfor[0]->type == 'S-EQRMF')
					
								<table>
									<thead>
										<tr>
											<th scope="col" class="text-left" style="background-color: #379494; color: white; font-size: 1.1em;">กองทุน</th>	
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													<th scope="col" style="background-color: #379494; color: white; font-size: 1.1em;">{{$v_perfor->name}}</th>
												@endif
											@endforeach												
											
										</tr>
									</thead>
								
									<tbody>
									
										<tr>
											<th scope="row" class="text-left" >กองทุน S-EQRMF</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->fund != 0)
														<th style="background-color: #fdd495; ">{{$v_perfor->fund}}</th>
													@else
														<th style="background-color: #fdd495; ">N/A</th>
													@endif
												@endif
											@endforeach											
										
										</tr>
										<tr>
											<th scope="row" class="text-left" >เกณฑ์มาตรฐาน</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->gain != 0)
														<th>{{$v_perfor->gain}}</th>
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
										
										</tr>
										<tr>
											<th scope="row" class="text-left">ความผันผวนของผลการดำเนินงาน  </th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->result != 0)
														<th style="background-color: #fdd495; ">{{$v_perfor->result}}</th>
													@else
														<th style="background-color: #fdd495; ">N/A</th>
													@endif
												@endif
											@endforeach	
										
										</tr>
										<tr>
											<th scope="row" class="text-left">ความผันผวนของตัวชี้วัด </th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id <= 8)
													@if ($v_perfor->Indicator != 0)
														<th>{{$v_perfor->Indicator}}</th>
													@else
														<th>N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
									</tbody>
								</table>
							
					
									<h2>ผลการดำเนินงานตามปีปฎิทินย้อนหลัง (% ต่อปี)</h2> </div>
							
					
								<table>
									<thead>
										<tr>
											<th scope="col" class="text-left" style="background-color: #379494; color: white;  font-size: 1.1em;">ปี</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													<th scope="col" style="background-color: #379494; color: white;  font-size: 1.1em;">{{$v_perfor->name}}</th>
												@endif
											@endforeach		
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-left">กองทุน S-EQRMF</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->fund != 0)
														<th scope="col" style="background-color: #fdd495; ">{{$v_perfor->fund}}</th>	
													@else
														<th style="background-color: #fdd495; ">N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
										<tr>
											<th scope="row" class="text-left" >เกณฑ์มาตรฐาน</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->gain != 0)
														<th scope="col" >{{$v_perfor->gain}}</th>	
													@else
														<th >N/A</th>
													@endif
												@endif
											@endforeach	
										
										</tr>
										<tr>
											<th scope="row" class="text-left" >ความผันผวนของผลการดำเนินงาน</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->result != 0)
														<th scope="col" style="background-color: #fdd495; ">{{$v_perfor->result}}</th>	
													@else
														<th style="background-color: #fdd495; ">N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
										<tr>
											<th scope="row" class="text-left" >ความผันผวนของตัวชี้วัด</th>
											@foreach ($perfor as $k_perfor => $v_perfor)
												@if ($v_perfor->sort_id > 8)
													@if ($v_perfor->Indicator != 0)
														<th scope="col" >{{$v_perfor->Indicator}}</th>	
													@else
														<th >N/A</th>
													@endif
												@endif
											@endforeach	
											
										</tr>
									</tbody>
								</table>
						
					@endif
           @endif  
           <br><br>
            <p> เกณฑ์มาตรฐาน : ผลตอบแทนรวมตลาดหลักทรัพย์แห่งประเทศไทย (SET TRI)</p>
            <p> เอกสารการวัดผลการดําเนินงานของกองทุนรวมฉบับนี้ ได้จัดทําขึ้นนตามมาตรฐานการวัดและนําเสนอผลการดําเนินงานของกองทุนรวมของสมาคมบริษัทจัดการลงทุน</p>
			<p> ผลการดําเนินงานในอดีตของกองทุนรวมมิได้เป็นสิ่งยืนยันถึงผลการดําเนินงานในอนาคต</p>
			<p> ต้องการผลการดำเนินงานย้อนหลังเพิ่มเติมกรุณาติดต่อเจ้าหน้าที่ </p>
        </body>