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
define('DB_NAME', 'takeup');

/** MySQL database username */
define('DB_USER', 'takeup');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '0i,I|@S%x]2Odb<N7s}^}tIFy=w`<ii[Cs<OfjT4!*2Jnkbp<O5H,y+l{*p3r.?E');
define('SECURE_AUTH_KEY',  'a&0VSNVu_U_~5T25F%EZ+f[-VgD2h?6MGx*T~K]8rXoaFG_Sw)#L5Q*olDqf)Is)');
define('LOGGED_IN_KEY',    '-*i9pHDZ1bNrslA;c^s9*)9UwqFC97w0+YsQd `fTy3=<-y7A/aq3$BM7][@]dFz');
define('NONCE_KEY',        'a!*CrNFdmh [:`5yqdyf42C;Eo|NlL-;9M]BPDC%!}?Dn38&G@Bpk@yFzmJQ#h`9');
define('AUTH_SALT',        'x|[wU1`$lV+ccn1zXIQ`.Ln.%.@7w1oy_0[-gILcrQUv-taE.gSAn9oI](Nk.ohO');
define('SECURE_AUTH_SALT', '%$-1K)O,tv#<%9@+VgZ!^2$I_5Po~=Qx^Ao6{s|ZiWMNB%L8n>t[=z3=_>)H~C+c');
define('LOGGED_IN_SALT',   '.ZGKt=%ijz^VWN0#>seZYi4.oF<G{aJ}CV3VW:CDed]~w2ovBNI[n_.DrL]ZBN`U');
define('NONCE_SALT',       '}lTNb,/VX?K|-m{dE>oI#r9rF5pCpn{`^~$ms+YuOD.s1c{PqjjA.nBHV{nqxjz5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tup_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
