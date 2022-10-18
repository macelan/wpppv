<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpppv' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+{;3Ft/*W/JbYT7{rV8N{O,Ukp@c<;k/ySk10nYE+wV<JrWYyd]nH[h{<}_)xIel' );
define( 'SECURE_AUTH_KEY',  '|:>LdH)4 fqVH_,sD[vuu%tB4=][q@5@ wHh2XVxZOcJus/qu]f:my7&eDQZ}Ir7' );
define( 'LOGGED_IN_KEY',    '(N6Ea(sHy>8d)]k) eftKx3RK;84%eK[i^5gyvSo<ORT<.N>%%MS&6g3oQT9jPME' );
define( 'NONCE_KEY',        '5{]d:y#.lbEY{&LH0Wy{{;d:~{~&^YMjP8*J^A{yK8$^>Q1u.~N~sWlYoP@E`p|r' );
define( 'AUTH_SALT',        '2c.#<6Okpno)+-Z,=!PL:aEVN)!jjPj{F=,.Dh;e;$)//)c( !bKX]O^|FT0j??H' );
define( 'SECURE_AUTH_SALT', '[6d]Ff%l,:Irju$#/Wd+[74`PcA.;!s)~ygLO_j#/5;mc6L4t<q6_x|mYQ%5fno>' );
define( 'LOGGED_IN_SALT',   '%~~7ykc$40Mv(n?7a?50*{N%[QCy>20i#{ZS3mSvOQD0+o/$I]8v}_I&`,7.%jt ' );
define( 'NONCE_SALT',       '7pJl?<Ua.#KW}jJ1r;kJfnSf?5Ebc$[;DG2xFH}A:p|K{x&u]<Zj}q)m?Pkl_Yb.' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpppv_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
