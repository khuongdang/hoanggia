<?php
/**
 * Created by PhpStorm.
 * User: Kent Dang
 * Date: 26/06/2016
 * Time: 1:58 CH
 */
$slider = get_pictures(5);

?>
<!-- Owl Clients v1 -->
<div class="headline"><h2>Đối tác</h2></div>
<div class="owl-clients-v1">
    <?php foreach ($slider as $items) {
        $title = $items->alttext;
        $image = '/'.str_replace('\\', '/', $items->path).'/'.$items->filename;
        ?>
    <div class="item">
        <img src="<?php echo get_site_url().'/'.$image; ?>" alt="<?php echo $title;?>">
    </div>
    <?php }?>
</div>
<!-- End Owl Clients v1 -->

