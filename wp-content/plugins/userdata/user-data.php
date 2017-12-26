<?php

/*
  Plugin Name: User data
  Description: Выводит информацию о пользователе
  Version: 1.0
  Author: Евгений
 */

function user_info() {
    global $wpdb;
    $user_info = $wpdb->get_results("SELECT value FROM wp_bp_xprofile_data WHERE field_id = '2' AND user_id='1'");
    $user_name = $user_info[0]->value;
    echo $user_name;
}
add_shortcode('user_name', 'user_info');