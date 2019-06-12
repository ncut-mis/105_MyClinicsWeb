@extends('layouts.app')
@section('title', '診所列表')

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
            <h1>選擇診所</h1>
            <form action="{{ route('clinic.search') }}" >
                <div class="form-group">
                    <a>勤益大聯盟</a>
                    <input type="text" class="form-control" name="keyword" placeholder="搜尋">
                    <button type="submit" >搜尋診所</button>
                </div>
            </form>
            <div class="list-group">
                @foreach ($clinics as $clinic)
                    <a href="/clinics/{{ $clinic->id }}" class="list-group-item list-group-item-action table-responsive" style="text-align: center;">{{ $clinic->name}}</a>
                @endforeach
            </div>
        </div>
    </article>
@endsection
