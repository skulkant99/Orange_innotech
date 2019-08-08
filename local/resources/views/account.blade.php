<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><?php $pageName="account"; ?>

<head>
    @include('inc_header')
</head>
<style>
    .greentext_link {
        color: #30908e;
        text-decoration: underline;
    }

    .login_next {
        text-align: center;
        font-size: 1.2em;
        margin-top: 20px;
        font-family: 'Kanit';

    }

    .btn-danger {
        font-family: 'Kanit';
        font-size: 1.5em;

    }
    .detail_acc{
        font-size: 1.3em;
        padding: 50px;
    }
    @media (max-width: 767px) {
        .btn-danger,
        .login_next{
            font-size: 1em;
        }
        .detail_acc{
            padding: 0px;
            font-size: 1em;
        }
    }
</style>

<body>
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
                        <li class="breadcrumb-item"><a href="#">{{ trans('messages.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('messages.register') }}</li>
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
                            <div class="bannertop_acc">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="bannertxt_top">
                                                <h5>INNOTECH</h5>
                                                <h1>ลงทะเบียน <span class="boldtext">OPEN ACCOUNT</span></h1>
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
            <div class="row mt-5 mb-5">
                <div class="col">
                    <div class="details_ac_pic">
                        <img src="{{asset('images/openning.png')}}" class="img-fluid">
                    </div>
                    <div class="detail_acc">
                        {!! trans('messages.account1') !!}
                        <br>
                        
                        <br>*{{ trans('messages.account_footer') }}
                        <div class="btn_regis">
                            <a href="#" class="btn btn-danger">{{ trans('messages.account_open') }}</a>

                        </div>
                        <div class="login_next">{{ trans('messages.account_open2') }} <a href="#" class="greentext_link">{{ trans('messages.login') }}</a></div>
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
    <script>
        $('.pagination-inner a').on('click', function() {
            $(this).siblings().removeClass('pagination-active');
            $(this).addClass('pagination-active');
        })

    </script>
</body>

</html>
