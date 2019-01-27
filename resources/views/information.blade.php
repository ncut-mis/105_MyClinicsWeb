@extends('layouts.app')

@section('title', '勤益大聯盟|所有診所')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>診所資訊</h1>
                        <hr class="small">
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
                    <form action="/reservation/{{ $clinic->id }}" method="GET">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h2>
                        <label>診所名稱：</label>
                        <td>{{ $clinic->name}}</td>
                            </h2>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2>
                            <label>電話：</label>
                            <td>{{ $clinic->tel}}</td>
                                </h2>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-12">
                                <h2>
                            <label>地址：</label>
                            <td>{{ $clinic->address}}</td>
                                </h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2>
                            <label>圖片：</label>
                            <td></td>
                                </h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2>
                            <label>營業時間：</label>
                            <td></td>
                                </h2>
                            </div>
                        </div>
                        <div class="col-sm-12">

                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> <h4>預約診所 </h4>
                        </button>

                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </article>
@endsection
