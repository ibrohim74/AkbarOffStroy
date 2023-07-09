<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'akbaroff' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wj|=,vx[L6{_o~@Ht}rU|PFfjPokuxI& G^f{oxk)/@jzQIr}#SKq%V>(D.Y@1y$' );
define( 'SECURE_AUTH_KEY',  '<8UWNzcd:=e[o_G5@JRa#~Yp s=~4rtPY`KD~7Gw, ] 5 lbf 1E%/[0v/T: 8>M' );
define( 'LOGGED_IN_KEY',    'G$;knu&M|*>v9r;i[)/DD:2CpbqSs%Lgj/0eN_*b1RRg@dvD*r|F+Z#%3[4#HxZ3' );
define( 'NONCE_KEY',        'xg* 8rEk;4MTG9S7*Me d(F?6-@@`/@V-s=P0Kb?gxit/%STzX~]p[7C=;DTNz&c' );
define( 'AUTH_SALT',        'Ze?!9`_5MdM:O~[FwrZ_7aW@NzR~|Cw}4kN/sA&yY`<K6D{i.|2Y6tD=9~+Py!/&' );
define( 'SECURE_AUTH_SALT', 'xfR/Z;jcs,Qe[!$ J3q+9elphi6Dc@A>T<JFfufP)3-ItY?EQ5v9PwRb7IOmam_+' );
define( 'LOGGED_IN_SALT',   '&wiRBaE!:5A!ci9g4!6)yDazVd;fcQoQUF@5wT4WU`)JuaVGq1N)bRDqrW&BB5f<' );
define( 'NONCE_SALT',       'c7#?YY:fv{QW?VfG@O@mc*_WiQfz`te3YDWXK>YtP)4+Doz2Y(bU|dP536rU=9cv' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
