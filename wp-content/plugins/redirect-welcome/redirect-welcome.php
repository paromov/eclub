<?php

/*
  Plugin Name: Redirect weicome
  Description: Перенаправление не авторизированных пользователей на страницу welcome
  Version: 1.0
  Author: Евгений
 */

function onlyregistered_func() {
    if (!is_page('welcome')) {
        if (!is_user_logged_in()) {
            wp_redirect(home_url('welcome'));
        }
    }
}

add_action('get_header', 'onlyregistered_func');
