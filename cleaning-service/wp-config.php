<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coffeeshop' );

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
define( 'AUTH_KEY',         'C2inxbwyK0qT+)~6t*,:^}Da>%|Pc$B&*c):wn^r%]gM9%]`B*agrIqRbCw[x[?1' );
define( 'SECURE_AUTH_KEY',  '[NM|~EM<4mi)=jP??X&sYlRN&,JBgY];/>*B)xrp{(eu7vt5$yF.oHGt0Dvy/ads' );
define( 'LOGGED_IN_KEY',    'kV+BOba6<@@ZjW*_p$V2A55K#5zZtz*eJ2bQG768X^!kgK|C`DRmdz;m(%4@27Cq' );
define( 'NONCE_KEY',        '^L3b Hyp B5UoR[J-Pnk`$x)o@W@:,>g/o7g@XK}|Ka]8Gbi)#&RP1ROrf 3r=t=' );
define( 'AUTH_SALT',        'W-2VKlr,Nk?h5x5^d,W5!bM9uH$^>bi37)XoEyFZ.:t& q`v=0x+w/O%eTIlXrEP' );
define( 'SECURE_AUTH_SALT', 'aD8yr{@p~a?a!v8FAy/%/usM] %JtjSOX26@c|T5JFx0bW=;3[@$,* ^NoP$L|%i' );
define( 'LOGGED_IN_SALT',   'l`/7nO`H1ROv<:XkXPtJ;Q9I{m=@@sb/l#`@GkA~nid[fi8EWY0748aD3IxRq^kt' );
define( 'NONCE_SALT',       'z5hjX`53efB>?%>;L4.>nxWU8 GplN)QM@TrRB2qPV43hhcq%,RtNpi8!{<G^?)O' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
