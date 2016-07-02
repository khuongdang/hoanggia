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
        global $wpdb, $wp_query;
        if(isset($wp_query->query_vars['cat_id'])) {
            $cat_id = urldecode($wp_query->query_vars['cat_id']);
        }
        $category = get_category_info($cat_id);
        break;
    case "130":
        if(isset($wp_query->query_vars['id'])) {
            $id = urldecode($wp_query->query_vars['id']);
        }
        $product = get_image_detail($id);
        $product = $product[0];
        $title = $product->alttext;
        $page_title = $title;
        break;
}

?>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left"><?php echo $page_title;?><?php if($cat_id) {?><span> / </span><?php echo $category[0]->title;?><?php }?></h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?php echo get_site_url();?>">Trang chủ</a></li>
            <!--<li><a href="<?php /*echo $page_url;*/?>"><?php /*echo $page_title;*/?></a></li>-->
            <li class="active"><?php echo $page_title;?></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

