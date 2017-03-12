<?php
/**
 * Plugin Name:     easy-sky
 * Plugin URI:      プラグインのURLを記述してください
 * Description:     プラグインの説明です
 * Author:          作者名です
 * Author URI:      作者のURLを記述してください
 * Version:         バージョンを書いてください
 */

if(is_admin()){
	add_action('admin_menu', 'easy_sky_add_menu');
}
function easy_sky_add_menu(){
	add_menu_page('EasySky設定画面', 'EasySky', 'administrator', 'easy_sky_setting', 'easy_sky_setting');
}
function easy_sky_setting(){
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $mouse = $_POST['mouse'];
        update_option('Nagomi_EasySky_email', $email);
        update_option('Nagomi_EasySky_mouse', $mouse);
    }
	$email = get_option('Nagomi_EasySky_email');
	$mouse = get_option('Nagomi_EasySky_mouse');

    include __DIR__ . '/views/v_easy_sky_setting.php';
}

