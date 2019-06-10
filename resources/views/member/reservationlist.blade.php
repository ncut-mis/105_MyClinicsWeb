@extends('layouts.app')
@section('title', '預約列表')

@section('content')

    <header class="intro-header">
        <header>
            <div class="navbar navbar-fixed-top">
                <div class="container">
                </div>
            </div>
        </header>
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
            <h1>所有預約</h1>
            <div class="list-group">
                @foreach($reservations as $reservation)
                    @foreach($sections as $section)
                        @if($reservation->section_id == $section->id)
                            <a href="myreservation/{{ $section->id }}" class="list-group-item list-group-item-action table-responsive" style="text-align: center;">{{ $section->date}}
                            @foreach($clinics as $clinic)
                                @if($section->clinic_id == $clinic->id)
                                    {{$clinic->name}}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </article>
@endsection