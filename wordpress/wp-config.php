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
 * * Настройки MySQL
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
define( 'DB_NAME', 'spystealth-blog' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123456789' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         ')}72Al+5xs9-lX:zXq)EzY|F1}5T+Rxwfqry;Zo2=6Ab*YA/>rX}x+L LAs-gVLm' );
define( 'SECURE_AUTH_KEY',  'ff/U_Du{{.z*}(e*h1JirxZ`1,l.O&K**[WN-lea-Wi8[)3MOT$TFBWAs]OvnTr9' );
define( 'LOGGED_IN_KEY',    '@W)(Q]p*kZY<c-8vn?xB8,99<?z$&G?S];,dn2eYa(]B<(co)T~qLTkx8J}W5:-D' );
define( 'NONCE_KEY',        'J,/jeB=,,M&}9q<Z_wU.[EQA%8)8#P<et(aZZaFS~)ObUPmTm ,Mv9Pmwch{$lq)' );
define( 'AUTH_SALT',        '{[lEja$Kb/fhDim0Q_6y799a^!4R[?<-L.cV!aO--{;6ov=|OLO9Nv8z#Ssk<Gq$' );
define( 'SECURE_AUTH_SALT', 'Luj().Ef;t&,|k@OiET|&LH|*E-cHkA<_{h1k/F|&<(BEdazx@g!Jy~%g{g%dhjj' );
define( 'LOGGED_IN_SALT',   'K=+D$?Tj#K]f8IUMqOktt)r,U?4p4V~Xyc2|ey`S/q_O]$|^2*6?<<4?9S;x^gPP' );
define( 'NONCE_SALT',       'gjg+GH#~`6K&=q(U!:,J>@)~7Dg,>uUH+?))~iv0+Q7[KU1=4uR,7*6SN-UZBE8U' );

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

