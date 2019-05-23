<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_8');

/** MySQL database username */
define('DB_USER', 'wordpress_8');

/** MySQL database password */
define('DB_PASSWORD', 't5Ew#1jR0X');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://www.deltadentalidblog.com');
define('WP_SITEURL','http://www.deltadentalidblog.com');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7*U3hUJRRd(ah2*t8ZfFS(xHpuqQUpeZ@R5M4G@VJ&kq4@E8kC6XX1xcyHb!E6Kp');
define('SECURE_AUTH_KEY',  'wgj7kHh2WtlZ95&QYxuQ0r29R!6@u4&fwAz4Hx(fTHmgdFw41DFbC(4RtL3!cL&f');
define('LOGGED_IN_KEY',    '9kUskQT%6#9&jxqSQv2WIGwMtGq1u^%1a)iGh8uOf%yphHbnbbxN%nW4lh36jyGm');
define('NONCE_KEY',        '8!L!A(ddARQOEjD1Iu9HZ%s0H@(Ln6BjUAFwjDKkZWudbmQHxXosbewhJ8U5rXzI');
define('AUTH_SALT',        '@(*4R*kS6Of1JWj(*NP3#@tl5Fta8G1BlJM6q%)s!w7smaU7rgtVwlhCLOWwf0Jg');
define('SECURE_AUTH_SALT', 'fsEDFx5r#xECfJG6MOkRldDn3q9*1D$m6foI*V(9ycnzyIUadkFytNr(sU1yqW9p');
define('LOGGED_IN_SALT',   'Tlf9jw1%7iRNDqv!TnyTWYj8^82cXlTRW7UINvDnHl#di&Zmyk%bV%%ralpUQc2u');
define('NONCE_SALT',       'cedQ%YIvrHnS7#bzADeFgaH3^N2B0X!MQ0hBlJu9V8s47Jf9eCh9vyJ5Hi17Kv7A');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
