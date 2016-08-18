<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'guillaumnj2910');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'guillaumnj2910');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '29Prosql10');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'guillaumnj2910.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?UY*&--N@Bwd+%tD*pBr6ie1r)ReLK`p%[qm);d2EKKI%g[9!+Cph%Wb3j|5Xx}9');
define('SECURE_AUTH_KEY',  '+QiOf]n)/2;WF(D12T0`%vLLSe M/SJTOf{dcA.Vy)qX)NOfeI@.@q,jy>88M.Ww');
define('LOGGED_IN_KEY',    '2Un[M{2p=-E*YSIu.86.w TNUlHtj$:~p]hL6>E+ t/Vn,?bl2DMvws9g$g!tEBD');
define('NONCE_KEY',        'Qsfvrok`hGP+bNll,5 (%3Mzluhyt^r[hg7t1WgU.$!v/9J S8IU;g@X^Vi|uAJi');
define('AUTH_SALT',        '0 ,2^N[t B3Sa[zSMZqye<?}2W2;@YC#mWNLc)RLG~=!l;32lZ^L]o-2y`gdMI%Z');
define('SECURE_AUTH_SALT', 'S}(.*{=:xtzqU+es*O//xK_To+;#>5ncTmPLrmAe4?C#XR_X8FR+t!Qrvo*L]N/0');
define('LOGGED_IN_SALT',   '%vGeJ6DKKpUoubX!Ba_h/Rgl!1Y8Ts-+>XGfkx#{l~BYo<P(kk7BA/^CYOE||5?7');
define('NONCE_SALT',       'Ou^[`ryW9r&< S?8h2toa#%X1)e9AlHSEh9*/5K5b#h]PMY-nu@MEJR^$bvxG?}a');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');