<?php
/**
 * Created by PhpStorm.
 * User: Kent Dang
 * Date: 26/06/2016
 * Time: 1:58 CH
 */
$page_object = get_queried_object();

$page_id     = get_queried_object_id();
$page_title =  $page_object->post_title;
$page_url = get_page_link($page_id);

switch ($page_id) {
    case "52":
        break;
}

?>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left"><?php echo $page_title;?></h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?php echo get_site_url();?>">Trang chủ</a></li>
            <!--<li><a href="<?php /*echo $page_url;*/?>"><?php /*echo $page_title;*/?></a></li>-->
            <li class="active"><?php echo $page_title;?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

