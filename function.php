<?php 
/** Ẩn tài khoản quản trị viên cụ thể khỏi danh sách người dùng Wordpress */
add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
  global $current_user;
  $username = $current_user->user_login;
/** thay hiddenuser bằng tên user muốn ẩn */
  if ($username != 'hiddenuser') { 
    global $wpdb;
    $user_search->query_where = str_replace('WHERE 1=1',"WHERE 1=1 AND {$wpdb->users}.user_login != 'hiddenuser'",$user_search->query_where);
  }
}

/** Ẩn tất cả thông báo trong wp-admin */
add_action('admin_head', 'wpcb_disable_notice'); 
function wpcb_disable_notice() { ?> <style> .notice { display: none;} </style> <?php }

/** Ẩn menu dashboard. */
add_action( 'admin_init', 'smar_remove_menu_pages' );
function smar_remove_menu_pages() {
    remove_menu_page( 'elementor' );
    remove_menu_page( 'edit.php?post_type=elementor_library' );
}

/** Ẩn plugins trong danh sách plugins */

add_filter( 'all_plugins', 'hide_plugins');
function hide_plugins($plugins)
{
        if(is_plugin_active('elementor-pro/elementor-pro.php')) {unset( $plugins['elementor-pro/elementor-pro.php'] );}
        if(is_plugin_active('elementskit-lite/elementskit-lite.php')) {unset( $plugins['elementskit-lite/elementskit-lite.php'] );}
        return $plugins;
}
?>
