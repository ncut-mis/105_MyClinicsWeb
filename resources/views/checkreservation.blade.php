@extends('layouts.app')

@section('title', '確認預約')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/reservation.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>確認預約資訊</h1>
                        <span class="subheading"></span>
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <h5><p>確認預約資訊以及設置提醒</p></h5>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        </div>
        <form  action="{{route('section.reservations.store',($sections->id))}}" >

            <div class="form-group">
                <label>姓名：</label><a>{{Auth::user()->name}}</a>
            </div>
            <div class="form-group">
                <label>日期：</label><a>{{$sections->date}}</a>
            </div>

            <div class="form-group">
                    @foreach($clinics as $clinic)
                        @if($sections->clinic_id == $clinic->id)
                            <label>診所：</label><a>{{$clinic->name}}</a>
                        @endif
                    @endforeach
            </div>
            <div class="form-group">
                @foreach($doctors as $doctor)
                    @if($sections->doctor_id == $doctor->id)
                        @foreach($staffs as $staff)
                            @if($doctor->staff_id == $staff->id)
                                <label>醫生：</label><a>{{$staff->name}}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            <div class="form-group">
                <label>看診前提醒：</label><br>
                <Select name=reminding_time style="width: 200px;" required data-validation-required-message="看診前提醒">
                    <Option value=""></Option>
                    <Option value="02:00:00">看診前二小時</Option>
                    <Option value="01:30:00">看診前一小時半</Option>
                    <Option value="01:00:00">看診前一小時</Option>
                    <Option value="00:30:00">看診前半小時</Option>
                </Select>
            </div>
            <div class="form-group">
                <label>看診號碼提醒：</label><br>
                <Select name=reminding_no style="width: 200px;" required data-validation-required-message="看診號碼提醒">
                    <Option value=""></Option>
                    <Option value="10">前10號</Option>
                    <Option value="5">前5號</Option>
                    <Option value="3">前3號</Option>
                    <Option value="2">前2號</Option>
                </Select>
            </div>

        <div class="text-right">
            <button type="submit" class="btn btn-success">確定</button>
        </div>

        </form>
    </div>

    </div>
@endsection
