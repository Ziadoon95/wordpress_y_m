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
define( 'DB_NAME', 'wordrpess_y_m' );

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
define( 'AUTH_KEY',         'G,pz/q@E[Ldn;lQ[w -XSV9)dFD%Zd8[JNMD3#L&@UVL,u{2{Z=P`V`5;(5?^OzU' );
define( 'SECURE_AUTH_KEY',  'H]n*;fpq(nU=$b%*,$AO|qPnr^itPxnKP>oWu/j*Mzc0B>%vkbqMJ!EH`|gA<VI@' );
define( 'LOGGED_IN_KEY',    '5((guN]}L%zzOw]-e,^yZl_>11?PCu9!EgZ-y(I>RDcektIcFJ%r1QiSJWo@LbG@' );
define( 'NONCE_KEY',        '!!K7(d*C@<OWaDxi_xlvU*O z75PhOTyAfESr{0.XAoh4{WUufN4@LLfEmel ]Mx' );
define( 'AUTH_SALT',        '{HW*RYCp;k-=^tTv2,(>_q_iZ}#R7gzXV=Hmy?V.Nkn#G gV4r`E9g^@pzRfEaAB' );
define( 'SECURE_AUTH_SALT', '0_BCM[Vw2o}=#4EXsZ% i=di|Q(,15v).hI?y$qn6XMfNUKbHeCk:ulBhhStQ [y' );
define( 'LOGGED_IN_SALT',   'hT WdRxrg]R.A;.Z=o0`dvitO-@J?ndB+q 3#[ :%_$k1Y=Z10>+>;+Ig~S1W/8r' );
define( 'NONCE_SALT',       'mr(>G!?GzTU2`cidO+^zW[Jj%^9>O>49hy[*Ek=XVljKL:F8E7{3EW>is-RxdpP ' );

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
