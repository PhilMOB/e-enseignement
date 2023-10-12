<?php
/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/
/** MySQL settings - You can get this info from your web host **/
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/app/www/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', $_SERVER['WORDPRESS_DB_NAME']);
/** MySQL database username */
define('DB_USER', $_SERVER['WORDPRESS_DB_USER']);
/** MySQL database password */
define('DB_PASSWORD', $_SERVER['WORDPRESS_DB_PASSWORD']);
/** MySQL hostname */
define('DB_HOST', $_SERVER['WORDPRESS_DB_HOST'] . ':' . '3306');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/** Disable WordPress file editor */
define( 'DISALLOW_FILE_EDIT', true );
define( 'COOKIEHASH', md5($_SERVER['WORDPRESS_DB_USER'] . 'secure cookies' .$_SERVER['WORDPRESS_DB_USER'] ) );	// Cookies hardening
define( 'WP_MEMORY_LIMIT', '256M' );
// Disable OP Cache mu-plugin feature
define('HIDE_CACHE_CLEAR',false);
// Disable SSO mu-plugin feature
define('HIDE_SSO_LINK',false);
// Raise Docket Cache max files
define('DOCKET_CACHE_MAXFILE', 100000);
/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'As{m0(ens77A|}sM_yV?aU5Q9iPAfaNOX^%_6ScX@;xeY{1]/drCMhkNcrh`G8lL');
define('SECURE_AUTH_KEY',  ', >/CdZge7$ehtAazVFp*YTIk;_T}WyOn8.WM.#:SRS.Gr]q.W?GSDv=rU#:~3nT');
define('LOGGED_IN_KEY',    'qDG~SP{XWq]4OBYD)$^uhr0B<*:Ys8-}%Jys2HZ$r~#D#z[,@A&X*v,I}xePvT#h');
define('NONCE_KEY',        'B_a=8S^Y}47D=psL_ptJ/^ba3CAw]sqV?W1oCKE|T(7|21bM}oE9RiGCgG$0rfwi');
define('AUTH_SALT',        'h1Y:xe%I?~o2h_dpl-6VG#I)aA+w{~Df{c&~=aOqJ0C{nmxqTL;r`KD#LT0_SXiG');
define('SECURE_AUTH_SALT', 'byW|21>E6M;YfAzy[|aH7^y?hm]`!3itrS2E|lyEj9Ssb(s9zn0GR8n->u]OG_7P');
define('LOGGED_IN_SALT',   'F!>ho.+ug1`%t:Wi[N0M%4+B9`;R`ddN>+62^d]**[JLESw7{:U1u.L4|O.7c:;+');
define('NONCE_SALT',       'dPG]%8Ny?:_n)2S(K-l~ZuS nc)4i2GBEpIFJL+K]:` ,t[06eX/@os]v5ccs>=F');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = '6qu_';
/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');
/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
$sapi_type = php_sapi_name();
if ( $sapi_type == 'cli' ) {
define( 'WP_DEBUG', false );
error_reporting(0); 
@ini_set('display_errors', 0);
}
// @ini_set('log_errors', 'On');
define( 'WPMU_PLUGIN_DIR', '/mu-plugin' );
define( 'DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/** change permisssions for plugin installation */
define("FS_METHOD","direct");
