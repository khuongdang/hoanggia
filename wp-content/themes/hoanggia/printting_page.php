<?php
/*
Template Name: Printting
*/
get_header();
$my_postid = 41;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
?>
<?php include_once 'breadcrums.php' ?>
<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-40">
        <div class="col-md-12 md-margin-bottom-40">
            <?php echo wpautop($content); ?>
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
<?php get_footer();?>
