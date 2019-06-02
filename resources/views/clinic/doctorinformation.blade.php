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
                        <h1>醫生資訊</h1>
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
                                <h2>
                            <label>醫生名字：</label>
                                    @foreach($staffs as $staff)
                                        @if($doctors->staff_id == $staff->id)
                                            <a>{{$staff->name}}</a>
                                        @endif
                                    @endforeach
                                </h2>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <h2>
                            <label>專長：</label>
                            <a>{{$doctors->specialties}}</a>
                                </h2>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-12">
                                <h2>
                            <label>經歷：</label>
                            <a>{{$doctors->experiences}}</a>
                                </h2>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                            <h2>
                                <label>學歷：</label>
                                <a>{{$doctors->degrees}}</a>
                            </h2>
                            </div>
                        </div>
                        <div>

                            <div class="col-sm-12">

                            <button type="submit" class="btn btn-default">

                                <i class="fa fa-plus"></i> <h4>預約診所 </h4>

                            </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
@endsection
