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
                        <h2>醫生資訊</h2>
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
                    <form action="/reservation2/{{ $doctors->id }}" method="GET">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h4>
                            <label>醫生名字：</label>
                                    @foreach($staffs as $staff)
                                        @if($doctors->staff_id == $staff->id)
                                            <a>{{$staff->name}}</a>
                                        @endif
                                    @endforeach
                                </h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <h4>
                            <label>專長：</label>
                            <a>{{$doctors->specialties}}</a>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-12">
                                <h4>
                            <label>經歷：</label>
                            <a>{{$doctors->experiences}}</a>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                            <h4>
                                <label>學歷：</label>
                                <a>{{$doctors->degrees}}</a>
                            </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h4>
                                    <label>駐診日期：</label>
                                    <a>{{$doctors->clinic_date}}</a>
                                </h4>
                            </div>
                        </div>
                        <div>
                            <div class="col-sm-12">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> <h4>預約醫生</h4>
                            </button>

                            </div>
                        </div>
                    </form>

                        <div class="col-sm-12">
                            <br> <button type="submit" class="btn btn-default">
                            @if(count($check) == 0)
                                <a href="{{route('favorite_create_doctor', $doctors->id)}}"> <h4>加入我的醫生 </h4></a>
                            @endif
                            @if(count($check) != 0)
                                    <a href="{{route('favorite_delete_doctor', $doctors->id)}}"> <h4>取消我的醫生 </h4></a>
                            @endif

                        </button>

                        </div>

                </div>
            </div>
        </div>
    </article>
@endsection
