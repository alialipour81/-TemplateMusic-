<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>صفحه اصلی</title>
<!--=================================
Meta tags
=================================-->
<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no"/>
<!--=================================
Style Sheets=================================-->

    <link href="http://fonts.googleapis.com/css?family=Lato:400,900,700,400italic,300,700italic" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700' rel='stylesheet' type='text/css'>    
    
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/animations.css">
<link rel="stylesheet" type="text/css" href="assets/css/dl-menu.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
<link rel="stylesheet" href="assets/css/main.css">

<script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
</head>
<body dir="rtl">


<!--===============================
Preloading Splash Screen
===================================-->
<div class="pageLoader"></div> 
    
<div class="majorWrap">
<!--========================================
Header Content
===========================================-->
   <?php include 'layouts/header.html'?>

    <div id="ajaxArea"> 
    <!--=================================
    Main Slider
    =================================-->
        <section class="custom-slider">
          <div id="home-slider" class="xv_slider flexslider">
            <ul class="slides">
              <li class="xv_slide "  data-slidebg="url('assets/img/slider2.jpg')">
                <div class="albumAction">
                    <div class="container">
                        <a class="btn btn-dark text-uppercase text-bold title-post" href="#">
                            <i class="fa fa-play"></i> شنیدن آهنگ
                        </a>
                        <a class="btn btn-default text-uppercase text-bold title-post" href="#">
                            <i class="fa fa-cloud-download"></i> دانلود آهنگ
                        </a>
                    </div>
                </div>

                <div class="flex-caption ">
                  <div class="container ">
                    <div class="row ">
                      <div class="col-xs-12 col-sm-6 col-md-3 slide-visual">
                         <figure class="fadeInLeft animated">
                            <img src="assets/img/AmirFakh.jpg" alt=""/>
                         </figure>
                      </div><!--column-->
                      <div class="col-xs-12 col-sm-6 col-md-6 about-album">
                        <div class="animated fadeInRight" dir="rtl">
                             <h2 class="title-post">قلب من</h2>
                             <h6 class="title-post">علیرضا طلیسچی</h6>
                             <p class="IranSans">
                                 لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                             </p>
                         </div>
                      </div><!--column-->
                    </div><!--row-->
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
    <!--=================================
    Albums Section
    =================================-->
        <section>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">

                        </div>
                        <div class="col-xs-12 col-md-6">
                            <form class="search-widget">
                                <input type="text"  placeholder="نام آهنک یابخشی از آهنگ را واردکنید">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </header><!--section header-->
            <div class="container" id="yourself-music">
                <div class="search-filters text-uppercase text-bold">
                    <div class="row" >
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <div class="searched-for title-post" >
                                <span class="s-keyword title-post"> جدیدترین موزیک ها</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-7 text-right">
                            <div class="search-actions">
                                <ul>
                                    <li><a class="title-post">آخرین بروزرسانی:</a></li>
                                    <li class="active title-post"><a > 23 آبان 1401</a></li>
                                </ul>
                                <ul>
                                    <li><a class="title-post">موزیک های امروز:</a></li>
                                    <li class="active"><a>39 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--row-->
            </div><!--container-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" >
                        <div class="album-grid-wrap" dir="rtl">
                            <a href="#" class="album-control btn xv-prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="album-control btn bottom-right xv-next"><i class="fa fa-angle-right"></i></a>
                            <div class="album-grid text-uppercase clearfix">
                                <a href="music-single.php" class="album-unit" >
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>
                                <a href="album-single.php" class="album-unit">
                                    <figure><img src="assets/img/hirad.jpg" width="265" height="265" alt=""/>
                                        <figcaption class="new-musics" dir="ltr">
                                            <span class="title-post">  شاهین نجفی</span>
                                            <h3 class="title-post"> سیگما</h3>
                                        </figcaption>
                                    </figure>
                                </a>

                            </div><!--album-grid-->
                         </div><!--album-grid-wrap-->
                    </div><!--column-->
                </div><!--row-->
            </div><!--container-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                         <a  class="btn btn-wide btn-grey text-uppercase text-bold shwo-all-musics" href="musics.php">  نمایش تمام موزیک ها</a>
                    </div>
                </div>
            </div>
        </section>
    <!--=================================================
    TOP songs /Trendding This week / Featured Songs
    ==================================================-->
        <section>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- null -->
                        </div>
                    </div>
                </div>
            </header><!--section header-->

            <div class="container">
                <div class="search-filters text-uppercase text-bold">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <a class="link link-grey p-music" href="#">پرطرفدارترین موزیک ها <i class="fa fa-music"></i></a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-7 text-right">
                            <div class="search-actions">
                                <ul>
                                    <li><a >آخرین بروزرسانی:</a></li>
                                    <li class="active"><a > 23 اسفند 1401</a></li>
                                </ul>

                            </div>
                        </div>
                    </div><!--row-->
                </div>
            </div><!--container-->
                   <!-- پرطرفدارترین موزیک ها -->
            <div class="container">
                <ul class="song-list text-uppercase text-bold clearfix">

                    <li id="singleSongPlayer-1" class="song-unit singleSongPlayer clearfix" data-before="1">

                        <div id="singleSong-jplayer-4" class="singleSong-jplayer title-post" data-title=" نوازش " data-mp3="https://dl.faz2music.ir/download/3471502/Amir%20Tataloo%20-%20Navazesh%20[320].mp3">
                        </div>

                        <figure><img src="assets/img/unnamed-4.jpg" alt="" width="265" height="265"/></figure>

                        <span class="playit controls jp-controls-holder">
                            <i class="jp-play pc-play"></i> 
                            <i class="jp-pause pc-pause"></i>
                        </span>
                        <span class="song-title jp-title" ></span>
                        <span class="song-author title-post" data-before="خواننده:">  امیرتتلو</span>
                        <span class="song-time jp-duration title-post" ></span>

                        <form action="https://dl.faz2music.ir/download/3471502/Amir%20Tataloo%20-%20Navazesh%20[320].mp3" method="get" >
                            <button class="song-btn title-post  b-danger btn-download"> دانلود <i class="fa fa-download"></i></button>
                        </form>

                            <div class="audio-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar" style="width:20%;"></div>
                                </div><!--jp-seek-bar--> 
                            </div><!--audio-progress--> 
                    </li><!--song-->

                    <li id="singleSongPlayer-2" class="song-unit singleSongPlayer clearfix" data-before="2">

                        <div id="singleSong-jplayer-5" class="singleSong-jplayer" data-title="Melodic Story" data-mp3="https://0.s3.envato.com/files/165242182/preview.mp3">
                        </div>

                        <figure><img src="assets/img/unnamed-4.jpg" alt="" width="265" height="265"/></figure>

                        <span class="playit controls jp-controls-holder">
                            <i class="jp-play pc-play"></i>
                            <i class="jp-pause pc-pause"></i>
                        </span>
                        <span class="song-title jp-title" data-before="title"></span>
                        <span class="song-author" data-before="Author">Prostage</span>
                        <span class="song-time jp-duration" data-before="Time"></span>
                        <a class="song-btn" href="#">$1.29</a>


                            <div class="audio-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar" style="width:20%;"></div>
                                </div><!--jp-seek-bar-->
                            </div><!--audio-progress-->
                    </li><!--song-->

                    <li id="singleSongPlayer-3" class="song-unit singleSongPlayer clearfix" data-before="3">

                        <div id="singleSong-jplayer-6" class="singleSong-jplayer" data-title="Trance From Heaven" data-mp3="https://0.s3.envato.com/files/166379244/preview.mp3">
                        </div>

                        <figure><img src="assets/img/unnamed-4.jpg" alt="" width="265" height="265"/></figure>

                        <span class="playit controls jp-controls-holder">
                            <i class="jp-play pc-play"></i>
                            <i class="jp-pause pc-pause"></i>
                        </span>
                        <span class="song-title jp-title" data-before="title"></span>
                        <span class="song-author" data-before="Author">Prostage</span>
                        <span class="song-time jp-duration" data-before="Time"></span>
                        <a class="song-btn" href="#">$1.29</a>


                            <div class="audio-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar" style="width:20%;"></div>
                                </div><!--jp-seek-bar-->
                            </div><!--audio-progress-->
                    </li><!--song-->

                    <li id="singleSongPlayer-4" class="song-unit singleSongPlayer clearfix" data-before="4">

                        <div id="singleSong-jplayer-7" class="singleSong-jplayer" data-title="Trudie Pettis" data-mp3="https://0.s3.envato.com/files/149812296/preview.mp3">
                        </div>

                        <figure><img src="assets/img/unnamed-4.jpg" alt="" width="265" height="265"/></figure>

                        <span class="playit controls jp-controls-holder">
                            <i class="jp-play pc-play"></i>
                            <i class="jp-pause pc-pause"></i>
                        </span>
                        <span class="song-title jp-title" data-before="title"></span>
                        <span class="song-author" data-before="Author">Prostage</span>
                        <span class="song-time jp-duration" data-before="Time"></span>
                        <a class="song-btn" href="#">$1.29</a>


                            <div class="audio-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar" style="width:20%;"></div>
                                </div><!--jp-seek-bar-->
                            </div><!--audio-progress-->
                    </li><!--song-->

                    <li id="singleSongPlayer-5" class="song-unit singleSongPlayer clearfix" data-before="5">

                        <div id="singleSong-jplayer-8" class="singleSong-jplayer" data-title="Let's Metal" data-mp3="https://0.s3.envato.com/files/139661456/preview.mp3">
                        </div>

                        <figure><img src="assets/img/unnamed-4.jpg" alt="" width="265" height="265"/></figure>

                        <span class="playit controls jp-controls-holder">
                            <i class="jp-play pc-play"></i>
                            <i class="jp-pause pc-pause"></i>
                        </span>
                        <span class="song-title jp-title" data-before="title"></span>
                        <span class="song-author" data-before="Author">Prostage</span>
                        <span class="song-time jp-duration" data-before="Time"></span>
                        <a class="song-btn" href="#">$1.29</a>


                            <div class="audio-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar" style="width:20%;"></div>
                                </div><!--jp-seek-bar-->
                            </div><!--audio-progress-->
                    </li><!--song-->

                    <li id="singleSongPlayer-6" class="song-unit singleSongPlayer clearfix" data-before="5">

                        <div id="singleSong-jplayer-9" class="singleSong-jplayer" data-title="Let's Metal" data-mp3="https://0.s3.envato.com/files/139661456/preview.mp3">
                        </div>

                        <figure><img src="assets/img/unnamed-4.jpg" alt="" width="265" height="265"/></figure>

                        <span class="playit controls jp-controls-holder">
                            <i class="jp-play pc-play"></i>
                            <i class="jp-pause pc-pause"></i>
                        </span>
                        <span class="song-title jp-title" data-before="title"></span>
                        <span class="song-author" data-before="Author">Prostage</span>
                        <span class="song-time jp-duration" data-before="Time"></span>
                        <a class="song-btn" href="#">$1.29</a>


                            <div class="audio-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar" style="width:20%;"></div>
                                </div><!--jp-seek-bar-->
                            </div><!--audio-progress-->
                    </li><!--song-->


                </ul>
            </div>

        </section>    
    <!--=================================================

    ==================================================-->
        <section>
            <header class="style2" id="contents-weblog">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="text-uppercase">آخرین مطالب وبلاگ</h2>
                        </div>
                    </div>
                </div>
            </header><!--section header-->

            <div class="container">
                <div class="clearfix masonry-container">
                    <div class="ele-masonry">
                        <article>
                            <figure>
                                <img src="assets/img/weblog.jpg" alt="" width="509" height="252"/>
                            </figure>
                            <div class="about-article text-center text-uppercase">
                                <h3 ><a href="blog-single.php" class="title-post">آهنگ جدید و قدیمی  </a></h3>
                                <span> 37 دقیقه پیش</span>
                                <ul class="social-list">
                                    <li><a class="fa fa-facebook fb-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a class="fa fa-twitter tweet-bg" href="http://twitter.com/intent/tweet?status=URL"></a></li>
                                </ul>
                            </div>

                            <p class="weblog-description" dir="rtl"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <a href="blog-single.php" class="btn btn-transparent text-uppercase text-semibold next-content"> ادامه مطلب</a>
                        </article>
                    </div>

                    <div class="ele-masonry">
                        <article>
                            <figure>
                                <img src="assets/img/weblog2.jpg" alt="" width="509" height="252"/>
                            </figure>
                            <div class="about-article text-center text-uppercase">
                                <h3 class="text-semibold"><a href="blog-single.php" class="title-post">شماره 2  </a></h3>
                                <span>1سال قبل </span>
                                <ul class="social-list">
                                    <li><a class="fa fa-facebook fb-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a class="fa fa-twitter tweet-bg" href="http://twitter.com/intent/tweet?status=URL"></a></li>
                                </ul>
                            </div>

                            <p class="weblog-description" dir="rtl"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <a href="blog-single.php" class="btn btn-transparent text-uppercase text-semibold next-content"> ادامه مطلب</a>
                        </article>
                    </div>
                    <div class="ele-masonry">
                        <article>
                            <figure class="article-slider">
                                <img src="assets/img/weblog3.jpg" alt="" width="509" height="252"/>
                            </figure>
                            <div class="about-article text-center text-uppercase">
                                <h3 class="text-semibold"><a href="blog-single.php" class="title-post">پست شماره 4</a></h3>
                                <span>23ساعت قبل </span>
                                <ul class="social-list">
                                    <li><a class="fa fa-facebook fb-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a class="fa fa-twitter tweet-bg" href="http://twitter.com/intent/tweet?status=URL"></a></li>
                                </ul>
                            </div>

                            <p class="weblog-description" dir="rtl"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <a href="blog-single.php" class="btn btn-transparent text-uppercase text-semibold next-content">ادامه مطلب </a>
                        </article>
                    </div>
                    <div class="ele-masonry">
                        <article>
                            <figure class="article-slider">
                                <img src="assets/img/weblog3.jpg" alt="" width="509" height="252"/>
                            </figure>
                            <div class="about-article text-center text-uppercase">
                                <h3 class="text-semibold"><a href="blog-single.php" class="title-post">پست شماره 4</a></h3>
                                <span>23ساعت قبل </span>
                                <ul class="social-list">
                                    <li><a class="fa fa-facebook fb-bg" href="http://www.facebook.com/sharer/sharer.php?u=YOUR-URL"></a></li>
                                    <li><a class="fa fa-twitter tweet-bg" href="http://twitter.com/intent/tweet?status=URL"></a></li>
                                </ul>
                            </div>

                            <p class="weblog-description" dir="rtl"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <a href="blog-single.php" class="btn btn-transparent text-uppercase text-semibold next-content">ادامه مطلب </a>
                        </article>
                    </div>





                </div><!--row-->
                <a href="blog.php" class="btn btn-wide btn-grey text-uppercase text-bold go-to-weblog">رفتن به وبلاگ</a>
                <div class="mb-40"></div>
            </div><!--container-->    

        </section>
    <!--=================================
    Events/concerts
    =================================-->
        <section>
            <header class="parallax parallax_two style3 text-center text-uppercase text-bold" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="title-post">آخرین محصولات فروشگاه</h2>
                            <p > با خیال راحت از خواننده مورد نظرتان حمایت کنید :)    </p>
                        </div>
                    </div>
                </div>
            </header><!--section header-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="eventsSlider" data-nexttext="<i class='fa fa-arrow-right'></i> محصولات بیشتر  " data-prevtext="<i class='fa fa-arrow-left'></i>   برگشت">
                            <div class="event-unit-slide">
                                <div class="event-unit text-uppercase text-bold">
                                    <div class="time-date"><span class="title-post">18 دقیقه قبل </span></div>
                                    <div class="event-info">
                                        <figure><img src="assets/img/iphone-6s-375x375.jpg" alt="" width="265" height="265"/></figure>
                                        <span><a class="eventTitle" href="#">حصین رحمتی</a></span>
                                     </div>
                                    <a href="#" class="btn btn-danger title-post" title="مشاهده محصول">حمایت</a>
                                </div><!--event-->
                            </div>
                            <div class="event-unit-slide">
                                <div class="event-unit text-uppercase text-bold">
                                    <div class="time-date"><span class="title-post">18 دقیقه قبل </span></div>
                                    <div class="event-info">
                                        <figure><img src="assets/img/iphone-6s-375x375.jpg" alt="" width="265" height="265"/></figure>
                                        <span><a class="eventTitle" href="#">حصین رحمتی</a></span>
                                    </div>
                                    <a href="#" class="btn btn-danger title-post" title="مشاهده محصول">حمایت</a>
                                </div><!--event-->
                            </div>
                            <div class="event-unit-slide">
                                <div class="event-unit text-uppercase text-bold">
                                    <div class="time-date"><span class="title-post">18 دقیقه قبل </span></div>
                                    <div class="event-info">
                                        <figure><img src="assets/img/iphone-6s-375x375.jpg" alt="" width="265" height="265"/></figure>
                                        <span><a class="eventTitle" href="#">حصین رحمتی</a></span>
                                    </div>
                                    <a href="#" class="btn btn-danger title-post" title="مشاهده محصول">حمایت</a>
                                </div><!--event-->
                            </div>
                            <div class="event-unit-slide">
                                <div class="event-unit text-uppercase text-bold">
                                    <div class="time-date"><span class="title-post">18 دقیقه قبل </span></div>
                                    <div class="event-info">
                                        <figure><img src="assets/img/iphone-6s-375x375.jpg" alt="" width="265" height="265"/></figure>
                                        <span><a class="eventTitle" href="#">حصین رحمتی</a></span>
                                    </div>
                                    <a href="#" class="btn btn-danger title-post" title="مشاهده محصول">حمایت</a>
                                </div><!--event-->
                            </div>
                            <div class="event-unit-slide">
                                <div class="event-unit text-uppercase text-bold">
                                    <div class="time-date"><span class="title-post">18 دقیقه قبل </span></div>
                                    <div class="event-info">
                                        <figure><img src="assets/img/iphone-6s-375x375.jpg" alt="" width="265" height="265"/></figure>
                                        <span><a class="eventTitle" href="#">حصین رحمتی</a></span>
                                    </div>
                                    <a href="#" class="btn btn-danger title-post" title="مشاهده محصول">حمایت</a>
                                </div><!--event-->
                            </div>
                        </div>
                    </div><!--column-->
                </div><!--row-->

                <div class="navigators text-bold text-uppercase text-center">
                    <div class="row">
                        <div class="col-xs-6">
                            <div id="prevEvents" class="sliderControls"></div>
                        </div>
                        <div class="col-xs-6">
                            <div id="nextEvents" class="sliderControls"></div>
                        </div>
                    </div>
                </div>

            </div><!--container-->
        </section>
    <!--=================================================
    Contact
    ==================================================-->
        <section>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="text-uppercase"> ارسال نظر</h2>
                        </div>
                    </div>
                </div>
            </header><!--section header-->
            <div class="container">
                <form id="contactForm" novalidate class="text-uppercase text-semibold row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="field-wrap">
                           <label for="xv_name" class="title-post">نام شما </label>
                           <input name="xv_name" id="xv_name" type="text" required="required"/>
                        </div>    
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="field-wrap">
                           <label class="tranparent title-post" for="xv_email">ایمیل شما</label>
                           <input name="xv_email" class="tranparent" id="xv_email" type="email" required="required"/>
                        </div>    
                    </div>
                    <div class="col-xs-12">
                        <div class="field-wrap textarea-wrap">
                            <label for="xv_message" class="title-post">نظر شما </label>
                            <textarea name="xv_message" id="xv_message" required></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-default btn-md" type="submit"> ارسال نظر</button>
                    </div>

                </form>
                

                
            </div><!--container-->
            
        </section>    
    </div>
<!--=================================
Footer
=================================-->
    <?php include 'layouts/footer.html';?>
</div>

<!--=================================
Script Source
=================================-->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/ajaxify.min.js"></script>
<script src="assets/js/jquery.downCount.js"></script>
<script src="assets/js/jquery.datetimepicker.full.min.js"></script>
<script src="assets/js/jplayer/jquery.jplayer.min.js"></script>
<script src="assets/js/jplayer/jplayer.playlist.min.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.waitforimages.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/packery.pkgd.min.js"></script>
<script src="assets/js/tweetie.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script> <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=3.0'></script>
<script src="assets/js/main.js"></script>    
</body>
</html>
    