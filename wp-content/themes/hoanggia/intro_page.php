<?php
/*
Template Name: Intro
*/
get_header();
$my_postid = 40;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>

<?php include_once 'breadcrums.php' ?>
<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-40">
        <div class="col-md-6 md-margin-bottom-40">
            <?php echo $content;?>

            <!-- Blockquotes -->
            <!--<blockquote class="hero-unify">
                <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.</p>
                <small>CEO Jack Bour</small>
            </blockquote>-->
        </div>

        <div class="col-md-6 md-margin-bottom-40">
            <div class="responsive-video">
                <<iframe width="560" height="315" src="https://www.youtube.com/embed/yWaUDvg9T2o" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div><!--/row-->

    <!-- Owl Clients v1 -->
    <div class="headline"><h2>Khách hàng</h2></div>
    <div class="owl-clients-v1">
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/1.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/2.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/3.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/4.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/5.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/6.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/7.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/8.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/9.png" alt="">
        </div>
    </div>
    <!-- End Owl Clients v1 -->
</div><!--/container-->
<!--=== End Content Part ===-->

<?php get_footer(); ?>
