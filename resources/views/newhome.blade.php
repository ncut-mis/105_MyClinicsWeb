<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> 診所預約聯合網站</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.css">
        <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <!-- Styles -->
        <style>
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
                font-size: 50px;
            }

            .links > a {
                color: #fff;
                padding: 10px;
                font-size: 10px;
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
    <header>
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">診所預約聯合網站</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">首頁</a></li>
                        <li><a href="{{route('clinic.index')}}">所有診所</a></li>
                        <li><a href="{{route('clinic.advance_search.create')}}">找查診所</a></li>
                        <li><a href="{{route('reservation.myreservationlist')}}">我的預約</a></li>
                        <li><a href="{{route('member.information')}}">個人資訊</a></li>
                        <li><a href="{{route('favorite_clinic')}}">我的診所</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}">帳戶首頁</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">登入</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">註冊</a></li>
                                    @endif
                                    @endauth
                                @endif
                    </ul>
                </div>
            </div>
        </div>


        <div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">診所預約聯合網站</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">

                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">首頁</a></li>
                                <li><a href="{{route('clinic.index')}}">線上預約</a></li>
                                <li><a href="{{route('clinic.advance_search.create')}}">找查診所</a></li>
                                <li><a href="{{route('reservation.myreservationlist')}}">我的預約</a></li>
                                <li><a href="{{route('member.information')}}">個人資訊</a></li>
                                <li><a href="{{route('favorite_clinic')}}">我的診所</a></li>
                                @if (Route::has('login'))
                                        @auth
                                            <li><a href="{{ url('/home') }}">帳戶首頁</a></li>
                                            @else
                                                <li><a href="{{ route('login') }}">登入</a></li>
                                                @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}">註冊</a></li>
                                                @endif
                                            @endauth
                                @endif
                            </ul>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/portfolio/jquery.quicksand.js"></script>
    <script src="js/portfolio/setting.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    </body>
</html>
