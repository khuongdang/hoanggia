<?php
/*
Template Name: Printting
*/
get_header();
global $wpdb, $wp_query;
require_once('mobile-detect.php');

if(isset($wp_query->query_vars['cat_id'])) {
    $cat_id = urldecode($wp_query->query_vars['cat_id']);
}

if ($wp_query->query_vars['page'] == 0) {
    unset ($wp_query->query_vars['page']);
}

$page = (int) (!isset($wp_query->query_vars['page']) ? 1 : $wp_query->query_vars['page']);
$limit = 12;
$startpoint = ($page * $limit) - $limit;

$catid = $cat_id;
if(empty($catid)){
    $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid order by RAND()  LIMIT {$startpoint}, {$limit}";
} else {
    if (empty($id)) {
        $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid where g.gid = $catid  LIMIT {$startpoint}, {$limit}";
    } else {
        $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid where g.gid = $catid and p.pid != $id  LIMIT {$startpoint}, {$limit}";
    }
}
$products = $wpdb->get_results($sql);
if(empty($catid)){
    $full_products = get_pictures();
} else {
    $full_products = get_pictures($catid);
}
$total_products = count($full_products);
$url = $_SERVER["REQUEST_URI"] . '&';
$detect = new Mobile_Detect();
?>
<link rel="stylesheet" href="<?php echo get_site_url();?>/assets/css/pages/portfolio-v1.css">
<link rel="stylesheet" href="<?php echo get_site_url();?>/assets/css/custom.css">
<link rel="stylesheet" href="<?php echo get_site_url();?>/assets/css/pagination/B_blue.css" type="text/css">
<!-- CSS Customization -->
<?php include_once 'breadcrums.php' ?>
<style>
    table, th, td {
        vertical-align: middle;
    }

</style>
<div class="container content-sm">
    <?php if ($detect->isMobile()) { ?>
        <?php foreach ($products as $index=>$items) {
            $title = $items->alttext;
            $image = '/'.str_replace('\\', '/', $items->path).'/'.$items->filename;
            $desc = $items->description;
            $link = get_page_link(130).'?id='.$items->pid;
            if($index%3 != 0){
                ?>
            <?php }?>
            <div class="col-md-4">
                <div class="view view-tenth">
                    <img class="img-responsive" src="<?php echo get_site_url().'/'.$image; ?>" alt="<?php echo $title; ?>" />
                    <div class="mask">
                        <h2><?php echo $title;?></h2>
                        <p><?php echo $desc;?></p>
                        <a href="<?php echo $link;?>" class="info">Chi tiết</a>
                    </div>
                </div>
            </div>
            <?php if($index%3 != 0){
                ?>

            <?php } ?>
        <?php }?>
    <?php } else { ?>
        <!-- desktop view -->
        <table>
            <?php foreach (array_chunk($products, 3) as $row) { ?>
                <tr>
                    <?php foreach ($row as $items) {
                        $title = $items->alttext;
                        $image = '/'.str_replace('\\', '/', $items->path).'/'.$items->filename;
                        $img_height = '';
                        $height = '';
                        $img_width = '';
                        $width = '';
                        $desc = $items->description;
                        $link = get_page_link(130).'?id='.$items->pid;
                        ?>
                        <td valign="top">
                            <div class="col-md-4">
                                <div class="view view-tenth">
                                    <img  class="img-responsive" src="<?php echo get_site_url().'/'.$image; ?>" alt="<?php echo $title; ?>" />
                                    <div class="mask">
                                        <h2><?php echo $title;?></h2>
                                        <p><?php echo $desc;?></p>
                                        <a href="<?php echo $link;?>" class="info">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    <?php }?>
    <div style="clear: both"></div>
    <div align="center">
        <?php echo pagination($total_products, 12, $page, $url); ?>
    </div>
</div><!--/container-->
<!--=== End Content Part ===-->
<?php get_footer(); ?>
