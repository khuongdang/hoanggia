<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup ()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width))
        $content_width = 640;
    register_nav_menus(array('main-menu' => __('Main Menu', 'blankslate')));
}

add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts ()
{
    wp_enqueue_script('jquery');
}

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script ()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'blankslate_title');
function blankslate_title ($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'blankslate_filter_wp_title');
function blankslate_filter_wp_title ($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init ()
{
    register_sidebar(array('name' => __('Sidebar Widget Area', 'blankslate'), 'id' => 'primary-widget-area', 'before_widget' => '<li id="%1$s" class="widget-container %2$s">', 'after_widget' => "</li>", 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>',));
}

function blankslate_custom_pings ($comment)
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}

add_filter('get_comments_number', 'blankslate_comments_number');
function blankslate_comments_number ($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

if (!is_admin()) {
    wp_deregister_script('jquery');
}

/*
 * Hide Nextgen styles and scripts
 */
if (!is_admin()) {
    // goodbye NextGen junk
    define('NGG_SKIP_LOAD_SCRIPTS', true);
    function nextgen_styles() {
        wp_deregister_style('NextGEN');
    }
    add_action('wp_print_styles', 'nextgen_styles', 100);
}

function wpdocs_dequeue_script() {
    wp_dequeue_script( 'jquery' );
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );

function getMenuItems($menu_id = 2) {
    $menu = wp_get_nav_menu_items($menu_id, array());
    return $menu;
}

function get_pictures($catid = '', $id = ''){
    global $wpdb;
    if(empty($catid)){
        $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid order by RAND()";
    } else {
        if (empty($id)) {
            $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid where g.gid = $catid";
        } else {
            $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid where g.gid = $catid and p.pid != $id";
        }
    }

    $items = $wpdb->get_results($sql);

    return $items;
}

function get_pictures_cat($catid = ''){
    global $wpdb;
    if(empty($catid)){
        $sql = "SELECT * FROM `hg_ngg_gallery` AS g order by g.gid";
    } else {
        $sql = "SELECT * FROM `hg_ngg_gallery` AS g where g.id = $catid order by g.gid ";
    }
    $items = $wpdb->get_results($sql);
    return $items;
}

function get_pictures_in_galleries($gallery, $feature = false){
    global $wpdb;
    $items = array();
    if($gallery) {
        $more = '';
        if ($feature == true) {
            $more = 'WHERE p.feature = 1';
        }
        $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` IN ($gallery) $more 
            GROUP BY p.`filename` order by RAND() ";
        $items = $wpdb->get_results($sql);
    }
    return $items;
}

function get_categories_from_album($album_id) {
    global $nggdb;
    $galleries = array();

    $album = $nggdb->find_album($album_id);

    foreach( $album->gallery_ids as $galleryid ){
        $gallery = $nggdb->find_gallery($galleryid);
        $galleries[$galleryid]['title'] = $gallery->title;
        $galleries[$galleryid]['url'] = get_bloginfo('url') . '/portfolio/?album=all&gallery=' . $galleryid;
        $galleries[$galleryid]['id'] = $gallery->gid;
    }
    return $galleries;
}

function get_images_from_album($album_id, $feature = false) {
    global $nggdb;
    $myalbum = nggdb::find_album( $album_id );
    $mygals = $myalbum->gallery_ids;
    $galleryIds = implode(',', $mygals);
    $images = get_pictures_in_galleries($galleryIds, $feature);
    return $images;
}

function get_category_info ($cat_id) {
    global $wpdb;
    $items = array();
    if($cat_id) {
        $sql = "SELECT * FROM `hg_ngg_gallery` WHERE gid = $cat_id";
        $items = $wpdb->get_results($sql);
    }
    return $items;
}

function get_image_detail ($id) {
    if ($id) {
        global $wpdb;
        $items = array();
        $sql = "SELECT * FROM `hg_ngg_pictures` AS p INNER JOIN `hg_ngg_gallery` AS g ON p.`galleryid` = g.gid WHERE p.pid = $id";
        $items = $wpdb->get_results($sql);
        return $items;
    }
}

add_filter( 'query_vars', 'wpa5413_query_vars' );
function wpa5413_query_vars( $query_vars )
{
    $query_vars[] = 'cat_id';
    $query_vars[] = 'cat_parent_id';
    $query_vars[] = 'id';
    return $query_vars;
}

function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

function pagination($total, $per_page = 10,$page = 1, $url = '?'){
    $adjacents = 2;

    $page = ($page == 0 ? 1 : $page);
    $start = ($page - 1) * $per_page;

    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total/$per_page);
    $lpm1 = $lastpage - 1;

    $pagination = "";
    if($lastpage > 1)
    {
        $pagination .= "<ul class='pagination'>";
        $pagination .= "<div class='details'>Page $page of $lastpage</div>";
        if ($lastpage < 7 + ($adjacents * 2))
        {
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li><a class='current'>$counter</a></li>";
                else
                    $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
            {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
                }
               // $pagination.= "<li class='dot'>...</li>";
                $pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";
            }
            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<li><a href='{$url}page=1'>1</a></li>";
                $pagination.= "<li><a href='{$url}page=2'>2</a></li>";
               // $pagination.= "<li class='dot'>...</li>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
                }
                //$pagination.= "<li class='dot'>..</li>";
                $pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";
            }
            else
            {
                $pagination.= "<li><a href='{$url}page=1'>1</a></li>";
                $pagination.= "<li><a href='{$url}page=2'>2</a></li>";
               // $pagination.= "<li class='dot'>..</li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";
                }
            }
        }

        if ($page < $counter - 1){
            $pagination.= "<li><a href='{$url}page=$next'>Next</a></li>";
            $pagination.= "<li><a href='{$url}page=$lastpage'>Last</a></li>";
        }else{
            //$pagination.= "<li><a class='current'>Next</a></li>";
            $pagination.= "<li><a class='current'>Last</a></li>";
        }
        $pagination.= "</ul>\n";
    }


    return $pagination;
}
function getAlbumInfo ($album_id)
{
    if (isset($album_id) && !empty($album_id)) {
        global $nggdb;
        $myalbum = nggdb::find_album( $album_id );
    }
    return $myalbum;
}

function checkAlbumHasGallery($album_id)
{
    if (isset($album_id) && !empty($album_id)) {
        global $nggdb;
        $album = nggdb::find_album( $album_id );
        foreach( $album->gallery_ids as $galleryid ){
            $gallery = $nggdb->find_gallery($galleryid);
            $galleries[$galleryid]['id'] = $gallery->gid;
        }
        if (isset($galleries)  && !empty($galleries)) {
            return true;
        }
    }
    return false;
}