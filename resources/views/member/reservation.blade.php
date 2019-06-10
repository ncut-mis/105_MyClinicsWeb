@extends('layouts.app')

@section('title', '預約列表')

@section('content')

    <header class="intro-header">
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

    <div class="container">
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
                    <td width="100" style="text-align: center">看診進度</td>
                    <td width="200" style="text-align: center">提醒時間</td>
                    <td width="100" style="text-align: center">提醒號碼</td>
                    <td width="100" style="text-align: center"></td>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    @foreach($sections as $section)
                        @if($reservation->section_id == $section->id)
                        <tr>
                            <td width="100" style="text-align: center">{{$section->date}}</td>
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

                            <td width="100" style="text-align: center">{{$reservation->reservation_no}}號</td>
                            <td width="100" style="text-align: center">{{$section->current_no}}號</td>
                            @if($reservation->reminding_time==null && $reservation->reminding_no==null)
                                <td width="100" style="text-align: center"><a href="myreservation/{{$reservation->id}}/addreminding">新增提醒</a></td>
                            @else
                                <td width="100" style="text-align: center"><a href="myreservation/{{$reservation->id}}/addreminding">前{{$reservation->reminding_time}}小時</a></td>
                                <td width="100" style="text-align: center"><a href="myreservation/{{$reservation->id}}/addreminding">前{{$reservation->reminding_no}}號</a></td>

                            @endif
                            <td width="100" style="text-align: center"><a href="myreservation/{{$reservation->id}}/delete">刪除預約</a></td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection