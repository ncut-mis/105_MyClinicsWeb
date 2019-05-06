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
                        <h1>我的預約</h1>
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
                <h4><p>預約資料</p></h4>
            </div>

            <table>
                <thead>
                <tr>
                    <td width="100" style="text-align: center">日期</td>
                    <td width="100" style="text-align: center">診所</td>
                    <td width="100" style="text-align: center">醫生名字</td>
                    <td width="100" style="text-align: center">號碼</td>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    @foreach($sections as $section)
                        @if($reservation->section_id == $section->id)
                        <tr>
                            <td width="100" style="text-align: center">{{$reservation->date}}</td>
                            @foreach($clinics as $clinic)
                                @if($section->clinic_id == $clinic->id)
                                <td width="100" style="text-align: center">{{$clinic->name}}</td>
                                @endif
                            @endforeach

                            @foreach($doctors as $doctor)
                                @if($section->doctor_id == $doctor->id)
                                    @foreach($staffs as $staff)
                                        @if($doctor->staff_id == $staff->id)
                                            <td width="100" style="text-align: center">{{$staff->name}}</td>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            <td width="100" style="text-align: center">{{$reservation->number}}</td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection