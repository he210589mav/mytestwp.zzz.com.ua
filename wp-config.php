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
define( 'DB_NAME', 'matskiv' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'matskiv' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Xsander1xsander' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mysql.zzz.com.ua' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'y~X|jdG)|Cl3fc~LP},7<?LT6G*_!vDDG5i1P;/Zuedqt30KYSuqwtgmxjKt^V`,' );
define( 'SECURE_AUTH_KEY',  'a vG*gO:OV!&ISu(Rj0}C^&AS>=YX7f86=8ItY;cdDu$Ee@$I#-RBtw4PN`qcL_i' );
define( 'LOGGED_IN_KEY',    'xtGDx$I9a!rf[L._:fWHCtjw!%nTFB^]!P8NIEx4j6M?#;q -WVN,+(O<re&ulO6' );
define( 'NONCE_KEY',        'DL|,x%UHx~,5p6p0k$Md;1$a<Ne?FLIIX*wl]#jd:Z7]#fASzov^hV0I)omn7~a_' );
define( 'AUTH_SALT',        'fDM`t[&nH=^-ImJ0^BKzQWf<NY;E,|?3u^aV?vXj7T^[})wkrepn>8;5cg0}_C4I' );
define( 'SECURE_AUTH_SALT', 'bAdYzS}FUTx7PWk(@b#KE:-y+EkTHe`nJ t9JxatT549~9evLRXk.(UP_,}`L2p`' );
define( 'LOGGED_IN_SALT',   'A5MsZ=q]O=+y8SOvKr#;W9?yFL6Lg<wgs?O1+3Hm3BHbgy^@Y^=%r&Jda0=S@#j(' );
define( 'NONCE_SALT',       'Pr6ur$x_v*D`g4*#KM2@2;?,n<i(9I%3!,9l9EVWI{c!!n$91GQLU;yCCq_<TDae' );

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
