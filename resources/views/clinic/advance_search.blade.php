@extends('layouts.app')
@section('title', '搜尋')

@section('content')

    <header class="intro-header">
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


    <div  class="container">
        <div class="row">
            <h5><p>請選擇科別及地區</p></h5>

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

@endsection
