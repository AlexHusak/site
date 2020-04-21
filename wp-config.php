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
define( 'DB_NAME', 'site' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P^{vTI1@AsG?j2UR$zOQ{2kM~ OV>8W[+w`H J{V<7-xVm7sl9eh.j/j_nu2.99r');
	define('SECURE_AUTH_KEY',  'SDku:0iz6IUOZY+|92s| T<+}7<-phl4K>-do>KP2 _]<-daq}2F4Be2[Jvt;j@M');
	define('LOGGED_IN_KEY',    '+?2My]eJ:eM7QrH_;rAihm`O!<O+bX~`9_B*Gxau9R:yd7_$l+e(0kwLYjqz_d|W');
	define('NONCE_KEY',        'iQK^hPk|we{[&J+7E+RhJP4sIPF!,ND{(dU:j[ERX~|/>s`8~xMZ3(5rDV.P.pW(');
	define('AUTH_SALT',        'Tqa iPqZzi@;a)_,M$chh3|MD$u2SQk28.SiX%^mbAiNgI3=~NB*:YkX+?6VS2Y ');
	define('SECURE_AUTH_SALT', 'NMe5Dxh|m4`f8`->ec8yhSsn[]vk8+Ps+v>x,h-$0^I+-$491>NLXJ5.b9N0@VVh');
	define('LOGGED_IN_SALT',   'ykcS8@zdepu8h`bS!u_PY*7N;27+unvjJXv%*j?H;=]kJ6+Gv*2^w^0|*<(~O0Q~');
	define('NONCE_SALT',       ',tz2#E<6/_Xv4&[o{l8r~-cC-|KnDx7;zsSnc_TY#|)s(M6s|{B}!_-aF|wvVQTD');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
