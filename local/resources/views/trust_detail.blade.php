<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('inc_header')<?php $pageName="funds"; ?>
</head>

<body>
    <style>
        .title_head1 {
            text-align: left;
        }

        .funds_table {
            text-align: left;
        }

        .funds_table thead tr th {
            text-align: center;
        }

        .table-bordered th,
        .table-bordered td,
        .funds_table.table-bordered th,
        .funds_table.table-bordered td {
            border: 1px solid #464646;
            vertical-align: middle;
        }

        .funds_table_perf {
            background-color: #f9f9f9;
            color: black;
        }

        .funds_table_perf thead {
            font-size: 1.3em;
            font-family: 'Kanit';
        }

        .funds_table_perf thead th {
            border-left: none;
            border-right: none;
        }

        .funds_table_perf .setheigh {
            height: 200px;
            font-family: 'Kanit';
        }

        .btn-primary {
            border-radius: 50px;
            padding: 10px 30px;
        }

        .funds_table i {
            color: #379494;
        }

        .reiticon {
            width: 20px;
        }

        .fa-circle:before {
            font-size: 0.5em;
        }

        .funds_reit thead th {
            background-color: #379494;
            color: white;
        }

        .lightorange {
            background-color: #ffd8cb;
        }

        .bg_orange {
            background-color: #eb6b30 !important;
            color: white;
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
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ trans('messages.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{url('trust')}}">{{ trans('messages.trust') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$trust['name_'.$lang]}}</li>
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
                            <div class="bannertop_trust">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="bannertxt_top">
                                                <h5>INNOTECH</h5>
                                                <h1>ทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์ <br><span class="boldtext"> Real Estate Investment Trust (REIT)</span></h1>
                                            </div>
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
                    <div class="pic_icon"> <img src="{{asset('images/funds_price_detail_05.png')}}"> </div>
                    <div class="righttext">
                        <div class="title_head1"> {{$trust['name_'.$lang]}}
                            <br> <span class="bluetxt">{{$trust['name_en']}}</span> </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <div class="detail_content">
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('inc_footer')
    <script>
        // for heading
        $(window).scroll(function() {
            const a = $(this).scrollTop(),
                b = 800;
            $("h1").css({
                backgroundPosition: "center " + a / 2 + "px"
            });
            $(".parallax").css({
                top: a / 1.6 + "px",
                opacity: 2 - a / b
            });
        });

    </script>

</body>

</html>
