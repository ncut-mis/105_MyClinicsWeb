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

    <div class="container">
        <div>

            <div>
                <h4><p>系統公告</p></h4>
            </div>
            <table>
                <thead>
                <tr>
                    <td width="100" style="text-align: center">標題</td>
                    <td width="100" style="text-align: center">內容</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td width="100" style="text-align: center">{{$post->title}}</td>
                        <td width="200" style="text-align: center">{{$post->content}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>

