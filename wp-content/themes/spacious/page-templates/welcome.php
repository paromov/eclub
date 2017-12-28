<?php
/**
 * Template Name: welcome
 *
 * Displays the Business Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php
        /**
         * This hook is important for wordpress plugins and other many things
         */
        wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="welcome">
            <h1>Добро пожаловать</h1>
            <a href="#" class="popmake-37">Вход</a>
            <br>
            <a href="#" class="popmake-41">Регистрация для мужчин</a>            
        </div>
    </body>
</html>
<?php get_footer(); ?>
