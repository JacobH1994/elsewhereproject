<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'elsewher_wp');

/** MySQL database username */
define('DB_USER', 'elsewher_blog');

/** MySQL database password */
define('DB_PASSWORD', 'flowerofLife1');

/** MySQL hostname */
define('DB_HOST', '10.169.0.39');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4JU)#)hB+t<J.~EOe/gqFR=!5Wcz|Vg9A{@(L(a?[_IfKy;,4VKU2|kHgfhs{0;)');
define('SECURE_AUTH_KEY',  'T``i~v*Y54T;vI^D@i-:`zZ^oYdYTKTgI]L0EkMOfcHS5Xj0S^5R?K-xQ0/5bId:');
define('LOGGED_IN_KEY',    'w:q5ZfyR{I:o-J&356@@Vi:o<L+`1| JuaeJGD<@<zEd^Tk`eVh8a}!JTa]4<t9[');
define('NONCE_KEY',        '1H)e&F[D.}-kF &$1boa!pg-K4Jwo.qLi$I7/3/JTi9ur+W*jmB6lLLc/buxwk`7');
define('AUTH_SALT',        'Dq}.Oh?&kxge9 [Z^~t9}MqtJknDWX677jh?Y9+.>*X4{-D>Tts2vgdyai[Y%Wcs');
define('SECURE_AUTH_SALT', '%y9}uv_a{xd_Nq@W!9mC0+* RH)xjFvor+Z>lnf! VylJt.8`W)VCv!bX(x|JkHa');
define('LOGGED_IN_SALT',   'u[+UEeq^xUqHi:loE+6nJ_.4>ajo+t+: $P+DoG*&4tOlO,S-ruI.=*;yZ]_v1gK');
define('NONCE_SALT',       'Rb_jHss7j:PpKw}@aU^V,N7zg&.+8Peuq|$c(BQ1Vtcu4[9$J-=];q2]_n(H+Wr]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
