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
define('DB_NAME', 'actualiz_car');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'trujillo967');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '#e;XLP#- `+%F+@JqlqO7~&(i|RiHA$ X^7sOD ldtrrJXs<h[Zw(j?,i}*6uidz');
define('SECURE_AUTH_KEY', '-+}un$_+YM4gyKt$*~K1Tdn[]wp|KRqS%*PO]l#Skua-+d34o/-se)v8z2@8N2-H');
define('LOGGED_IN_KEY', 'dZ|ao|3%pmdJJq=XuawbSQ#Dla|5h8<oOn-/D*iAv++{%gqMTR `R]V!&ltYBVE1');
define('NONCE_KEY', '}0KJJ@Cf#USv~+-T-L:=gU@2^2^wSQ*f`x]@J!nB{e3B7<AQK@U}RfrcEYdgiidG');
define('AUTH_SALT', 'FUpWH:ez:1z3)7g+b!|R,+5r_:~|&.+w;w&+qy;x@F7!|b4;/Ha|M QB5jHQE2EI');
define('SECURE_AUTH_SALT', ' !JtcY+RVI~B[.RM(c9 |IM>4)7<.Xahs)({cTZccE%SGxYs[w|vPL}-+2>Vhk`]');
define('LOGGED_IN_SALT', '7lW49wX,@ Ava0vm5MK81:_=:uhn2+N$+Cg+sWtC#3<+#O$MnR@+v~0y- kA7HOl');
define('NONCE_SALT', '<+luM(r[1QwftBa)Dg:<e~1,|CaIj$LO@VWA^v]|h=PsMV  bA<d7bOQYxx3Y<_/');

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

