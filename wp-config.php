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
define('DB_NAME', 'u257925500_unique');

/** Имя пользователя базы данных */
define('DB_USER', 'u257925500_root');

/** Пароль к базе данных */
define('DB_PASSWORD', 'Unique2022root!');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '3l!N(|3E/l<rR8|JXhoiM_TXmz7dTfT2D1aSG>a?Q#%I7wx3HSVTDgR8ewJ:EPLF');
define('SECURE_AUTH_KEY',  '&4*fG2r$J3)=9U+?l{)x 2v#-U/s{Z[.:H7,2~@F=b=bIHj4`yKq6J: 2 ~ztwV3');
define('LOGGED_IN_KEY',    'S(E<Zg)}VDb+HEco%(18#;Ev&yj@Y=>og3%w%d@G;jg@%RYCy7(X9UWOdh,#V`}|');
define('NONCE_KEY',        'UNw#4s;`u3dOKL6I1c59%hH-`AHMXPpj&q#a/*Zpj6XGZzU]jVw^M7r4/IzZ^hiF');
define('AUTH_SALT',        '3[Z~BLj!-HI?`awx^PqTH=C69(;%iDuoX=;-~3:_<$yhyIiR;l`3Jkw~=zs G>Fr');
define('SECURE_AUTH_SALT', 'AQI1c`ius8txF(lX(,C.]vS`;~&ZZOC#P1z/)P|.O8sT)]?i8r1A%8zmSe%}E^<}');
define('LOGGED_IN_SALT',   'k37Pd5Acou00rs*IN(fE:?W<BS.kPxLdJ[4$?K!YGhkwreYVzh;jw&>WE~%Rd)i0');
define('NONCE_SALT',       'CCLZ&]Ul[~B76~5zX+f=W><ZsP1w_fyH38Q368.SewEBnc_aQNH4<xT>id0nUR:d');

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
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
   define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
