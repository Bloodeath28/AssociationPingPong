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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'AssociationPingPong' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q*+bKA>&ohdbHg1,aK@18EU#ra~;Njzlrq<JM8zEwq+bVSwGlGA(otiErY@Z]8RO' );
define( 'SECURE_AUTH_KEY',  '7#&sFp+1>p>G<HUJ}1*DS)g_)W>bRk=<l7fEdxfMLW|4]0CI`T&9|Q!{y)b~2;E0' );
define( 'LOGGED_IN_KEY',    '*&NW&i`5fH.y?4~#x*?(c2oGuks&Q#q*b`$|^`]Bza.7g9s,_{ P]Ax%9c2}%dZK' );
define( 'NONCE_KEY',        '9-vg7AF89BFmAdF{Bd+tX^ KoS+v{*c{N%s1OA?6 s7#_yWJD*O7~3j- =NJ/E l' );
define( 'AUTH_SALT',        '_8zT|*!|gm!x8Td)H&Pa^golU:{|5O-ol`mul.5)N0-tMVPeco,8kHbA]c[:%xED' );
define( 'SECURE_AUTH_SALT', '4P&Ro ,,DKn$qSsF_qz[QHKEL@D>Kcvk/wZLaF/;8y0)6se^;D).OfNX(&m<gyzq' );
define( 'LOGGED_IN_SALT',   '*F3w[XG(@d/l/8Y!C5ug)E--AqW$Zgo4FTC}@QBYP;X8P91yy?n.rY7BHbIN)Lj;' );
define( 'NONCE_SALT',       'IWoZ+v%GbPKZWpVNOsd^KzJyK>mrk@9&#;:Y{JdZWhLhXn1Br1V%M{;nil0Uj$~7' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'pp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
