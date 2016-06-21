<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hoanggia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iSC0XE]F=[.)7zWH_|1)eKdS7q*1er 9&|nV?yfNT62KV}Y5Nr{OHu-c+4wBvj{q');
define('SECURE_AUTH_KEY',  'bZ4W!l8j6pV!~XiI.ey-m_*JGJ<`T{0GH!WM`sXUZ?h<%G1ZV+N244g;K##]JME@');
define('LOGGED_IN_KEY',    'M aHZ48x&nl^_]i0{wyRTf-6AU==j(~fp^n_40|D,kV1K3[uW=uIqiP7vls@|I*G');
define('NONCE_KEY',        'zx 5Efc=(R(tpms&@`Y)Fv@U=;5R47Yq9W}K)|!y0AR+Fa4/q%o W9_3X@tY 5Wm');
define('AUTH_SALT',        '1x<_1`W(>C#;IzbzQ+iV8ItV-O6RW[ w?qTbo/_@9}nQ>i0ydb-u~?Cwy4[enk3]');
define('SECURE_AUTH_SALT', '$Q7oi(V+0nt6gS 7IWlF$e~exx}2Xh4gV{w.=7?n~,gM|VKh@R%guS]o]kud5%Hf');
define('LOGGED_IN_SALT',   '19&=W!0@mfE1F4eMuCy#jSXsf-vcu.gHZMg{<YpTTT&#; T&b_6j.2+L%6sk**y>');
define('NONCE_SALT',       'uyXn;3HS.0gWc4<*7%b9~7Z*s$PQ[aDd/ZbX3krV}$1Qe|0y-cb4}:8M>0 8iH|k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
