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
    if(isset($_POST['submit'])
		&& check_admin_referer('easy_sky_setting', '_easy_sky_setting_nonce')
		){
		$save = array();
        $save['email'] = $_POST['email'];
        $save['mouse'] = $_POST['mouse'];
        $save['keyboard'] = $_POST['keyboard'];
        update_option('Nagomi_EasySky', $save);
    }
	$setting = get_option('Nagomi_EasySky', array('email' => '', 'mouse' => '', 'keyboard' => ''));
	$email = $setting['email'];
	$mouse = $setting['mouse'];
	$keyboard = $setting['keyboard'];

    include __DIR__ . '/views/v_easy_sky_setting.php';
}

