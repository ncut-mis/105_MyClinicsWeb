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
            <h1>我的診所</h1>
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
                                <td style="text-align: center">{{ $clinic->name}}</td>

                            </tr>
                            @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>

