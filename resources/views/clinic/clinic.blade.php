@extends('newhome')
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
            <h1>選擇診所</h1>
            <div class="list-group">
                @foreach ($clinics as $clinic)
                    <a href="/clinics/{{ $clinic->id }}" class="list-group-item list-group-item-action table-responsive" style="text-align: center;">{{ $clinic->name}}</a>
                @endforeach
            </div>
        </div>
    </article>
