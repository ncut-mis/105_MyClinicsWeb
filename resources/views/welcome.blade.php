<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> 勤益大聯盟</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #4aa0e6;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
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
            <form action="{{ route('clinic.search') }}" >
                    <div class="form-group">
                        <a>勤益大聯盟</a>
                        <input type="text" class="form-control" name="keyword" placeholder="搜尋">
                        <button type="submit" >搜尋診所</button>
                    </div>
            </form>

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">帳戶首頁</a>
                    @else
                        <a href="{{ route('login') }}">登入</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">註冊</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    勤益大聯盟
                </div>

                <div class="links">
                    <a href="{{route('clinic.index')}}">所有診所</a>
                    <a href="{{route('clinic.advance_search.create')}}">找查診所</a>
                    <a href="{{route('reservation.myreservation')}}">我的預約</a>
                    <a href="{{route('member.information')}}">個人資訊</a>
                </div>
            </div>
        </div>
    </body>
</html>
