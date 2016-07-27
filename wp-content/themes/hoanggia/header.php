<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Hoàng Gia Glass - Printing</title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0">
    <meta name="description" content="Công ty Nhân Hoàng Gia, glass, printing, gương trang trí, in ấn sản phẩm gương">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/headers/header-default.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/nivoslider/themes/default/default.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/nivoslider/nivo-slider.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/theme-colors/aqua.css" />
</head>
<body class="boxed-layout container">

<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_site_url(); ?>/assets/img/logo1-default.png" alt="Logo">
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
                    <!-- Menu -->
                    <?php
                    $menus = getMenuItems();
                    ?>
                    <?php foreach ($menus as $items) {
                        $title = $items->title;
                        $link  = $items->url;
                    ?>
                        <?php if ($items->ID == 54) {
                            $categories = get_categories_from_album();
                            ?>
                            <li class="dropdown">
                                <a href="<?php echo $link;?>" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $title;?>
                                </a>
                                <?php if($categories) { ?>
                                <ul class="dropdown-menu">
                                    <?php
                                    foreach ($categories as $items) {
                                        $category_title = $items['title'];
                                        ?>
                                    <li class="<?php echo $class;?>">
                                        <a href="<?php echo $link;?>?cat_id=<?php echo $items['id'];?>"><?php echo $category_title; ?></a>
                                    </li>
                                        <?php }?>
                                </ul>
                            <?php }?>
                            </li>
                            <?php } else {?>
                        <li class="">
                            <a href="<?php echo $link;?>">
                                <?php echo $title;?>
                            </a>
                        </li>
                            <?php } ?>
                    <?php }?>

                    <!--<li class="dropdown active">
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
                    </li>-->

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