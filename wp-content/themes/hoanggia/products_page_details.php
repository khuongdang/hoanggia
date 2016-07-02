<?php
/*
Template Name: Products Details
*/
get_header();
global $wpdb, $wp_query;

if(isset($wp_query->query_vars['id'])) {
    $id = urldecode($wp_query->query_vars['id']);
}
$product = get_image_detail($id);
$product = $product[0];
$title = $product->alttext;
$image = '/'.str_replace('\\', '/', $product->path).'/'.$product->filename;
$desc = $product->description;

?>
<link rel="stylesheet" href="<?php echo get_site_url();?>/assets/css/pages/portfolio-v1.css">
<?php include_once 'breadcrums.php' ?>
<div class="container content">
    <div class="row portfolio-item margin-bottom-50">
        <!-- Carousel -->
        <div class="col-md-7">
            <div class="carousel slide carousel-v1" id="myCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="<?php echo get_site_url().'/'.$image; ?>">
                        <!--<div class="carousel-caption">
                            <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                        </div>-->
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Carousel -->

        <!-- Content Info -->
        <div class="col-md-5">
            <h2><?php echo $title;?></h2>
            <p><?php echo $desc;?></p>
            <ul class="list-unstyled">
                <li><h3>Liên hệ</h3></li>
                <li><i class="fa fa-user color-green"></i> Nhân Hoàng Gia</li>
                <li><i class="fa fa-phone color-green"></i> 0913 925 223</li>
                <li><i class="fa fa-mail-forward color-green"></i> hoanggiaglass@yahoo.com.vn</li>
            </ul>
            <!--<a href="#" class="btn-u btn-u-large">VISIT THE PROJECT</a>-->
        </div>
        <!-- End Content Info -->
    </div><!--/row-->

    <div class="tag-box tag-box-v2">
        <p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>
    </div>

    <div class="margin-bottom-20 clearfix"></div>

    <!-- Recent Works -->
    <?php
    $other_products = get_pictures($product->galleryid, $id);
    ?>
    <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
        <div class="headline"><h2 class="pull-left">Sản phẩm liên quan</h2>
            <div class="owl-navigation">
                <div class="customNavigation">
                    <a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
                    <a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
                </div>
            </div><!--/navigation-->
        </div>

        <div class="owl-recent-works-v1">
            <?php foreach ($other_products as $items) {
                $title = $items->alttext;
                $image = '/'.str_replace('\\', '/', $items->path).'/'.$items->filename;
                $desc = $items->description;
                $link = get_page_link(130).'?id='.$items->pid;
                ?>
            <div class="item">
                <a href="<?php echo $link;?>">
                    <em class="overflow-hidden">
                        <img class="img-responsive" src="<?php echo get_site_url().'/'.$image; ?>" alt="<?php echo $title;?>">
                    </em>
                        <span>
                            <strong><?php echo $title;?></strong>
                            <i><?php echo $desc;?></i>
                        </span>
                </a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- End Recent Works -->
</div><!--/container-->

<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/plugins/owl-recent-works.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        OwlRecentWorks.initOwlRecentWorksV1();
         jQuery('.carousel-arrow').hide();
    });
</script>
