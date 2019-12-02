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
define( 'DB_NAME', 'word' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'NK}v,bEyOq!~dUWe0M!%:niaICC.hp/Hl|^19VuM-~]&[}F:E+(/k{B>FoTTk:}~' );
define( 'SECURE_AUTH_KEY', 'U{k?SE$ >|SnB;2i9jbCHU2*a{UQXF3SW]kZ}5gD3Ia4@XuLD~np]A<fYYb_4z#D' );
define( 'LOGGED_IN_KEY', ');y:(~QaJc5.~=-W4?,#Gvs|B`O=5>[?ht8bhgZ@p;[&n%.ka*L,  ;arzi)48fh' );
define( 'NONCE_KEY', '91)G#G%~sk)SXl*(=LUskPEqeUNso[ -:.I,U1i*wn51{^Xu(yv!gfmtqy1]<=S@' );
define( 'AUTH_SALT', 'T>iM.(_71]1bhzig}|<+N;-w_ksDmyA$vdZ@,)9D||smE6$v`Htyt,f$w8uHC;W%' );
define( 'SECURE_AUTH_SALT', '`X/T,8m}7SO3bs0p(Z+17qA} S+57#A4-NL~0VSHS`M<$d8L$PFbJN2Fj2~yG#@^' );
define( 'LOGGED_IN_SALT', 'sS9R/[6M9o0anx0O|/&bvspsK-);xngbNlv9B:y}7Z3>OJsm/BEjWT?Y+v|Ub!s)' );
define( 'NONCE_SALT', '*=SgJdE2~#yWI!k8cP[rW6rI::+W%mn|_v<a40|qMCPRN- 99{hC$e+#~<x$-AG[' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

