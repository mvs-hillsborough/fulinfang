@extends('layout')
@section('content')   

   <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="/img/favicon.png" alt="">
                    <div class="intro-text">
                        <span class="name">拂菻坊教你学英语</span>
                        <hr class="star-light">
                        <span class="skills">适合具有一定英语能力，想通过学习来提高自己的英语水平。<br>同时，也适合英语爱好者。让你学到一口纯正的英语</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>芳芳推荐</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="item" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-play fa-3x"></i>
                            </div>
                        </div>
                        <img width="900" height="650" src="img/hqdefault.jpg" class="img-responsive" alt="">
                           <p>【拂菻坊】你应该学习哪个英国方言？<br></p> 
                    </a> 
                </div>
                <div class="col-sm-4 portfolio-item">
                     <a href="item" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-play fa-3x"></i>
                            </div>
                        </div>
                        <img width="900" height="650" src="img/video1.jpg" class="img-responsive" alt="">
                         <p>【拂菻坊】瑞典斯德哥尔摩——说走就走的旅行（欧洲）第一部</p> 
                    </a>

                </div>
                <div class="col-sm-4 portfolio-item">
                     <a href="item.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-play fa-3x"></i>
                            </div>
                        </div>
                       <img width="900" height="650" src="img/video2.jpg" class="img-responsive" alt="">
                         <p>【拂菻坊】北京Chinglish测试<br><br></p> 
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                     <a href="item.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-play fa-3x"></i>
                            </div>
                        </div>
                        <img width="900" height="650" src="img/video3.jpg" class="img-responsive" alt="">
                        <p>【拂菻坊】收到的那些奇葩礼物</p> 
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                     <a href="item.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-play fa-3x"></i>
                            </div>
                        </div>
                        <img width="900" height="650" src="img/video4.jpg" class="img-responsive" alt="">
                        <p>【拂菻坊】 中文应该有的英文WORDS</p> 
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="item.html" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-play fa-3x"></i>
                            </div>
                        </div>
                        <img width="900" height="650" src="img/video5.jpg" class="img-responsive" alt="">
                        <p>【拂菻坊】国际友人 </p> 
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>关于</h2>
                    <h3>拂菻坊</h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>来自不知哪里的外国人，他好像叫芳芳？拂菻坊？污皇芳？妇人芳，反正我们都不知道他叫什么，貌似可以随便叫？</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="http://www.fulinfang.com/" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i>访问我的网站
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>联系我们</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12 text-center">
                <p>欢迎您对我们的服务提出自己宝贵的意见或建议。我们将给予您及时答复。同时也欢迎您到我们公司来洽商业务。<br><br>
                公司名称：拂菻坊有限责任公司<br>
                通信地址：17 Tintagel way, Port solent, Portsmouth, UK<br>
                邮政编码：PO64SS<br>
                电      话：18288629885<br>
                商务洽谈：18288629885<br>
                </p>
        </div>

            </div>
     
        </div>
    </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

 
@stop