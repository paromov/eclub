<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'eclub');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gG{,1D<Jv!Z9Avse}_.H/s*7.2+8_+vr<Yj7CP{/#reAT>4r[LGvXz)yhyva1LJ)');
define('SECURE_AUTH_KEY',  '8zPXV`(YHD|%IQ~$E-%f<iRIVH>^%Q}u7#`Js`}JW,m?~c]baOB4u}Y84?8fQlM!');
define('LOGGED_IN_KEY',    'IhV3?,2Vw[IZB UsZOv &M!-7xZC@tOkMRT2D})9Ai7._,obXW4BJ#=yGmx:*V*U');
define('NONCE_KEY',        '<+QC!vs_]_D9X!#R%.<[V2zVOL4|^+HlBS$8</y61^4$JZcg{5C5b&c])-,ITCcn');
define('AUTH_SALT',        'v.f:m}roCGwygZzYi+JB pIXgcI{](laU,tWkrKCt^Y%A~6> x7$pCxKb)RmC6/_');
define('SECURE_AUTH_SALT', '0t&>O6:joE#hK?exX{k(&DzQ=l>>SB=),BE<k{~|ew8Y|8Y_FKTGP|O@=Cn7rIN=');
define('LOGGED_IN_SALT',   ' Dw;=F*n:]C|(x$5eJ0nD7no,y`+|<e3eNL 72.N7WV/MflhoRCc]AAkoVB]2]=t');
define('NONCE_SALT',       'bfueCw^P^YWt7<hE9]0]B@M<&6.HTkNK~a0#PC$r#h@@o@Ed_o*4o)^|5$]f&kR ');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
