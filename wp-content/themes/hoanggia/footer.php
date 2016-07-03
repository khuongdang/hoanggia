<?php
$my_postid = 61;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>
<!--=== Footer Version 1 ===-->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- Address -->
                <div class="col-md-12 map-img md-margin-bottom-20">
                    <div class="headline"><h2>Liên hệ</h2></div>
                    <?php echo $content;?>
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <?php echo date('Y');?>
                         &copy; All Rights Reserved.
                        <a href="#">Hoang Gia Glass Printing Company</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <ul class="footer-socials list-inline">
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/layer-slider/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/layer-slider/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/plugins/layer-slider.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        LayerSlider.initLayerSlider();
    });
</script>
<!--[if lt IE 9]>
<script src="<?php echo get_site_url(); ?>/assets/plugins/respond.js"></script>
<script src="<?php echo get_site_url(); ?>/assets/plugins/html5shiv.js"></script>
<script src="<?php echo get_site_url(); ?>/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 