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
            <h5><p>請選擇時段及醫生</p></h5>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        </div>
    <from>
        <table>
            <thead>
                <tr>
                    <td width="100" style="text-align: center">門診時間</td>
                    <td width="100" style="text-align: center">早診</td>
                    <td width="100" style="text-align: center">午診</td>
                    <td width="100" style="text-align: center">晚診</td>
                </tr>
            </thead>
            <tbody>
            @foreach($sections as $section)
                <tr>
                    <td width="100" style="text-align: center">{{$section->date}} {{$section->week}}</td>
                    @if($section->section=='早')
                        <td width="100" style="text-align: center">{{$section->doctor_id}}</td>
                    @else
                        <td width="100" style="text-align: center"></td>
                    @endif
                    @if($section->section=='午')
                        <td width="100" style="text-align: center">{{$section->doctor_id}}</td>
                    @else
                        <td width="100" style="text-align: center"></td>
                    @endif
                    @if($section->section=='晚')
                        <td width="100" style="text-align: center">{{$section->doctor_id}}</td>
                    @else
                        <td width="100" style="text-align: center"></td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </from>
    </div>

    </div>
@endsection