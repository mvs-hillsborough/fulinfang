@extends('layout')
@section('content') 
  <!-- Page Content -->
    <div class="container" id="videoPlayContent">

        <div class="row">

            <div class="col-md-9">

                <div class="thumbnail">
                 <iframe width="100%" height="400" src="{{$video->url}}">
                </iframe>
                    <div class="caption-full"> 
                        <h4><a href="#">【拂菻坊】</a>
                        </h4>
                        <p>{{$video->name}}</p>
                        <!-- <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p> -->
                        <p>{{$video->subtitle}}</p>
                    </div>
                    <div class="ratings">
                        <!-- <p class="pull-right">{{$video->recent_view}}</p> -->
                        <p>
                        最近观看：{{$video->recent_view}}
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">最近评论</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            小丽
                            <span class="pull-right">10 days ago</span>
                            <p>太棒了，看了以后受益匪浅!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            莎莎
                            <span class="pull-right">12 days ago</span>
                            <p>视频很赞，想给芳芳生猴子!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            韩梅梅
                            <span class="pull-right">15 days ago</span>
                            <p>早看到这个，就能教李雷学英语了...</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@stop