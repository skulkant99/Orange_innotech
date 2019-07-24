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
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('messages.reit') }}</li>
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
                        <div class="title_head1"> ทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์
                            <br> <span class="bluetxt">Real Estate Investment Trust (REIT)</span> </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <div class="detail_content">
                        <li>มีลักษณะเป็น <b>“กองทรัพย์สิน” ที่ถือกรรมสิทธิ์โดยทรัสตี (Trustee) </b>ไม่มีฐานะเป็นนิติบุคคล โดยผู้ก่อตั้ง
                            กองทรัสต์ คือ ผู้ที่จะเข้าเป็นผู้จัดการกองทรัสต์ (REIT manager) ซึ่งจะเป็นผู้เสนอขายหน่วยทรัสต์
                            และนำ เงินที่ได้จากการขายหน่วยทรัสต์มาให้กับทรัสตีที่ตนเองไว้วางใจเพื่อจัดตั้ง REIT โดยสัญญาก่อตั้ง
                            ทรัสต์จะแบ่งหน้าที่ให้ผู้จัดการกองทรัสต์เป็นผู้บริหารจัดการกองทรัสต์และทรัสตีเป็นผู้กำ กับดูแลการ
                            ปฏิบัติหน้าที่ของผู้จัดการกองทรัสต์และเก็บรักษาทรัพย์สิน</li>
                        <br>
                        <h2>ประโยชน์ของ REIT</h2>
                        <table class="table funds_table table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">ระดับเจ้าของทรัพย์สิน</th>
                                    <th scope="col">ระดับผู้ลงทุนทั่วไป</th>
                                    <th scope="col">ระดับกองทรัสต์</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="setheigh">
                                    <td>
                                        เจ้าของสามารถนำอสังหาริมทรัพย์ที่มีรายได้แล้ว
                                        มาระดมทุนเพื่อนำ เงินไปใช้ในการลงทุนและพัฒนา
                                        โครงการใหม่ได
                                    </td>
                                    <td>
                                        <i class="far fa-arrow-alt-circle-right"></i> ไม่ต้องใช้เงินลงทุนจำ นวนมากเช่นเดียวกับการลงทุน
                                        โดยตรงในอสังหาริมทรัพย์ <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มีความมั่นใจในการบริหารงานมากขึ้น ภายใต้การบริหาร
                                        จัดการอสังหาริมทรัพย์ของผู้เชี่ยวชาญ <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มีทางเลือกในการลงทุนในอสังหาริมทรัพย์ได้ หลากหลาย
                                        มากขึ้น
                                    </td>
                                    <td style="max-width:600px;">
                                        <i class="far fa-arrow-alt-circle-right"></i> ลงทุนในอสังหาริมทรัพย์ได้หลากหลายประเภท
                                        มากขึ้น รวมถึงอสังหาริมทรัพย์ในต่างประเทศ <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> สามารถกู้ยืมเงินได้มากขึ้น เพื่อนำ มาลงทุนหรือพัฒนา
                                        อสังหาริมทรัพย์ให้ได้ผลตอบแทนที่สูงขึ้น <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> สามารถพัฒนาอสังหาริมทรัพย์ได้เองบางส่วน <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> เปิดให้บริษัทที่มีความเชี่ยวชาญในธุรกิจ <br>
                                        อสังหาริมทรัพย์ทำ หน้าที่บริหารจัดการ REIT ได้ <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> เป็นสากลเทียบเท่าต่างประเทศ
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <br>


                        <h2>กฎหมายหลักที่เกี่ยวข้องกับ REIT</h2>
                        <li><b>REIT </b>อยู่ภายใต้กฎหมายหลัก 2 ฉบับ ส่วนที่เกี่ยวข้องกับการดำ เนินการของกองทรัสต์และทรัสตีจะอยู่
                            ภายใต้พระราชบัญญัติทรัสต์เพื่อธุรกรรมในตลาดทุน พ.ศ. 2550 ในขณะที่ใบทรัสต์ถือเป็นหลักทรัพย์
                            ตามพระราชบัญญัติหลักทรัพย์และตลาดหลักทรัพย์ พ.ศ. 2535 (พ.ร.บ. หลักทรัพย์ฯ) ดังนั้น การออก
                            และเสนอขายใบทรัสต์ รวมทั้งการเปิดเผยข้อมูลต่างๆ จึงต้องปฏิบัติตามข้อกำ หนดแห่ง พ.ร.บ. หลักทรัพย์ฯ ด้วย</li>
                        <br><br>

                        <h2>โครงสร้างและขั้นตอนการจัดตั้ง REIT</h2>

                        <img src="{{asset('images/reit.jpg')}}" class="img-fluid">

                        <br>
                        <li><b>ผู้จัดการ REIT (REIT manager : RM) </b>จะเป็นผู้ยื่นคำ ขออนุญาตเสนอขายใบทรัสต์ต่อ สำ นักงาน ก.ล.ต.
                            เมื่อได้รับอนุมัติแล้ว RM จะต้องแต่งตั้งผู้จัดจำ หน่ายหลักทรัพย์ (Underwriter) เพื่อนำ เอาใบทรัสต์*
                            ไปเสนอขายให้กับผู้ลงทุนซึ่งในลำ ดับนี้ผู้ที่เข้ามาลงทุนในใบทรัสต์จะมีสถานะเป็นผู้รับผลประโยชน์ และ
                            เมื่อสิ้นสุดการเสนอขายแล้วผู้จัดจำ หน่ายหลักทรัพย์จะโอนเงินไปให้กับทรัสตีเพื่อนำ เงินที่ได้จากการระดมทุน
                            ดังกล่าวไปลงทุนในอสังหาริมทรัพย์ที่มีศักยภาพ สามารถสร้างรายได้ค่าเช่าอย่างสม่ำเสมอ เพื่อที่จะจ่าย
                            ผลตอบแทนให้กับผู้ลงทุนที่เข้ามาซื้อใบทรัสต์
                        </li>
                        <div class="list_warn">

                            <li><i class="fas fa-exclamation-triangle"></i> ใบทรัสต์ คือ ตราสารที่แสดงสิทธิของผู้ถือในฐานะผู้รับประโยชน์ในทรัสต์ ซึ่งมีการแบ่งเป็นหน่วย โดยหน่วยชนิดเดียวกัน มีมูลค่าที่เท่ากัน (unitization) </li>
                        </div>

                        <h2>การขออนุญาตเสนอขายหน่วยทรัสต์ หลักเกณฑ์ที่สำ คัญของ REIT ค่าธรรมเนียมที่สำ คัญ</h2>
                        <li>ผู้ก่อตั้งทรัสต์ ซึ่งจะเข้าเป็นผู้จัดการ REIT (REIT manager) กรณีเป็นการขออนุญาตเสนอขายหน่วย
                            ทรัสต์ครั้งแรก และยังไม่ได้ตั้งกองทรัสต์ หรือผู้จัดการ REIT กรณีที่มีกองทรัสต์ที่จัดตั้งแล้ว ต้องยื่น
                            คำ ขอต่อสำ นักงาน ก.ล.ต. โดยมีเอกสารสำคัญดังนี้
                        </li> <br>

                        <li><i class="far fa-check-circle"></i> สัญญาก่อตั้งทรัสต์ (Trust Deed) หรือร่างสัญญาก่อตั้งทรัสต์ กรณียังไม่ได้ก่อตั้งทรัสต์
                        </li>

                        <li><i class="far fa-check-circle"></i> แบบแสดงรายการข้อมูลการเสนอขายหน่วยทรัสต์ (แบบ filing)

                        </li>

                        <li><i class="far fa-check-circle"></i> รายงานการประเมินมูลค่าอสังหาริมทรัพย์ที่กองทรัสต์จะลงทุน

                        </li>

                        <li><i class="far fa-check-circle"></i> หนังสือรับรองจากผู้ที่จะทำ หน้าที่เป็นทรัสตี

                        </li>

                        <br>
                        <li>สำนักงาน ก.ล.ต. จะพิจารณาคำ ขออนุญาตเสนอขายภายใน 45 วัน นับแต่วันที่ได้รับคำ ขอพร้อม
                            เอกสารหลักฐานครบถ้วน</li>
                        <br>
                        <h2>ผู้เกี่ยวข้องหลักของ REIT
                            ผู้จัดการ( REIT manager : RM )</h2>

                        <table class="table funds_table table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">คุณสมบัติที่สำคัญ</th>
                                    <th scope="col">หน้าที่และความรับผิดชอบที่สำคัญ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="setheigh">

                                    <td>
                                        <i class="fas fa-circle"></i> ผู้ที่จะเป็น REIT Manager ได้ <br>
                                        1. บริษัทหลักทรัพย์จัดการกองทุนรวม (บลจ.)
                                        ที่มีความพร้อมด้านบุคลากรและระบบงาน <br>
                                        2. บริษัทที่เป็นนิติบุคคลไทย <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มีทุนชำระแล้ว ≥ 10 ล้านบาท
                                        <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> ประกอบธุรกิจหลักเป็น REIT Manager/
                                        หากมีธุรกิจอื่นต้องมีระบบป้องกันความขัดแย้ง
                                        ทางผลประโยชน
                                        <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มีกรรมการอิสระไม่น้อยกว่า 1 ใน 3 ของกรรมการ
                                        ทั้งหมด
                                        <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มีกรรมการ ผู้บริหาร ผู้ถือหุ้นรายใหญ่ ไม่มีลักษณะ
                                        ต้องห้ามตามที่กฎหมายกำ หนด
                                        <br>
                                        <i class="fas fa-circle"></i> โครงสร้างองค์กรชัดเจน มีความพร้อมของระบบงานและ
                                        บุคลากรมีประสบการณ์ด้านบริหารจัดการลงทุน /จัดหา <br>
                                        ผลประโยชน์จากอสังหาริมทรัพย์ไม่น้อยกว่า 3 ใน 5 ปี
                                        ย้อนหลัง ก่อนยื่นคำขอ
                                        <br>
                                        <i class="fas fa-circle"></i> ต้องได้รับความเห็นชอบจาก สำ นักงาน ก.ล.ต.
                                        (คราวละ 5 ปี)
                                    </td>
                                    <td>
                                        <i class="fas fa-circle"></i> ยื่นคำ ขออนุญาตเสนอขายหน่วยทรัสต์กับสำ นักงาน
                                        ก.ล.ต <br>
                                        <i class="fas fa-circle"></i> กำ หนดกลยุทธ์และแผนการดำ เนินงานของ REIT<br>
                                        <i class="fas fa-circle"></i> ลงทุนและจัดหาผลประโยชน์จากทรัพย์สิน<br>
                                        <i class="fas fa-circle"></i> บริหารจัดการกองทรัสต์ตามสัญญาก่อตั้งทรัสต์และ
                                        กฎหมายที่เกี่ยวข้อง<br>
                                        <i class="fas fa-circle"></i> คำ นวณและเปิดเผยมูลค่าทรัพย์สินของ REIT และ
                                        มูลค่าหน่วยทรัสต์
                                        <br>
                                        <i class="fas fa-circle"></i> ดูแลรักษาทรัพย์สินให้อยู่ในสภาพที่พร้อมจัดหา
                                        ผลประโยชน์<br>
                                        <i class="fas fa-circle"></i> พิจารณาการจ่ายส่วนแบ่งกำ ไรให้แก่ผู้ถือหน่วยทรัสต์ <br>
                                        <i class="fas fa-circle"></i> จัดประชุมผู้ถือหน่วยทรัสต์ทุกปี และตามที่ผู้ถือ
                                        หน่วยทรัสต์ร้องขอ
                                    </td>

                                </tr>

                            </tbody>
                        </table>

                        <li><b>อ้างอิง :</b> ประกาศสำ นักงานคณะกรรมการกำ กับหลักทรัพย์และตลาดหลักทรัพย์ที่ สช. 29/2555 เรื่องหลักเกณฑ์เงื่อนไข
                            และวิธีการในการให้ความเห็นชอบ ผู้จัดการกองทรัสต์ และมาตรฐานการปฏิบัติงาน</li>

                        <br>

                        <h2>ทรัสตี (Trustee)</h2>

                        <table class="table funds_table table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">คุณสมบัติที่สำคัญ</th>
                                    <th scope="col">หน้าที่และความรับผิดชอบที่สำคัญ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="setheigh">

                                    <td>
                                        <i class="fas fa-circle"></i> ผู้ที่จะเป็น Trustee ได้ <br>
                                        1. สถาบันการเงินที่ได้รับอนุญาตให้ประกอบธุรกิจเป็น
                                        ทรัสตีในปัจจุบัน <br>
                                        2. บริษัทที่สถาบันการเงินถือหุ้น ≥ 99% และได้รับใบ
                                        อนุญาตให้ประกอบธุรกิจเป็นทรัสตี (เฉพาะ REIT) <br>

                                        <i class="fas fa-circle"></i> มีทุนชำระแล้ว ≥ 100 ล้านบาท
                                        <br>


                                        <i class="fas fa-circle"></i> ทรัสตีต้องเป็นอิสระจาก REIT manager
                                    </td>
                                    <td>
                                        <i class="fas fa-circle"></i> ดูแลให้ REIT manager บริหาร REIT ให้เป็นไปตาม
                                        สัญญาก่อตั้งทรัสต์ <br>
                                        <i class="fas fa-circle"></i> จัดทำ บัญชีทรัพย์สินของ REIT แยกต่างหากจาก
                                        ทรัพย์สินของ Trustee และพิจารณา / ดูแลการ
                                        เบิกจ่ายทรัพย์สินของ REIT<br>
                                        <i class="fas fa-circle"></i> เข้าร่วมประชุมผู้ถือหน่วยทรัสต์ และให้ความเห็น
                                        ต่อเรื่องที่ REIT manager จะขอมติเป็นไปตาม
                                        สัญญาก่อตั้งทรัสต์หรือไม<br>
                                        <i class="fas fa-circle"></i> จัดประชุมผู้ถือหน่วยทรัสต์ เพื่อขอมติพิจารณาเลือก
                                        REIT manager รายใหม่ (กรณีมีเหตุต้องเปลี่ยน
                                        REIT manager)<br>
                                    </td>

                                </tr>

                            </tbody>
                        </table>

                        <li><b>อ้างอิง :</b> ประกาศคณะกรรมการกำ กับหลักทรัพย์และตลาดหลักทรัพย์ที่ กร. 14/2555 เรื่อง หลักเกณฑ์เกี่ยวกับการ
                            เป็นผู้ก่อตั้งทรัสต์ และการเป็นทรัสตีของทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์
                        </li>
                        <br>
                        <h2>หลักเกณฑ์ที่สำคัญของ REIT</h2>

                        <table class="table funds_reit table-striped table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col" style="min-width:300px;">ลักษณะสำคัญ</th>
                                    <th scope="col">รายละเอียด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>การก่อตั้ง</td>
                                    <td>สัญญา / ร่างสัญญาก่อตั้งทรัสต์เป็นไปตาม พรบ.ทรัสต์เพื่อธุรกรรมในตลาดทุน
                                        พ.ศ. 2550 และประกาศที่เกี่ยวข้องของ สำ นักงาน ก.ล.ต.
                                    </td>
                                </tr>
                                <tr>
                                    <td>ชื่อ</td>
                                    <td>ต้องสะท้อนลักษณะสำ คัญและนโยบายการลงทุน
                                    </td>
                                </tr>
                                <tr>
                                    <td>ขนาด</td>
                                    <td>ทุนชำ ระแล้วภายหลังการเสนอขาย ≥ 500 ล้านบาท
                                    </td>
                                </tr>
                                <tr>
                                    <td>การซื้อขายหน่วยทรัสต์</td>
                                    <td>หน่วยทรัสต์ของ REIT ต้องเข้าจดทะเบียนในตลาดหลักทรัพย์ฯ
                                    </td>
                                </tr>
                                <tr>
                                    <td>ชนิดของหน่วยทรัสต์ (tranch)</td>
                                    <td>แบ่งหน่วยทรัสต์เป็นหลายชนิดได้ ตามหลักเกณฑ์ที่กำ หนด
                                    </td>
                                </tr>
                                <tr>
                                    <td>ทรัพย์สินหลักที่จะลงทุน</td>
                                    <td>• ลงทุนในอสังหาริมทรัพย์ได้ทุกประเภท โดยมีวัตถุประสงค์เพื่อจัดหาผลประโยชน์
                                        ในรูปแบบค่าเช่า แต่ต้องไม่เป็นธุรกิจที่ขัดต่อศีลธรรมหรือผิดกฎหมาย <br>
                                        • ลงทุนในอสังหาริมทรัพย์ที่ตั้งในต่างประเทศได้
                                        <br>
                                        • ลงทุนในอสังหาริมทรัพย์ที่พร้อมจัดหาประโยชน์ ≥ 75 % ของมูลค่าหน่วย
                                        ทั้งหมดที่เสนอขายรวมเงินกู้ยืม (ถ้ามี) ส่วนที่เหลือลงทุนในทรัพย์สินอื่น เช่น
                                        พันธบัตรรัฐบาล เงินฝากธนาคาร เป็นต้น <br>
                                        • ลงทุนในอสังหาริมทรัพย์ที่ยังไม่แล้วเสร็จ (Green field Project) ได้ไม่เกิน
                                        ร้อยละ 10 ของสินทรัพย์รวม

                                    </td>
                                </tr>
                                <tr>
                                    <td>รูปแบบการลงทุนใน
                                        อสังหาริมทรัพย์</td>
                                    <td>
                                        สามารถลงทุนได้ 2 รูปแบบ <br>
                                        • ลงทุนทางตรง คือ ได้มาซึ่งกรรมสิทธิ์หรือสิทธิครอบครองในอสังหาริมทรัพย์
                                        <br>
                                        • ลงทุนทางอ้อม คือ ลงทุนผ่านบริษัทที่ REIT ถือหุ้น ≥ 99% ของหุ้นทั้งหมด โดยต้องมีระบบที่สามารถควบคุมบริษัทนั้นให้ปฏิบัติตามหลักเกณฑ์ในทำ นอง เดียวกับ REIT ได้

                                    </td>
                                </tr>
                                <tr>
                                    <td>การจัดหาผลประโยชน</td>
                                    <td>

                                        •ให้เช่าอสังหาริมทรัพย์ โดยต้องไม่ประกอบธุรกิจอื่น เช่น โรงแรม โรงพยาบาล
                                        <br>
                                        • ผู้เช่าต้องไม่นำอสังหาริมทรัพย์ไปใช้ประกอบธุรกิจที่ขัดต่อศีลธรรมหรือไม่ชอบ
                                        ด้วยกฎหมาย <br>

                                        • กรณีให้เช่าอสังหาริมทรัพย์เพื่อประกอบธุรกิจอื่น ค่าเช่าส่วนที่ขึ้นกับผลประกอบการ
                                        ของผู้เช่าต้อง ≤ 50% ของค่าเช่าคงที่

                                    </td>
                                </tr>
                                <tr>
                                    <td>การกู้ยืมและก่อภาระผูกพัน </td>
                                    <td> • ≤ 35% ของสินทรัพย์รวม กรณีมี Investment grade Rating กู้ยืมได้ 60%
                                        ของสินทรัพย์รวม <br>
                                        • เป็นไปตามสัญญาก่อตั้งทรัสต์
                                        <br>
                                        • นำ ทรัพย์สินไปเป็นหลักประกันได้
                                        <br>
                                        • การก่อภาระผูกพันกรณีอื่นต้องเป็นเรื่องปกติในทางพาณิชย์ หรือเป็นเรื่องปกติ
                                        ในการทำธุรกรรมประเภทนั้น

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ผู้บริหารจัดการ
                                    </td>
                                    <td>
                                        REIT manager คุณสมบัติตามเกณฑ์กำ หนด
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        การเสนอขายและจัดสรร
                                        หน่วยทรัสต
                                    </td>
                                    <td>
                                        • เสนอขายผ่านบริษัทจัดจำ หน่าย (underwriter) <br>
                                        • ต้องมีผู้ถือหน่วยทรัสต์ ≥ 250 ราย <br>
                                        • กระจายให้กับผู้ถือรายย่อย ตามเกณฑ์การรับทรัสต์เข้าจดทะเบียน (ไม่น้อยกว่า
                                        20% ของจำ นวนหน่วยทรัสต์ทั้งหมดและแต่ละชนิด (tranche) (ถ้ามี)<br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ข้อจำ กัดการถือหน่วยของ
                                        บุคคลใดหรือกลุ่มบุคคลเดียวกัน
                                    </td>
                                    <td>
                                        • ไม่เกิน 50% ของจำ นวนหน่วยทรัสต์ทั้งหมดและแต่ละชนิด (tranche) (ถ้ามี)
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <br>

                        <h2>ภาษีที่เกี่ยวข้อง</h2>
                        <table class="table funds_reit table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col" colspan="1">ภาษีเงินได้นิติบุคคล</th>
                                    <th scope="col">ภาษีอื่นๆ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        ระดับกองทุน
                                    </td>
                                    <td>กองทรัสต์ไม่เสีย</td>
                                    <td>
                                        • การขายอสังหาริมทรัพย์ให้ REIT เจ้าของต้อง
                                        เสียภาษีที่เกี่ยวข้องตามปกติ <br>
                                        • ค่าธรรมเนียมการโอน เสียอัตราปกติ 2%
                                    </td>
                                </tr>



                            </tbody>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col" colspan="1">ภาษีเงินได้นิติบุคคล</th>
                                    <th scope="col">ภาษีอื่นๆ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>
                                        ระดับผู้ลงทุน
                                    </td>
                                    <td>• กรณีบุคคลธรรมดา หัก ณ ที่จ่าย 10% <br>
                                        • กรณีนิติบุคคล เสียภาษีในอัตราปกติ</td>
                                    <td>
                                        • กรณีบุคคลธรรมดา ยกเว้น <br>
                                        • กรณีนิติบุคคล เสียภาษีในอัตราปกติ
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <br>
                        <h2>ค่าธรรมเนียมที่สำคัญ</h2>
                        <table class="table funds_reit table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">รายการ</th>
                                    <th scope="col">ค่าธรรมเนียม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg_orange" style="color:white;">
                                    <td colspan="2"><b>สำนักงาน ก.ล.ต.</b></td>
                                </tr>
                                <tr>
                                    <td>ค่าธรรมเนียมคำ ขออนุญาตเสนอขาย</td>
                                    <td>
                                        คำ ขอละ 100,000 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td>ค่าธรรมเนียมการยื่น filing </td>
                                    <td>
                                        0.01% ของมูลค่าของหน่วยทรัสต์ทั้งหมดที่เสนอขาย
                                    </td>
                                </tr>
                                <tr>
                                    <td>• ค่าธรรมเนียมการเป็น REIT manager <br>
                                        + คำ ขอความเห็นชอบ <br>
                                        + คำ ขอต่ออายุการให้ความเห็นชอบ</td>
                                    <td><br>
                                        คำ ขอละ 250,000 บาท <br>
                                        คำ ขอละ 250,000 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td>• ค่าธรรมเนียมการเป็นทรัสตี <br>
                                        + คำ ขออนุญาตประกอบธุรกิจ</td>
                                    <td>(ทั้ง full license / เฉพาะ REIT) <br>
                                        คำ ขอละ 30,000 บาท
                                    </td>
                                </tr>
                                <tr class="bg_orange" style="color:white;">
                                    <td colspan="2"><b>ตลาดหลักทรัพย์ฯ</b></td>
                                </tr>
                                <tr>
                                    <td>• ค่าธรรมเนียมการเข้าจดทะเบียน <br>
                                        + ค่าธรรมเนียมยื่นคำ ขอ </td>
                                    <td>ตามเกณฑ์หุ้นสามัญ <br>
                                        50,000 บาท *
                                    </td>
                                </tr>
                                <tr>
                                    <td> + ค่าธรรมเนียมแรกเข้า</td>
                                    <td>0.05% ของทุนชำ ระแล้ว * <br>
                                        ขั้นต่ำ 100,000 บาท ขั้นสูง 3,000,000 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3"> + ค่าธรรมเนียมรายปี</td>
                                    <td class="lightorange">
                                        <div class="row">
                                            <div class="col-lg-6" style="border-right:1px solid white;">
                                                X = ทุนชำ ระแล้ว (ล้านบาท)
                                            </div>
                                            <div class="col-lg-6">
                                                อัตราค่าธรรมเนียม
                                                % ของทุนชำ ระแล้ว
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                X < 200 <br>
                                                    200 < X < 1,000 <br>
                                                        1,000 < X < 5,000 <br>
                                                            5,000 < X < 10,000 <br>
                                                                X > 10,000
                                            </div>
                                            <div class="col-lg-6">
                                                0.035% <br>
                                                0.030% <br>
                                                0.025% <br>
                                                0.020% <br>
                                                0.010%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ขั้นต่ำ
                                        50,000 บาท ขั้นสูง 3,000,000 บาท
                                    </td>
                                </tr>
                                <tr>
                                    <td>• ค่าธรรมเนียมการเพิ่มทุน</td>
                                    <td>ยกเว้น</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="list_warn">

                            <li><i class="fas fa-exclamation-triangle"></i> ค่าธรรมเนียมยื่นคำขอและค่าธรรมเนียมแรกเข้ายกเว้นสำหรับกองทุนที่แปลงสภาพจาก Property fund เป็น REIT
                            </li>
                        </div>


                        <br>
                        <h2>การจดทะเบียน REIT ในตลาดหลักทรัพย์ฯ
                        </h2>
                        <li>เพื่อที่จะสร้างสภาพคล่องให้กับผู้ซื้อหน่วยทรัสต์ในตลาดแรก สำนักงาน ก.ล.ต. ได้กำหนดให้จะต้อง
                            นำเอาหน่วยทรัสต์เข้ามาจดทะเบียนในตลาดหลักทรัพย์ฯด้วย โดยต้องมีคุณสมบัติของ REIT และ
                            หน่วยทรัสต์ ดังนี้
                        </li>


                        <table class="table funds_table table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">คุณสมบัติของ REIT</th>
                                    <th scope="col">คุณสมบัติของหน่วยทรัสต</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="setheigh">

                                    <td style="max-width:400px;">
                                        <i class="far fa-arrow-alt-circle-right"></i> ได้รับอนุญาตจากสำ นักงาน ก.ล.ต. * <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มี REIT manager และ Trustee ที่มีคุณสมบัติตามที่สำ นักงาน
                                        ก.ล.ต. กำ หนด <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> มีผู้ถือหน่วยทรัสต์รายย่อย (free float) ถือหน่วยทรัสต์รวมกัน
                                        ไม่น้อยกว่าร้อยละ 20 ของจำ นวนหน่วยทรัสต์แต่ละชนิด(tranche)
                                        <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> แต่งตั้งให้ บจ. ศูนย์รับฝากหลักทรัพย์ (ประเทศไทย) (TSD) หรือ
                                        บุคคลที่ตลาดหลักทรัพย์ฯเห็นชอบเป็นนายทะเบียนหลักทรัพย์
                                    </td>
                                    <td>
                                        กำหนดเช่นเดียวกับกรณีรับจดทะเบียนหุ้นสามัญ <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> ชำระเต็มมูลค่าแล้วทั้งหมด <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> ระบุชื่อผู้ถือ <br>
                                        <i class="far fa-arrow-alt-circle-right"></i> ไม่มีข้อจำกัดการโอนหน่วยทรัสต์
                                        <br>

                                    </td>
                                </tr>

                            </tbody>
                        </table>


                        <div class="list_warn">

                            <li><i class="fas fa-exclamation-triangle"></i> ตามประกาศคณะกรรมการกำ กับตลาดทุน ที่ ทจ. 49/2555 เรื่องการออกและเสนอขายหน่วยทรัสต์เพื่อการลงทุน
                                ในอสังหาริมทรัพย์

                            </li>
                        </div>


                        <li><b>อ้างอิง :</b> ข้อบังคับตลาดหลักทรัพย์แห่งประเทศไทย เรื่อง การรับ การเปิดเผยสารสนเทศ และการเพิกถอนหน่วยทรัสต์
                            ของทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์ พ.ศ. 2556
                        </li>

                        <br>
                        <h2>การกำกับดูแลภายหลังจดทะเบียนในตลาดหลักทรัพย์ฯ</h2>
                        <li>การเปิดเผยข้อมูลที่สำคัญ : ลักษณะเดียวกับหุ้นสามัญ</li>

                        <table class="table funds_reit table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">ประเภทข้อมูล</th>
                                    <th scope="col">ระยะเวลาที่ต้องเปิดเผย</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>


                                    <td rowspan="5" style="min-width:300px;"> <b>การรายงานข้อมูล <br>
                                            ตามรอบระยะเวลาบัญชี</b></td>
                                    <td style="min-width:400px;">
                                        • มูลค่าทรัพย์สิน มูลค่าทรัพย์สินสุทธิ
                                        และมูลค่าหน่วยทรัสต์
                                    </td>
                                    <td style="min-width:400px;">
                                        ภายใน 45 วัน นับแต่วันสุดท้าย
                                        ของแต่ละไตรมาส
                                    </td>
                                </tr>
                                <tr>

                                    <td> งบการเงิน <br>
                                        - รายไตรมาส (สอบทาน) <br>
                                        - ประจำ ปี (ตรวจสอบ)</td>
                                    <td>
                                        นับแต่สิ้นรอบระยะเวลาบัญชี <br>
                                        45 วัน
                                        3 เดือน / 60 วัน (กรณีไม่ส่งงบไตรมาส 4)
                                    </td>
                                </tr>
                                <tr>

                                    <td>รายงานความคืบหน้าโครงการลงทุน <br>
                                        - กรณีลงทุนในอสังหาริมทรัพย์
                                        ที่ไม่แล้วเสร็จ <br>
                                        - กรณีแก้ไขการลงทุนในทรัพย์สินหลัก</td>
                                    <td>
                                        - ภายใน 30 วัน นับแต่วันสุดท้าย
                                        ของรอบระยะเวลา 6 เดือน <br>
                                        - นำส่งพร้อมงบการเงินรายไตรมาส
                                    </td>
                                </tr>
                                <tr>

                                    <td>แบบแสดงรายการข้อมูลประจำปี</td>
                                    <td>
                                        3 เดือน นับแต่สิ้นรอบระยะเวลาบัญชี
                                    </td>
                                </tr>
                                <tr>
                                    <td>รายงานประจำปี</td>
                                    <td>120 วัน นับแต่สิ้นรอบระยะเวลา
                                        บัญชี
                                    </td>
                                </tr>
                                <tr class="bg_orange" style="color:white;">
                                    <td colspan="3"><b>การรายงานข้อมูลตาม
                                            เหตุการณ์ </b></td>
                                </tr>
                                <tr>
                                    <td>+ ข้อมูลที่ส่งผลกระทบต่อ
                                        ราคาหลักทรัพย์
                                    </td>
                                    <td>
                                        เช่น กำหนดวันประชุมผู้ถือหน่วย
                                        การได้มาจำ หน่ายไปซึ่งสินทรัพย์/
                                        การทำ รายการกับบุคคลที่เกี่ยวข้อง
                                        การจ่ายหรือไม่จ่ายผลตอบแทน
                                    </td>
                                    <td>
                                        เปิดเผยทันที
                                    </td>
                                </tr>
                                <tr>
                                    <td>+ ข้อมูลที่ควรเปิดเผย
                                    </td>
                                    <td>
                                        เช่น การเปลี่ยนแปลง REIT manager
                                        ทรัสตี ผู้สอบบัญชี นายทะเบียน
                                    </td>
                                    <td>
                                        เปิดเผยภายใน 3 วันทำการ
                                    </td>
                                </tr>
                                <tr>
                                    <td>+ ข้อมูลที่เป็นหลักฐานอ้างอิง
                                    </td>
                                    <td>
                                        เช่น รายงานการประชุมผู้ถือหน่วยทรัสต์
                                        รายงานจำ นวนผู้ถือหน่วยทรัสต์
                                        รายย่อย
                                    </td>
                                    <td>
                                        นำส่งภายใน 14 วัน
                                        นับแต่เกิดเหตุการณ์
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                        <h2>การดำรงสถานะ</h2>

                        <table class="table funds_reit table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">การดำรงสถานะ (free float)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>



                                    <td style="min-width:400px;">
                                        มีผู้ถือหน่วยทรัสต์รายย่อยถือหน่วยรวมกันไม่น้อยกว่า 15% ของจำนวน
                                        หน่วยทรัสต์ทั้งหมดและแต่ละชนิด (tranche) (ถ้ามี)
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <li><b>อ้างอิง :</b>ข้อบังคับตลาดหลักทรัพย์แห่งประเทศไทย เรื่อง การรับ การเปิดเผยสารสนเทศ และการเพิกถอนหน่วยทรัสต์
                            ของทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์ พ.ศ. 2556 <br><br>
                            ประกาศคณะกรรมการกำ กับตลาดทุน ที่ ทจ. 51/2555 เรื่อง หลักเกณฑ์ เงื่อนไข และวิธีการรายงานการเปิดเผย
                            ข้อมูลเกี่ยวกับฐานะการเงินและผลการดำ เนินงานของทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์

                        </li>

                        <h2>ความแตกต่างระหว่าง REIT และ Property fund การลงทุนใน REIT
                        </h2>
                        <li>ทั้ง REIT และ Property fund ต่างมีวัตถุประสงค์ลงทุนเพื่อหาผลประโยชน์ในอสังหาริมทรัพย์เช่นเดียวกัน
                            แต่ REIT มีการจัดการการลงทุนในอสังหาริมทรัพย์ การกำ กับดูแล และสิทธิประโยชน์ที่แตกต่างจาก
                            Property fund บางประการ ดังนี้ </li>

                        <table class="table funds_reit table-striped table-bordered table-responsive-lg">
                            <thead>
                                <tr>
                                    <th scope="col">หัวข้อ</th>
                                    <th scope="col">Property fund</th>
                                    <th scope="col">REIT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg_orange">
                                    <td colspan="3">ลักษณะทั่วไป
                                    </td>
                                </tr>
                                <tr>
                                    <td>โครงสร้างทางกฎหมาย </td>
                                    <td>กองทุนรวม
                                    </td>
                                    <td>กองทรัสต์</td>
                                </tr>
                                <tr>
                                    <td>ขนาดขั้นต่ำ</td>
                                    <td>ไม่น้อยกว่า 500 ล้านบาท
                                    </td>
                                    <td>เท่ากัน</td>
                                </tr>
                                <tr>
                                    <td>จำนวนผู้ถือหน่วย</td>
                                    <td>
                                        ตอนจัดตั้ง : ≥ 250 ราย <br>
                                        หลังจัดตั้ง : ≥ 35 ราย


                                    </td>
                                    <td>เหมือนเดิม</td>
                                </tr>
                                <tr>
                                    <td>การเข้าจดทะเบียน
                                        ในตลาดหลักทรัพย์ฯ</td>
                                    <td>หน่วยลงทุนต้องจดทะเบียน
                                    </td>
                                    <td>หน่วยทรัสต์ต้องจดทะเบียน</td>
                                </tr>
                                <tr>
                                    <td>ผู้ทำหน้าที่บริหารจัดการกอง</td>
                                    <td>บริษัทหลักทรัพย์จัดการกองทุนรวม
                                        (บลจ.)
                                    </td>
                                    <td>REIT manager
                                        ได้แก่ บริษัทหลักทรัพย์จัดการกองทุนรวม
                                        หรือบริษัทที่มีความเชี่ยวชาญด้านการ
                                        ลงทุนในอสังหาริมทรัพย์และมีคุณสมบัติ
                                        ตามเกณฑ์ ก.ล.ต.</td>
                                </tr>
                                <tr>
                                    <td>นายทะเบียน</td>
                                    <td>ไม่จำ เป็นต้องเป็น TSD


                                    </td>
                                    <td>ต้องได้รับความเห็นชอบจาก ตลท.</td>
                                </tr>
                                <tr class="bg_orange">
                                    <td colspan="3">การลงทุนของกอง
                                    </td>
                                </tr>
                                <tr>
                                    <td>ประเภททรัพย์สินหลัก
                                        ที่ลงทุนได้
                                    </td>
                                    <td>Positive list ตามเกณฑ์ ก.ล.ต.


                                    </td>
                                    <td>ไม่กำหนด
                                        แต่ต้องไม่เป็นอสังหาริมทรัพย์ที่ผู้เช่า
                                        จะนำ ไปประกอบธุรกิจที่ผิดกฎหมายหรือ
                                        ผิดศีลธรรม
                                        การลงทุนในอสังหาริมทรัพย์
                                        ต่างประเทศ
                                        ทำ ไม่ได้ ทำ</td>
                                </tr>
                                <tr>
                                    <td>การลงทุนในอสังหาริมทรัพย์
                                        ต่างประเทศ
                                    </td>
                                    <td>ทำไม่ได้


                                    </td>
                                    <td>ทำได้</td>
                                </tr>
                                <tr>
                                    <td>การพัฒนาอสังหาริมทรัพย์
                                        ต่างประเทศ
                                    </td>
                                    <td>ทำไม่ได้


                                    </td>
                                    <td>ทำ ได้ไม่เกิน 10% ของสินทรัพย์รวม</td>
                                </tr>
                                <tr class="bg_orange">
                                    <td>การกู้ยืม (Leverage Limit)
                                    </td>
                                    <td>
                                        ไม่เกิน 10% ของมูลค่าทรัพย์สินสุทธิ
                                        (NAV)
                                    </td>
                                    <td>
                                        ไม่เกิน 35% ของทรัพย์สินรวม และได้
                                        ไม่เกิน 60% กรณีที่ได้รับ Credit Rating
                                        ระดับ Investment Grade

                                    </td>
                                </tr>
                                <tr class="bg_orange">
                                    <td colspan="3"> การเสนอขายและจัดสรรหน่วย</td>
                                </tr>
                                <tr>
                                    <td>เกณฑ์การเสนอขาย </td>
                                    <td>อย่างน้อย 25% ต้องเสนอขายให้กับ
                                        ผู้ลงทุนทั่วไป และจัดสรรหน่วยลงทุนให้
                                        แก่ผู้จองซื้อรายย่อยทุกรายอย่าง
                                        เท่าเทียมกัน ครั้งละหนึ่งหน่วยการจองซื้อ
                                        จนครบจำ นวนหน่วยลงทุนที่จำ หน่าย
                                        (Small Lot First) </td>
                                    <td>ไม่กำ หนด โดยกระจายให้กับผู้ถือหน่วย
                                        ทรัสต์รายย่อย ตามเกณฑ์การรับใบทรัสต์
                                        เข้าจดทะเบียน (ไม่น้อยกว่า 20% ของ
                                        จำ นวนหน่วยทรัสต์ทั้งหมดและแต่ละชนิด
                                        (tranche) (ถ้ามี)) </td>
                                </tr>
                                <tr>
                                    <td>ข้อจำ กัดการถือหน่วยของบุคคล
                                        ใดหรือกลุ่มบุคคลเดียวกัน</td>
                                    <td>ห้ามเกินกว่า 1 ใน 3 ของจำ นวนหน่วย
                                        ลงทุนทั้งหมด</td>
                                    <td>ห้ามเกินกว่า 50% ของจำ นวนหน่วยทรัสต์
                                        ทั้งหมดและแต่ละชนิด (tranche) (ถ้ามี)</td>
                                </tr>
                                <tr class="bg_orange">
                                    <td> แนวทางการกำ กับดูแล</td>
                                     <td>คล้ายกองทุนรวม</td>
                                    <td>คล้ายบริษัทจดทะเบียน</td>
                                </tr>
                                <tr>
                                   <td>การจัดประชุมผู้ถือหน่วยประจำ ปี </td>
                               <td>ไม่กำหนด</td>
                               <td>จัดทุกปี ภายใน 4 เดือนนับแต่วันสิ้นรอบปีบัญช</td>
                                </tr>
                                <tr>
                                    <td>เกณฑ์การได้มาจำ หน่ายไป
                                        ซึ่งสินทรัพย์ / รายการที่เกี่ยว
                                        โยงกัน </td>
                               <td>ไม่กำ หนดให้ต้องขอมติจากผู้ถือหน่วย</td>
                               <td>กำ หนดการดำ เนินการตามขนาดของการ
                                    ทำ รายการ โดยจะต้องขอมติจากผู้ถือ
                                    หน่วยทรัสต์กรณีขนาดรายการมีนัยสำ คัญ</td>
                                </tr>
                                <tr>
                                    <td>การดำ รงสถานะ (free float)</td>
                                    <td>ไม่กำหนด</td>
                                    <td>มีผู้ถือหน่วยทรัสต์รายย่อยถือหน่วยรวมกัน
                                        ไม่น้อยกว่า 15% ของจำ นวนหน่วยทรัสต์
                                        ทั้งหมดและแต่ละชนิด (tranche) (ถ้ามี)</td>
                                </tr>
                                 <tr class="bg_orange">
                                    <td> ภาษี</td>
                                     <td>• กองทุนไม่เสียภาษีเงินได้นิติบุคคล <br>
                                        • ผู้ถือหน่วยบางกรณีไม่เสียภาษี
                                        เงินปันผล เช่น กรณีบริษัทจดทะเบียน
                                        ที่ลงทุนในหน่วยลงทุน โดยถือ 3 เดือน
                                        ก่อนหน้า และ 3 เดือนหลังจากวันจ่าย
                                        เงินปันผล จะไม่ต้องนำ เงินปันผล
                                        มารวมคำ นวณเสียภาษี</td>
                                        <td>• ระดับทรัสต์ไม่เสียภาษีเงินได้นิติบุคคล <br>
                                        • ผู้ถือหน่วยทรัสต์ทุกประเภทเสียภาษี
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>
                            การลงทุนใน REIT
                        </h2>
                        <li>นักลงทุนกลุ่มแรกที่ลงทุนใน REIT คือผู้ซื้อหน่วยทรัสต์ตอนเสนอขายครั้งแรก (Initial Public Offering : IPO)
                            โดยสำ นักงาน ก.ล.ต. อนุญาตให้นักลงทุนรายใดรายหนึ่งหรือกลุ่มบุคคลเดียวกันถือหน่วยลงทุนได้
                            ไม่เกินร้อยละ 50 ของจำ นวนหน่วยทรัสต์ทั้งหมดและแต่ละชนิด (tranche) (ถ้ามี)</li>
                            <br>
                            <li>หลังจากผ่านช่วง IPO ไปแล้ว ผู้ลงทุนต้องเข้าไปลงทุนในตลาดหลักทรัพย์ฯ ซึ่งจะต้องเปิดบัญชีซื้อขาย
                            หลักทรัพย์กับบริษัทหลักทรัพย์ที่เป็นนายหน้าซื้อขายหลักทรัพย์ เช่นเดียวกับการซื้อขายหุ้น ทั้งนี้
                            REIT จะซื้อขายภายใต้กลุ่มอสังหาริมทรัพย์และก่อสร้าง หมวดกองทุนรวมอสังหาริมทรัพย์
                            </li>
                            <br>
                            <h2>ข้อพิจารณาก่อนการลงทุน</h2>
                            <li>1. <b>อสังหาริมทรัพย์ที่ REIT ลงทุน</b> ผู้ลงทุนควรทำ ความเข้าใจก่อนว่าอสังหาริมทรัพย์ที่ REIT ลงทุน
                            นั้นเป็นอสังหาริมทรัพย์ประเภทใด ซึ่งมีผลต่อผลตอบแทนที่ผู้ลงทุนจะได้รับด้วย เช่น REIT อาจลงทุนใน
                            อสังหาริมทรัพย์ในต่างประเทศ หรืออสังหาริมทรัพย์ที่อยู่ระหว่างพัฒนา ความสามารถในการชำ ระ
                            ค่าเช่าของผู้เช่าอสังหาริมทรัพย์ ซึ่งอาจมีความเสี่ยงต่อความสม่
                            ำ เสมอของรายได้จากอสังหาริมทรัพย์
                            นั้น ๆ</li>
                            <li>2. <b>การแบ่งชนิดของหน่วยทรัสต์ </b>แต่ละ REIT สามารถแบ่งชนิดของหน่วยทรัสต์เพื่อเสนอขายให้
                            ผู้ลงทุนแต่ละประเภทได้ ผู้ลงทุนควรทำ ความเข้าใจกับสิทธิและข้อจำ กัดของหน่วยทรัสต์แต่ละ
                            ประเภทที่ระบุไว้ในหนังสือชี้ชวนด้วย</li>
                            <li>3. <b>สภาพคล่องของการซื้อขายและราคาหน่วยทรัสต์ที่อาจลดลง</b> เนื่องจาก REIT ต้องจดทะเบียน
                            ในตลาดหลักทรัพย์ฯ ผู้ลงทุนอาจมีความเสี่ยงในด้านสภาพคล่องในการซื้อขายหน่วยทรัสต์ นอกจากนี้
                            ราคาซื้อขายหน่วยทรัสต์เป็นราคาตามกลไกตลาดซึ่งขึ้นอยู่กับความต้องการของผู้ซื้อและผู้ขาย
                            ซึ่งอาจมีปัจจัยหลายด้านเข้ามากระทบ ตั้งแต่เรื่องภาวะเศรษฐกิจ การเมือง หรือแนวโน้มของธุรกิจ
                            อสังหาริมทรัพย์ ตลอดจนการคาดการณ์ผลการดำ เนินงานในอนาคตของ REIT</li>
                            <br>
                                                
                                                <li>ดังนั้น ผู้ลงทุนต้องประเมินตนเองว่าเหมาะสมกับการลงทุนและความเสี่ยงระดับใด และทำ ความเข้าใจ
                            ลักษณะของ REIT ก่อนที่จะตัดสินใจลงทุน โดยต้องศึกษาข้อมูลในหนังสือชี้ชวนอย่างละเอียดเกี่ยวกับ
                            นโยบายการลงทุน รายละเอียดของอสังหาริมทรัพย์ที่ลงทุน ความเสี่ยงจากการกู้ยืมเงิน ปัจจัยความเสี่ยง
                            ที่เกี่ยวข้อง เพื่อดูว่าผลตอบแทนของ REIT ขึ้นอยู่กับปัจจัยอะไร นโยบายเงินปันผลค่าธรรมเนียมและ
                            ค่าใช้จ่ายต่างๆ และควรสอบถามข้อมูลจากตัวแทนขายก่อนตัดสินใจลงทุน</li>
                            <br>
                                            <li>
                                                <b>สอบถามข้อมูลเพิ่มเติม:</b>  <br>
                            ตลาดหลักทรัพย์แหงประเทศไทย ่ <br>
                            โทร. 0-2009-9999   <br>
                            สํานักงานคณะกรรมการกํากับหลักทรัพย์และตลาดหลักทรัพย์ <br>
                            โทร. 0-2033-9999

                        </li>
                        <br><br>
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
