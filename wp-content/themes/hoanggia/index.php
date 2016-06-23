<?php get_header(); ?>

<body class="boxed-layout container">

<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="<?php echo get_site_url(); ?>">
                <img src="assets/img/logo1-default.png" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <!--<div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>Ngôn ngữ</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="#">Tiếng Việt <i class="fa fa-check"></i></a>
                            </li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>
                    <li><a href="page_faq.html">Help</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="page_login.html">Login</a></li>
                </ul>
            </div>-->
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Trang chủ
                        </a>
                    </li>
                    <!-- End Home -->

                    <!-- Intro -->
                    <li class="">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Giới thiệu
                        </a>
                    </li>
                    <!-- End Intro -->

                    <!-- Products -->
                    <li class="dropdown active">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Large Image</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_large_right_sidebar1.html">Right Sidebar</a></li>
                                    <li><a href="blog_large_left_sidebar1.html">Left Sidebar</a></li>
                                    <li><a href="blog_large_full_width1.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Medium Image</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_medium_right_sidebar1.html">Right Sidebar</a></li>
                                    <li><a href="blog_medium_left_sidebar1.html">Left Sidebar</a></li>
                                    <li><a href="blog_medium_full_width1.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Item Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_large_right_sidebar_item1.html">Right Sidebar Item</a></li>
                                    <li><a href="blog_large_left_sidebar_item1.html">Left Sidebar Item</a></li>
                                    <li><a href="blog_large_full_width_item1.html">Full Width Item</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Blog Simple Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_large_right_sidebar.html">Right Sidebar Large</a></li>
                                    <li><a href="blog_medium_right_sidebar.html">Right Sidebar Medium</a></li>
                                    <li><a href="blog_large_full_width.html">Full Width</a></li>
                                    <li><a href="blog_large_right_sidebar_item.html">Right Sidebar Item</a></li>
                                    <li><a href="blog_large_full_width_item.html">Full Width Item</a></li>
                                </ul>
                            </li>
                            <li><a href="blog_masonry_3col.html">Masonry Grid Blog</a></li>
                            <li><a href="blog_timeline.html">Blog Timeline</a></li>
                        </ul>
                    </li>
                    <!-- End Products -->

                    <!-- Printing -->
                    <li class="">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            In ấn
                        </a>
                    </li>
                    <!-- End Printing -->

                    <!-- Contact -->
                    <li class="">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Liên hệ
                        </a>
                    </li>
                    <!-- End Contact -->

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Tìm kiếm">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Tìm</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

    <!--=== Slider ===-->
    <div id="layerslider" style="width: 100%; height: 500px; margin: 0px auto;">
        <!-- First slide -->
        <div class="ls-slide" data-ls="slidedelay:4500;transition2d:25;">
            <img src="assets/img/sliders/layer/bg1.jpg" class="ls-bg" alt="Slide background"/>

            <img class="ls-l" src="assets/img/mockup/iphone1.png" style="top: 85%; left: 44%;"
                 data-ls="offsetxin:left; durationin:1500; delayin:900; fadein:false; offsetxout:left; durationout:1000; fadeout:false;" />

            <img src="assets/img/mockup/iphone.png" alt="Slider image" class="ls-s-1" style=" top:62px; left: 29%;"
                 data-ls="offsetxin:left; durationin:1500; delayin:1500; fadein:false; offsetxout:left; durationout:1000; fadeout:false;">

            <span class="ls-s-1" style=" text-transform: uppercase; line-height: 45px; font-size:35px; color:#fff; top:200px; left: 590px; slidedirection : top; slideoutdirection : bottom; durationin : 3500; durationout : 3500; delayin : 1000;">
                Fully Responsive <br> Bootstrap 3 Template
            </span>

            <a class="btn-u btn-u-orange ls-s-1" href="#" style=" padding: 9px 20px; font-size:25px; top:340px; left: 590px; slidedirection : bottom; slideoutdirection : top; durationin : 3500; durationout : 2500; delayin : 1000; ">
                Download Now
            </a>
        </div>

        <!--Second Slide-->
        <div class="ls-slide" data-ls="transition2d:93;">
            <img src="assets/img/bg/18.jpg" class="ls-bg" alt="Slide background">

            <i class="fa fa-chevron-circle-right ls-s-1" style=" color: #fff; font-size: 24px; top:70px; left: 40px; slidedirection : left; slideoutdirection : top; durationin : 1500; durationout : 500; "></i>

            <span class="ls-s-2" style=" color: #fff; font-weight: 200; font-size: 22px; top:70px; left: 70px; slidedirection : top; slideoutdirection : bottom; durationin : 1500; durationout : 500; ">
                Fully Responsive and Easy to Customize
            </span>

            <i class="fa fa-chevron-circle-right ls-s-1" style=" color: #fff; font-size: 24px; top:120px; left: 40px; slidedirection : left; slideoutdirection : top; durationin : 2500; durationout : 1500; "></i>

            <span class="ls-s-2" style=" color: #fff; font-weight: 200; font-size: 22px; top:120px; left: 70px; slidedirection : top; slideoutdirection : bottom; durationin : 2500; durationout : 1500; ">
                Revolution and Layer Slider Included
            </span>

            <i class="fa fa-chevron-circle-right ls-s-1" style=" color: #fff; font-size: 24px; top:170px; left: 40px; slidedirection : left; slideoutdirection : top; durationin : 3500; durationout : 3500; "></i>

            <span class="ls-s-2" style=" color: #fff; font-weight: 200; font-size: 22px; top:170px; left: 70px; slidedirection : top; slideoutdirection : bottom; durationin : 3500; durationout : 2500; ">
                1000+ Glyphicons Pro and Font Awesome Icons
            </span>

            <i class="fa fa-chevron-circle-right ls-s-1" style=" color: #fff; font-size: 24px; top:220px; left: 40px; slidedirection : left; slideoutdirection : top; durationin : 4500; durationout : 3500; "></i>

            <span class="ls-s-2" style=" color: #fff; font-weight: 200; font-size: 22px; top:220px; left: 70px; slidedirection : top; slideoutdirection : bottom; durationin : 4500; durationout : 3500; ">
                Revolution and Layer Slider Included
            </span>

            <i class="fa fa-chevron-circle-right ls-s-1" style=" color: #fff; font-size: 24px; top:270px; left: 40px; slidedirection : left; slideoutdirection : top; durationin : 5500; durationout : 4500; "></i>

            <span class="ls-s-2" style=" color: #fff; font-weight: 200; font-size: 22px; top:270px; left: 70px; slidedirection : top; slideoutdirection : bottom; durationin : 5500; durationout : 4500; ">
                60+ Template Pages and 20+ Plugins Included
            </span>

            <a class="btn-u btn-u-blue ls-s1" href="#" style=" padding: 9px 20px; font-size:25px; top:340px; left: 40px; slidedirection : bottom; slideoutdirection : bottom; durationin : 6500; durationout : 3500; ">
                Twitter Bootstrap 3
            </a>

            <img src="assets/img/mockup/iphone1.png" alt="Slider Image" class="ls-s-1" style=" top:30px; left: 650px; slidedirection : right; slideoutdirection : bottom; durationin : 1500; durationout : 1500; ">
        </div>

        <!--Third Slide-->
        <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
            <img src="assets/img/sliders/layer/bg2.jpg" class="ls-bg" alt="Slide background">

            <span class="ls-s-1" style=" color: #777; line-height:45px; font-weight: 200; font-size: 35px; top:100px; left: 50px; slidedirection : top; slideoutdirection : bottom; durationin : 1000; durationout : 1000; ">
                Unify is Fully Responsive <br> Twitter Bootstrap 3 Template
            </span>

            <a class="btn-u btn-u-green ls-s-1" href="#" style=" padding: 9px 20px; font-size:25px; top:220px; left: 50px; slidedirection : bottom; slideoutdirection : bottom; durationin : 2000; durationout : 2000; ">
                Find Out More
            </a>

            <img src="assets/img/mockup/iphone.png" alt="Slider Image" class="ls-s-1" style=" top:30px; left: 670px; slidedirection : right; slideoutdirection : bottom; durationin : 3000; durationout : 3000; ">
        </div>
        <!--End Third Slide-->
    </div><!--/layer_slider-->
    <!--=== End Slider ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <!-- Service Blocks -->
        <div class="row margin-bottom-30">
            <div class="col-md-4 service-alternative">
                <div class="service">
                    <i class="fa fa-compress service-icon"></i>
                    <div class="desc">
                        <h4>Fully Responsive</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-alternative">
                <div class="service">
                    <i class="fa fa-cogs service-icon"></i>
                    <div class="desc">
                        <h4>HTML5 + CSS3</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 service-alternative">
                <div class="service">
                    <i class="fa fa-rocket service-icon"></i>
                    <div class="desc">
                        <h4>Launch Ready</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Blokcs -->

        <!-- Recent Works -->
        <div class="headline"><h2>Sản phẩm nổi bật</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img2.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project One</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img3.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Two</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img9.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Three</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive" src="assets/img/main/img10.jpg" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">read more +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#">Project Four</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recent Works -->

        <!-- Owl Clients v1 -->
        <div class="headline"><h2>Đối tác</h2></div>
        <div class="owl-clients-v1">
            <div class="item">
                <img src="assets/img/clients4/1.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/2.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/3.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/4.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/5.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/6.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/7.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/8.png" alt="">
            </div>
            <div class="item">
                <img src="assets/img/clients4/9.png" alt="">
            </div>
        </div>
        <!-- End Owl Clients v1 -->
    </div><!--/container-->
    <!-- End Content Part -->
<?php get_footer(); ?>