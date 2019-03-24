@extends('layouts.app')

@section('title', '找查診所')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/reservation.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>找查診所</h1>
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
            <h5><p>請選擇科別或地區</p></h5>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        </div>
    <from>
        <div class="form-group">
            <label>科別：</label><br>
            <Select name=project style="width: 300px;" >
                <Option Value="一般內科">一般內科</Option>
                <Option Value="外科">外科</Option>
                <Option Value="中醫">中醫</Option>
            </Select>
        </div>
        <div class="form-group">
            <label>地區：</label><br>
            <Select name=project style="width: 300px;" >
                <Option Value="大里區">大里區</Option>
                <Option Value="霧峰區">霧峰區</Option>
                <Option Value="太平區">太平區</Option>
            </Select>
        </div>
    </from>
    </div>

    </div>
@endsection
