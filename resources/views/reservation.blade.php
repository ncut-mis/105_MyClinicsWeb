@extends('layouts.app')

@section('title', '預約診所')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/reservation.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>預約診所 Online Reservation</h1>
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
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h5><p>請輸入以下欄位</p></h5>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <label>姓名</label>
                            <input type="text" class="form-control" placeholder="姓名" id="name" value="{{Auth::user()->name}}" required data-validation-required-message="請輸入姓名">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <label>日期</label>
                            <input type="date" class="form-control" placeholder="日期" id="date" required data-validation-required-message="請選擇日期">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <label>時段</label>
                            <select name="section" class="form-control"  id="section"  required data-validation-required-message="請選擇時段">
                                <option value="0"></option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <label>醫生</label>
                            <select name="doctor" class="form-control"  id="doctor"  required data-validation-required-message="請選擇醫生">
                                <option value=""></option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="col-lg-3 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <button type="submit" class="btn btn-default">確定</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
