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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'limitlessinteractions' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6ev@(,5jd:;+nOJ`|B$W_vRD`Ev6p]Mp^nl5N)sF@ooXhCAuDHQ6T@Sd99Mj`0Ev' );
define( 'SECURE_AUTH_KEY',  '?}SpD}wi6Fc7xM8:g@<Km@2m{jL~t5I5ynHN=w-cVk 4{ekl?yd.t [lQi!9X)/9' );
define( 'LOGGED_IN_KEY',    '$HkXkSGP&v*#Gtm!q:^I+OWpe?3S04R_[zIU}`#>uPwYiBw|g|rMC/D1D/2yE1?t' );
define( 'NONCE_KEY',        '`dz},m0dsk%>IYo:7jZRIj ]yt^@&[g4%}] x(xwd[8)6ioM6$!r`v wDFe{A[9 ' );
define( 'AUTH_SALT',        'c7CiI@;!#R`(Jrh8Ov|}c#u30<<O86>m-$jEO9U4`!I=wgGnl bn}JaHe$&JOU<i' );
define( 'SECURE_AUTH_SALT', 'UZ==hVG/[*>s&x&Na9]A@7p[Gq~#/edZq;GW*iHMfD;]+14an^!Cwr}kI5(WGs3)' );
define( 'LOGGED_IN_SALT',   'f|;jIHxuB7iH5(=GXU|xdx=4 jTtpO%FJ(C!Sjt(.fmo}a7cYV/Z)@Wbv*n)<1vh' );
define( 'NONCE_SALT',       'cnH`@Mr>bsc)[#n;<D?D2|l;.G(v|:ML~Uk:zoPh^;SxZ:0!,it@lf1jzVvSOEw~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
