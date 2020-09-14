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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nengu_tech_db' );

/** MySQL database username */
define( 'DB_USER', 'itsaboutnengu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'changetheworldnengutech3487' );

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
define( 'AUTH_KEY',         'qIC3+u<0k<58;$1PYT}yRx;5bPnYQ<G%BnHKpm-+|ctY?,|bG )_2`[M)d`FH&@^' );
define( 'SECURE_AUTH_KEY',  '#L,/P]mDWRw=%`(y,8/B!S2iagGqoMoRK_8VA|%K13gC^}lr*PT4{9bbyufz1pjM' );
define( 'LOGGED_IN_KEY',    'tp0+o0rG|SiaryH.;8>E!vl18(YSw6l0P-e$`=6yz@10Y^Hx,$Kr=><#UzecB.Ux' );
define( 'NONCE_KEY',        '[^9OEp>tBw9fG-Z~=E=dcF&Xq=!hS=l3kLNS{Y*2}?@rpVE(#mHVO(ID_]!VWj9)' );
define( 'AUTH_SALT',        '0_w-Xr04d 8Rw;1Wv~XpyVBC$-<vjONrYiYe9pNwF%-tx)],M6);VcdTb6c>^6.9' );
define( 'SECURE_AUTH_SALT', 'K#:XDAPd(D:FoUydiK[D6`BCRf~Z :P!1Q+h%;,_s$>6K)jU:.(Tb.-lvkV`k#DR' );
define( 'LOGGED_IN_SALT',   '^46w&y8v{j^U?u;GvyC)J(-NdY3~s=]=q`IS!Itkm.7jdb1`<;A9>8E6^(;c~U?F' );
define( 'NONCE_SALT',       'SWMAy1$CvI)=&lyj$#5{U#_z0%&om?(M%44nn@2@<cKBN*:_S9&~IM|0<^bU=8@1' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
