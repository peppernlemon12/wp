<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tripdb' );

/** Database username */
define( 'DB_USER', 'tripuser' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', '10.0.2.169' );

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
define( 'AUTH_KEY',         'OSfa8JE1T@5PFoV$MXC_:uqvffDfu%@^K3CRJaL[O<+v:eyYuL2n;|5#Jeysj*2i' );
define( 'SECURE_AUTH_KEY',  'ESSBUxRtkk-wFZF`~x4sls,v7us!V8h>LmHtA/&_Y<L>(mhPU#)wHI6#!n&31X<m' );
define( 'LOGGED_IN_KEY',    'C2Rr,sj%V@]F@eyqVrOvg:Uvl_3=)BVf/Ujv;zz%$na7( [^82%%<9:$L@Y-a+;W' );
define( 'NONCE_KEY',        '(jELb^@R-:W7TK`x0}+FQ_;`r7i)BR[%!AkC~Sbjkw85weSaROkSnZWv^SmXG`Wt' );
define( 'AUTH_SALT',        '{_|[4X6.h2?]nE)0#L{b_7TSR?Nf7PC_++g4vrF|-s~>jN*Uz~c*4cAnWZUs21@A' );
define( 'SECURE_AUTH_SALT', 'y_~2Euv7pmf_3E9&,m@W:B_@~0w/4kfr.pfzh,Y{[~Mgl(|,<aO4dIWL1Q7/.P36' );
define( 'LOGGED_IN_SALT',   'Gi (*:=bpmtx:^+7971|^UF}ZsDrZ3=*_>yP6w<r#_ZP>%n)OXDfv46xjMh@$Yn+' );
define( 'NONCE_SALT',       'gA,dR2mk-_C3&abn/].RWwX:Uny$%e5u7O$b6_Ou*c2)u|=/@<2bBHvpphh}Zlq(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
