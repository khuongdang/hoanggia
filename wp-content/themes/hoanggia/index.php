<?php get_header();
$slider = get_pictures(2);
$feature_products = get_images_from_album(4, true);

$my_postid = 138;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$hot_content = str_replace(']]>', ']]&gt;', $content);
require_once('mobile-detect.php');
$mobile_detect = new Mobile_Detect();
?>
<?php if (!$mobile_detect->isMobile() && !$mobile_detect->isTablet()) { ?>
    <style>
        @media (min-width: 992px) {
            .col-md-4 {
                width: 33.33333333%;
            }
        }
    </style>
<?php }?>
    <!--=== Slider ===-->

    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
<?php foreach ($slider as $items) {
    $title = $items->alttext;
    $image = '/'.str_replace('\\', '/', $items->path).'/'.$items->filename;
    ?>
            <img src="<?php echo $image;?>" data-thumb="<?php echo $image;?>" alt="" />
<?php }?>
<!--            <img src="images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />-->
<!--            <img src="images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />-->
        </div>
<!--        <div id="htmlcaption" class="nivo-html-caption">-->
<!--            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.-->
<!--        </div>-->
    </div>

    <!--/layer_slider-->
    <!--=== End Slider ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <!-- Service Blocks -->
        <div class="row margin-bottom-30">
            <?php echo $hot_content; ?>
        </div>
        <!-- End Service Blokcs -->
        <?php if ($feature_products) { ?>
        <!-- Recent Works -->
        <div class="headline"><h2>Sản phẩm nổi bật</h2></div>
        <div class="row margin-bottom-20">
            <?php foreach ($feature_products as $product) {
                $title = $product->alttext;
                $image = '/'.str_replace('\\', '/', $product->path).'/'.$product->filename;
                $desc = $product->description;
                $link = get_page_link(130).'?id='.$product->pid;
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img title="<?php echo $title;?>" class="img-responsive" src="<?php echo $image;?>" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="<?php echo $link;?>">Chi tiết +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="<?php echo $link;?>"><?php echo $title;?></a></h3>
                        <p><?php echo $desc;?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- End Recent Works -->
    <?php } ?>

       <?php include_once 'clients.php'; ?>
    </div><!--/container-->
    <!-- End Content Part -->
<?php get_footer(); ?>