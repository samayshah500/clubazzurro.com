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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3q~Hg.!Otp>pVk3>vsVjkj]R!5supT0FtK7%B+~^3G{4s(C7mnA(kGiZzSgH4K*6' );
define( 'SECURE_AUTH_KEY',  '#DMK47)dGee1s)wrTMdIi?5Xy-HPX{!V]e@24m+m>BOA7&+:_fT4x7b2TMW}8%6J' );
define( 'LOGGED_IN_KEY',    '#^^xjW#aO5!dv-hFS8((*Lr>>mUhPIcLrv_^TW~Ik (p?woZzl]&rm,#NOtQX{Xn' );
define( 'NONCE_KEY',        '((]3}MQSPoRmYJO)Cuf9X!]d4[LMy-=yo(>V0iplt9#)g8*wlkU@E^|~vg$6;*bk' );
define( 'AUTH_SALT',        '=p6S.1c.f1:0M5 L`sMMSQ/XO+X`X;a0.<xBUC1puYU[]a`A2A|w2ZVXId,AGy{*' );
define( 'SECURE_AUTH_SALT', 'g0#L[@.`KrK~MmA+Y06lLk8MT`3K$g8uOUHzc?bX0$;Hv;x{~t6qwS-%/-Vxz&Qr' );
define( 'LOGGED_IN_SALT',   '.]d|~e%%[QUt*i!5P*O4_Z#j6SG>ktM4=:9%r`$vl`u]^~}eZQg(^t$z@}9&6^Z#' );
define( 'NONCE_SALT',       ',^MVD/ ri_,Qx&}G$Uo9JeV= XU=~%*%G-.ZrroEIobXOIF/ GP!Jki99^|sDUFV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
