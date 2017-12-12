<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/app/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'portailconceptdb');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'dev_db_portailconcept');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YCOHpU,y0-X=BAZW.H/JXVk+QGaS]E>t+-7A7fTA${_+DK=1.v-uG?NKGeIDvN @');
define('SECURE_AUTH_KEY',  '4c4eef6usJtBO3K+ISE:|q/ypA!x}g<[YcuR)l]9ri}B+hxfz|v8`6.r3dE}PQdA');
define('LOGGED_IN_KEY',    '-}B}$5bcRP%6NF.Cd!}4Z|*komX15,j-k8>Xu_%b,!>uD9VUZa-]eJ@>-,n-vIa)');
define('NONCE_KEY',        '~9A%^N[VTB#9iny1cC}af,;DyfYDi]wdnT^,#4e!KWx)=Xo 5de^W]w[m~v[}+|H');
define('AUTH_SALT',        'e{m#.CIQ_z<9Z~EZ~HEXlJ$51ceJS` 0*SoA!uSlht,;B])DI;0p%]x1>}N>Ae<Q');
define('SECURE_AUTH_SALT', '`-JyM[B/w}YHe~3{Nak~?=%` &!Pi+q>w5}1G1nL@V&J@J|Lh^L;#!TK;hMt:Rcn');
define('LOGGED_IN_SALT',   '/xS12x97x2*}XOT}^oKB$7a-aQN)v)FA9b#z?ux,Auc,f?G:wp>UU4m3hxT$`,Ih');
define('NONCE_SALT',       'gAOD,8nkhHbiXTie%ZxX+ARA_)q[urZRXHr*]L$u}3OIy1]pM:ARrz$2&~fyt4j-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');