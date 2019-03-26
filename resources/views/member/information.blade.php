@extends('layouts.app')

@section('title', '勤益大聯盟')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>會員資訊</h1>
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->

    <div>
        <div>
            <div>
                <h4><p>基本資料</p></h4>
            </div>
            <table>
                <thead>
                <tr>
                    <td width="100" style="text-align: center">姓名</td>
                    <td width="100" style="text-align: center">生日</td>
                    <td width="100" style="text-align: center">電話</td>
                    <td width="250" style="text-align: center">住址</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="100" style="text-align: center">{{Auth::user()->name}}</td>
                    <td width="100" style="text-align: center">{{Auth::user()->birthday}}</td>
                    <td width="100" style="text-align: center">{{Auth::user()->phone}}</td>
                    <td width="250" style="text-align: center">{{Auth::user()->address}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <h4><p>初診資料</p></h4>
            </div>
            <table>
                <thead>
                <tr>
                    <td width="100" style="text-align: center">病史</td>
                    <td width="100" style="text-align: center">過敏藥物</td>
                    <td width="100" style="text-align: center">附註</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="100" style="text-align: center"></td>
                    <td width="100" style="text-align: center"></td>
                    <td width="100" style="text-align: center"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
