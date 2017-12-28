<?php

/*
  Plugin Name: User data
  Description: Выводит информацию о пользователе
  Version: 1.0
  Author: Евгений
 */

//function user_info() {
   // global $wpdb;
   // $user_info = $wpdb->get_results("SELECT value FROM wp_bp_xprofile_data WHERE field_id = '2' AND user_id='1'");
   // $user_name = $user_info[0]->value;
    //echo $user_name;
    
    
//}

function user_info() {
$user = get_userdata(3);
   $user_sex = $user -> user_url;
   $user_sex = substr("$user_sex", 6, 3);
   echo $user_sex[1];
}
add_action('get_header', 'user_info');