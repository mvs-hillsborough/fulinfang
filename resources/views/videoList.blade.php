@extends('layout')
@section('content') 
 <!-- Page Content -->
    <div class="container" id="videoListContent">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">课程类别</p>
                <div class="list-group">
                    <a href="#" id="all" class="list-group-item">全部</a>
                    <a href="#" id="beginner" class="list-group-item">初级</a>
                    <a href="#" id="intermidiate" class="list-group-item">中级</a>
                    <a href="#" id="advanced" class="list-group-item">进阶</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/banner.jpg" alt="">
                                </div>
                                <div class="item">
                                    <a href="http://fulinfang.com">
                                    <img class="slide-image" src="img/banner2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/banner3.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="row">
                @foreach ($videos as $video)
                <div class="col-sm-4 col-lg-4 col-md-4 items" id="video{{$video->id}}">
                    <div class="thumbnail">
                        <img src="{{$video->img}}" alt="">
                            <div class="caption">
                                <!-- <h4 class="pull-right">$24.99</h4> -->
                                <p><a href="videoPlay">【拂菻坊】{{$video->name}}</a></p>
                                <small>{{$video->subtitle}}</small>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                  <!--   <div class="col-sm-4 col-lg-4 col-md-4 items" id="item1">
                        <div class="thumbnail">
                            <img src="img/video1.jpg" alt="">
                            <div class="caption"> 
                                <h4><a href="videoPlay">【拂菻坊】瑞典斯德哥尔摩</a>
                                </h4>
                                <p>说走就走的旅行（欧洲）第一部</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                   <div class="col-sm-4 col-lg-4 col-md-4 items" id="item2">
                        <div class="thumbnail">
                            <img src="img/video2.jpg" alt="">
                            <div class="caption"> 
                                <h4><a href="videoPlay">【拂菻坊】北京</a>
                                </h4>
                                <p>北京Chinglish测试</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                   <div class="col-sm-4 col-lg-4 col-md-4 items" id="item3">
                        <div class="thumbnail">
                            <img src="img/video3.jpg" alt="">
                            <div class="caption"> 
                                <h4><a href="videoPlay">【拂菻坊】礼物</a>
                                </h4>
                                <p>收到的奇葩礼物</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-4 col-lg-4 col-md-4 items" id="item4">
                        <div class="thumbnail">
                            <img src="img/video4.jpg" alt="">
                            <div class="caption">
                                <h4 style="color: #d35f5f;" class="pull-right">VIP</h4>
                                <h4><a href="videoPlay">【拂菻坊】对比</a>
                                </h4>
                                <p>中文中应该有的英文WORDS</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-4 col-lg-4 col-md-4 items" id="item5">
                        <div class="thumbnail">
                            <img src="img/video5.jpg" alt="">
                            <div class="caption">
                                <h4 style="color: #d35f5f;"class="pull-right">VIP</h4>
                                 <h4><a href="videoPlay">【拂菻坊】国际友人</a>
                                </h4>
                                <p></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-4 col-lg-4 col-md-4 items" id="item6">
                        <div class="thumbnail">
                            <img src="img/video8.jpg" alt="">
                            <div class="caption">
                                <h4 style="color: #d35f5f;" class="pull-right">VIP</h4>
                               <h4><a href="videoPlay">【拂菻坊】趣味</a>
                                </h4>
                                <p>测测你的Gaydar</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
 -->
                </div>

            </div>

        </div>
    </div>
    @stop