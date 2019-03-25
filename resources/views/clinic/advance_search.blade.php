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
            <h5><p>請選擇科別及地區</p></h5>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        </div>
        <form action="{{ route('clinic.advance_search') }}" >

        <div class="form-group">
            <label>科別：</label><br>
            <Select name=category style="width: 200px;" required data-validation-required-message="請選擇科別">
                @foreach($category as $category)
                    <Option value={{$category->id}}>{{$category->category}}</Option>
                @endforeach
            </Select>
        </div>
        <div class="form-group">
            <label>地區：</label><br>
            <Select name=area style="width: 200px;" required data-validation-required-message="請選擇地區">
                @foreach($area as $area)
                    <Option value={{$area->id}}>{{$area->area}}</Option>
                @endforeach
            </Select>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-success">確定</button>
        </div>

        </form>
    </div>

    </div>
@endsection
