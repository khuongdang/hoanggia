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
<!-- CSS Customization -->
<?php include_once 'breadcrums.php' ?>
<div class="container content-sm">
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

</div><!--/container-->
<!--=== End Content Part ===-->
<?php get_footer(); ?>
