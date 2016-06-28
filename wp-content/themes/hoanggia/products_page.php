<?php
/*
Template Name: Products
*/
get_header();
global $wpdb, $wp_query;

if(isset($wp_query->query_vars['cat_id'])) {
    $cat_id = urldecode($wp_query->query_vars['cat_id']);
}

if (empty($cat_id)) {
    $products = get_pictures();
} else {
    $products = get_pictures($cat_id);
}
?>
<link rel="stylesheet" href="<?php echo get_site_url();?>/assets/css/pages/portfolio-v1.css">
<?php include_once 'breadcrums.php' ?>
<div class="container content-sm">
    
    <div class="row">
        <div class="col-md-4">
            <div class="view view-tenth">
                <img class="img-responsive" src="<?php echo get_site_url(); ?>/assets/img/main/img6.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_old_item.html" class="info">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="view view-tenth">
                <img class="img-responsive" src="<?php echo get_site_url(); ?>/assets/img/main/img5.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_old_item.html" class="info">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="view view-tenth">
                <img class="img-responsive" src="<?php echo get_site_url(); ?>/assets/img/main/img4.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_old_item.html" class="info">Read More</a>
                </div>
            </div>
        </div>
    </div><!--/row-->

    <div class="row">
        <div class="col-md-4">
            <div class="view view-tenth no-margin-bottom">
                <img class="img-responsive" src="<?php echo get_site_url(); ?>/assets/img/main/img3.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_old_item.html" class="info">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="view view-tenth no-margin-bottom">
                <img class="img-responsive" src="<?php echo get_site_url(); ?>/assets/img/main/img2.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_old_item.html" class="info">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="view view-tenth no-margin-bottom">
                <img class="img-responsive" src="<?php echo get_site_url(); ?>/assets/img/main/img1.jpg" alt="" />
                <div class="mask">
                    <h2>Portfolio Item</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="portfolio_old_item.html" class="info">Read More</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->
<?php get_footer(); ?>
