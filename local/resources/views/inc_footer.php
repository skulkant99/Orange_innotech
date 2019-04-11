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
		font-size: 1.2em;
		font-weight: 200;
	}
	
	.footermenugroup2,
	.footermenugroup {
		padding: 20px 60px;
		font-size: 1.4em;
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
	}
</style>
<div class="footerbg  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
	<div class="container-fluid nopad">
		<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
		<div class="row">
			<div class="col-lg-3  wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="0.1s">
				<div class="footermenugroup">
					<ul>
						<li><a href="#">หน้าหลัก</a></li>
						<li><a href="#">กองทุนรวม</a></li>
						<li><a href="#">กองทุนส่วนบุคคล</a></li>
						<li><a href="#">มูลค่าหน่วยลงทุน</a></li>
						<li><a href="#">ผลการดำเนินงาน</a></li>
						<li><a href="#">ทำรายการ</a></li>
						<li><a href="#">เกี่ยวกับเรา</a></li>
						<li><a href="#">ติดต่อเรา</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-5  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.2s">
				<div class="footermenugroup">
					<ul>
						<li><a href="#">ข้อมูลเศรษฐกิจและภาวะตลาดการเงิน</a></li>
						<li><a href="#">เรื่องน่ารู้เกี่ยวกับการลงทุน</a></li>
						<li><a href="#">เอกสารเผยแพร่และประกาศบริษัท</a></li>
						<li><a href="#">รายงานกองทุน</a></li>
						<li><a href="#">ธรรมาภิบาลการลงทุน (I-Code)</a></li>
						<li><a href="#">ปฏิทินกิจกรรม</a></li>
						<li><a href="#">ดาวน์โหลดแบบฟอร์ม</a></li>
						<li><a href="#">ติดตามสถานะตราสารหนี้ผิดนัดชำระของกองทุน</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4  wow fadeInRight" data-wow-duration="1.1s" data-wow-delay="0.3s">
				<div class="footermenugroup2">
					<h1>Contact us</h1>
					<li><img src="images/icon-tel.png"> 02 624 6333</li>
					<li>
						<a href="#"><img src="images/icon-www.png"> www.innotechasset.com</a>
					</li>
					<li>
						<a href="#"><img src="images/icon-mail.png"> marketing@innotechasset.com</a>
					</li>
					<li>
						<a href="#"><img src="images/icon-fb.png"> Innotechasset</a>
					</li>
					<li>
						<a href="#"><img src="images/icon-line.png"> Innotechasset</a>
					</li>
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
                                   <li><a href="#">หน้าหลัก</a></li>
						<li><a href="#">กองทุนรวม</a></li>
						<li><a href="#">กองทุนส่วนบุคคล</a></li>
						<li><a href="#">มูลค่าหน่วยลงทุน</a></li>
						<li><a href="#">ผลการดำเนินงาน</a></li>
						<li><a href="#">ทำรายการ</a></li>
						<li><a href="#">เกี่ยวกับเรา</a></li>
						<li><a href="#">ติดต่อเรา</a></li>
                               	<li><a href="#">ข้อมูลเศรษฐกิจและภาวะตลาดการเงิน</a></li>
						<li><a href="#">เรื่องน่ารู้เกี่ยวกับการลงทุน</a></li>
						<li><a href="#">เอกสารเผยแพร่และประกาศบริษัท</a></li>
						<li><a href="#">รายงานกองทุน</a></li>
						<li><a href="#">ธรรมาภิบาลการลงทุน (I-Code)</a></li>
						<li><a href="#">ปฏิทินกิจกรรม</a></li>
						<li><a href="#">ดาวน์โหลดแบบฟอร์ม</a></li>
						<li><a href="#">ติดตามสถานะตราสารหนี้ผิดนัดชำระของกองทุน</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <h3 class="accordion-thumb">Contact info</h3>
                            <div class="accordion-panel">
                                <ul class="listmenu-footer">
                                   <li><img src="images/icon-tel.png"> 02 624 6333</li>
					<li>
						<a href="#"><img src="images/icon-www.png"> www.innotechasset.com</a>
					</li>
					<li>
						<a href="#"><img src="images/icon-mail.png"> marketing@innotechasset.com</a>
					</li>
					<li>
						<a href="#"><img src="images/icon-fb.png"> Innotechasset</a>
					</li>
					<li>
						<a href="#"><img src="images/icon-line.png"> Innotechasset</a>
					</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
             
		</div>
		<div class="row">
			<div class="col-lg-9 copyrighttext"> การลงทุนมีความเสี่ยง ผู้ลงทุนควรทำความเข้าใจลักษณะสินค้า เงื่อนไขผลตอบแทน ความเสี่ยง และคู่มือภาษีให้ดีก่อนการตัดสินใจลงทุน
				<br> © 2019 INNOTECH ASSET MANAGEMENT COMPANY LIMITED ALL RIGHT RESERVED. </div>
			<div class="col-lg-3 logofooter"> <img src="images/logo_footer.png"> </div>
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