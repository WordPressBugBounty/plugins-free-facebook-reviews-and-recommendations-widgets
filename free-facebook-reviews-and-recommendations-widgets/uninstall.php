<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_facebook = new TrustindexPlugin_facebook("facebook", __FILE__, "13.0", "Widgets for Reviews & Recommendations", "Facebook");
$trustindex_pm_facebook->uninstall();
?>