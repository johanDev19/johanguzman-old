<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nrrxgfbiq9vzkjyd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'rjvgpf697zyo418z');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'x6lsyt3ck03sgvyn');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3#+vs_`PBon,){que-)P];?[wOl74QG;O2^H&,#@K4fe>4p!Ljs7d]X[;w q8`O2');
define('SECURE_AUTH_KEY', '$c&$,a+MC{^G|uk%-xjo,]V1aWWj5iS$LN}%b?eQxr$S(UrB(u*xMYK$Q![kP[C`');
define('LOGGED_IN_KEY', '`djlpxGBh2&qEurk-cJhXa`@pPoC&|(qo2~xynj+7+opw>DDrDn57 Qk)Fh0v8n>');
define('NONCE_KEY', 'tA$D6qY%T;E|Qjb;u5X!E<*#ZS{:2YYcp8vG.o:,Rs?0yAghF.0v?RcArTmFmW/R');
define('AUTH_SALT', 'zjNRa XP^I@])nH 9_Leq?2yX3tXX{Yc u<0I-e1^c.d!DF~G~|tT)[iQT#Tz[f^');
define('SECURE_AUTH_SALT', '5TE3V^0)PxJsLg; V&8&NOS=](4<SkmzmWkOR;/>HPD|96`g0)!7,U/>qv1#Litz');
define('LOGGED_IN_SALT', '^NPFn?ci~,:O%o8xjRpuskuU9Dq8@N7R:=MM9e/XMjg~E#+yQivYmvQ6Vkk[CqUp');
define('NONCE_SALT', '-]?d, AZ^`M.7Wy#$,av3vtwl#E<1Y.:M)T2n#be#D@1Jhdbqm|fUm(zQqhZ|Fff');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

