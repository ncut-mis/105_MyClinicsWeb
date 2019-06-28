@extends('newhome')
<header class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <h1>我的診所/醫生</h1>
        <h2>診所</h2>
        <div class="row">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                    </thead>
                    <tbody>
                    @foreach($favorite_clinics as $favorite_clinic)
                        @foreach($clinics as $clinic)
                            @if($favorite_clinic->clinics_id===$clinic->id)
                                <tr>
                                    <td>
                                        <form action="/clinics/{{ $clinic->id }}" method="GET">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fa-plus"></i> {{ $clinic->name}}
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
            <h2>醫生</h2>
            <div class="row">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        </thead>
                        <tbody>
                        @foreach($favorite_doctors as $favorite_doctor)
                            @foreach($doctors as $doctor)
                                @if($favorite_doctor->doctor_id == $doctor->id)
                                    @foreach($staffs as $staff)
                                        @if($doctor->staff_id == $staff->id)
                                            <tr>
                                                <td>
                                                    <form action="/doctor/{{ $doctor->id }}" method="GET">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fa fa-plus"></i> {{ $staff->name}}
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</article>

