<?php get_header();
$slider = get_pictures(2);
$feature_products = get_images_from_album(1);
?>
    <!--=== Slider ===-->
    <div id="layerslider" style="width: 100%; height: 500px; margin: 0px auto;">
<?php foreach ($slider as $items) {
    $title = $items->alttext;
    $image = '/'.str_replace('\\', '/', $items->path).'/'.$items->filename;
    ?>
        <div class="ls-slide" data-ls="slidedelay:4500;transition2d:25;">
            <img src="<?php echo $image;?>" class="ls-bg" alt="Slide background"/>
        </div>
<?php }?>
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
            <?php foreach ($feature_products as $product) {
                $title = $product->alttext;
                $image = '/'.str_replace('\\', '/', $product->path).'/'.$product->filename;
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img title="<?php echo $title;?>" class="img-responsive" src="<?php echo $image;?>" alt="" />
                        </div>
                        <a class="btn-more hover-effect" href="#">Chi tiết +</a>
                    </div>
                    <div class="caption">
                        <h3><a class="hover-effect" href="#"><?php echo $title;?></a></h3>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- End Recent Works -->

       <?php include_once 'clients.php'; ?>
    </div><!--/container-->
    <!-- End Content Part -->
<?php get_footer(); ?>