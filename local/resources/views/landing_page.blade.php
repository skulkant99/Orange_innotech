<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
<head>
		@include('inc_header')
</head>
<style>
		.container {
		  position: relative;
		  width: 100%;
		
		}
		
		.container img {
		  width: 100%;
		  height: auto;
		}
		
		.container .btn {
		  position: absolute;
		  top: 90%;
		  left: 35%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		 
		  color: white;
		  font-size: 16px;
		  padding: 12px 24px;
		  border: none;
		  cursor: pointer;
		  border-radius: 5px;
		  text-align: center;
		}
		.container .btnen {
		  position: absolute;
		  top: 90%;
		  left: 65%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		 
		  color: white;
		  font-size: 16px;
		  padding: 12px 24px;
		  border: none;
		  cursor: pointer;
		  border-radius: 5px;
		  text-align: center;
		}
		
	
		</style>
<body>
		<div class="container">
				<img src="{{asset('images/popup/D-Landing01.jpg')}}">						
				<a href="{{url('/')}}" class="btn"><img src="{{asset('images/popup/butom-TH.png')}}"></a>
				<a href="{{url('lang/en')}}" class="btnen"><img src="{{asset('images/popup/butom-EN.png')}}"></a>
		</div>

		
</body>

</html>