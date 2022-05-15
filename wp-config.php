<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testcosa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x2*CxQsm5-#]m|-2&C6p=l_oJ6YYISn2_{P9eVwtBH9[YUq}yMC^FSGd{c~ Ehxr' );
define( 'SECURE_AUTH_KEY',  '`7.vGYlE60YS:IWw:4GX5`u*i{-!V$NP <e`M_L28]HO453S7zgF9KYpPVb21h:e' );
define( 'LOGGED_IN_KEY',    ' rohgWh{iDp@UC`Q^ri8Pb3j?pDzg*1Q9X(&]F4??v~egHP$kk^-#.^F.i@4_FeI' );
define( 'NONCE_KEY',        'xS^sg5^TLWAyrT:W0vm{&|Ii/PWG#KQg+;rI[Q6?!_zkM;p*Cl^*r`?%6(lH>h/]' );
define( 'AUTH_SALT',        '/!UUqKSjO)=8uuh c=m,1{l`!6=]^#auS>Y$y*6=;]CmH!YRrVm-Tp%M#|uP >e2' );
define( 'SECURE_AUTH_SALT', 'qk*bUfe.HCC/&c)HKJM4FhYzqQWRO[m1gAz~$8#%)fSm2F.@CsTG_g%kU:og+#+H' );
define( 'LOGGED_IN_SALT',   'S_M=.2r<bXpfpmt]btg uMFSd#98^Kgq<Ds3{f}n]D{X]udj>@UX?m9~eMSQU;DM' );
define( 'NONCE_SALT',       'yn~[&gp$gn4I$fUc7{Oa2{YV(@.s4~,iGl[+gy$m{M1-GFO!p;<2)q8)z-V)xkFq' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
