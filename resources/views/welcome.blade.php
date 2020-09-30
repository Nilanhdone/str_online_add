<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMLIO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #426f8c;
                font-family: 'Phetsarath OT', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                /*background-image: url('images/amlio_logo_16.png');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;*/
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #426f8c;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <!-- <a href="{{ url('/') }}">ໜ້າຫຼັກ</a> -->
                        <a href="{{ url('/reset') }}">ປ່ຽນລະຫັດຜ່ານ</a>
                        <a href="{{ url('/logout') }}">ອອກຈາກລະບົບ</a>
                        
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    AMLIO
                </div>

                <div class="links">
                @if (Auth::user()->role_idrole == 2)
                  <!-- <a href="{{ url('menu') }}">REPORTS</a> -->

                  <a href="{{ url('str') }}">ລາຍງານ STR ບຸກຄົນ</a>
                  <a href="{{ url('strent') }}">ລາຍງານ STR ນິຕິບຸກຄົນ</a>
				  <a href="{{ url('ctrviews') }}">ລາຍງານ CTR</a>
                <a href="{{ url('all-user-inbox') }}">ແລກປ່ຽນຂໍ້ມູນ</a>
                  <a href="{{ url('docviews') }}">ລາຍງານອື່ນໆ</a>
                  <a href="{{ url('strall') }}">STR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                  <a href="{{ url('ctrall_rp') }}">CTR ທີ່ໄດ້ລາຍງານຜ່ານມາ</a>
                  <a href="{{ url('replyviews') }}">ແຈ້ງຕອບ</a>
                  <a href="{{ url('comment') }}">ປະກອບຄຳເຫັນ</a>

				 
                @else
              
                      <a href="{{ url('/firviews') }}">ຄົ້ນຫາ</a>
                      <a href="{{ url('strall') }}">ລາຍງານ STR</a>
                      <a href="{{ url('ctrall') }}">ລາຍງານ CTR</a>
                    <a href="{{ route('send-report') }}">ແລກປ່ຽນຂໍ້ມູນ</a>

                        {{-- <button type="button" class="btn btn-primary">
                        <a href="{{ route('all-inbox') }}">
                            demo
                        </a>
                        <span class="badge badge-light">{{ $total_new_replys }}</span>
                      </button> --}}

                      <a href="{{ url('docall') }}">ລາຍງານອື່ນໆ</a>
                      <a href="{{ url('fir') }}">ລາຍງານ FIR</a>
                      <a href="{{ url('viewcbra') }}">ລາຍງານ CBR</a>
                      <a href="{{ url('reply') }}">ແຈ້ງຕອບ</a>
                      <a href="{{ url('replyviews') }}">ລາຍການແຈ້ງຕອບ</a>
                     {{--  <a href="{{ url('viewcomment') }}">ປະກອບຄຳເຫັນ</a> --}}
                       <a href="{{ url('/admin') }}">ຄຸ້ມຄອງລະບົບ</a> 
                @endif
                </div>
            </div>
        </div>
    </body>
</html>
