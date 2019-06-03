@extends('newhome')

@section('title', '勤益大聯盟|診所選擇')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">
        <header>
            <div class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">勤益大聯盟</a>
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
                                <a class="navbar-brand" href="/">勤益大聯盟</a>

                            </div>
                            <div id="navbar" class="navbar-collapse collapse">

                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/">首頁</a></li>
                                    <li><a href="{{route('clinic.index')}}">所有診所</a></li>
                                    <li><a href="{{route('clinic.advance_search.create')}}">找查診所</a></li>
                                    <li><a href="{{route('reservation.myreservation')}}">我的預約</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>診所選擇</h1>
                        <hr class="small">
                        <span class="subheading">診所名稱</span>
                        <span class="subheading">{{ __('  加入我的診所')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1></h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        @foreach ($clinics as $clinic)
                        <tr>
                            <td>
                                <form action="/clinics/{{ $clinic->id }}" method="GET">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-default">
                                       <i class="fa fa-plus"></i> {{ $clinic->name}}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{route('favorite_clinic.create', $clinic->id)}}"> Add </a>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
