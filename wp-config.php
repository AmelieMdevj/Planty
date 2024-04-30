<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J#v68z=t5U5l4Ny@TDdr9N-+y`Qv+#:fq^v{Qr/X/v`cSw$N}4O9Ax68:58J%9N+' );
define( 'SECURE_AUTH_KEY',  '~;+)5dk;1laQnB6.O1OSprK{2{nQeF!?oW.NrcqR3an_>e.6D0N2xh0.>%r[VG-f' );
define( 'LOGGED_IN_KEY',    'U!y/HR-J!9GRW}<>m]NQ1T:5.Y{y+8mbER6`%@bJwrzbD=%t3![ n*mlG7gjA3J/' );
define( 'NONCE_KEY',        '0rCBvdQA({G-rU]-3P>[9/~(J{GNvGM8gDp>.?|fno52E-qN9,~BwsjhHw~B>|a+' );
define( 'AUTH_SALT',        'I_nvfmp[r#M!,P&i+EWyu2~:X}!A}=~8q]q{?:E8RVkAo#c^f.IE X3p)>;mjQ[[' );
define( 'SECURE_AUTH_SALT', '+T(BjH~Mdd4:hJ)Pr:Qg+h}k]MV^kgPfMw_;#bdwa:mLj5#zvVFULF.Jss?L3!*&' );
define( 'LOGGED_IN_SALT',   'LbJ8{NwmfILhr[^m1aqeUE1Hz] 1vmx1WlN9; /?DsKm.ojU}Gm>_.I]-`tl$;G+' );
define( 'NONCE_SALT',       'g3P^Rc:NuDw~_>XPMj7auB^6)Qhx+9g%_uCj3i>y`4%Y:}dc*QpfQep?Y>8n0z99' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
