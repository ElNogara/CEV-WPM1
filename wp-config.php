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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cevwpm1' );

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
define( 'AUTH_KEY',         'SB$YlkAI6Q*cn^aP,#:D[BfNje!.{o(y`~ZgWDZtfs]nv csF7(ua^=Of(ro4`$U' );
define( 'SECURE_AUTH_KEY',  'f!{@rthz%r2yB@dlB<{?pgbhO}159TCy+VDFb+q9eF.)KH?OF%j}{(.fPFcgBG+}' );
define( 'LOGGED_IN_KEY',    ' :~oSftbXZXcm31qcZWF3qGf]T<q.ckt3tDNa]8WkVJ QBWV]6$|Teuo~u=T>p^y' );
define( 'NONCE_KEY',        '%D?->mfTmeyj#[,:qE{}Kvzae$^^@V9>YBTI5u.+ed|V*C^dlyiI8MoWJ~vdoRAC' );
define( 'AUTH_SALT',        '4gQZ!}*Z~6TgGt12y=`0:9Bws;SU5g6({G,Iwp2.h&E$YGubHaSFoR8mxb&_9x=:' );
define( 'SECURE_AUTH_SALT', '_mJj3E<^4S}_.8P#8N PYDk]{g+Ep?,xH<wnU]o~,#,tP=F{=BFQ|[w jvU^W~!s' );
define( 'LOGGED_IN_SALT',   'CYj{lhztPOmFQ;gz6g:fQW=Hak&,@Y8`MJ~<m`xf@kB<fy3r/lINanf!Z`4I39Yt' );
define( 'NONCE_SALT',       '<npjj`Q?jaOe1&jw1DSSF3C5wNnG~z`s0)$%@[{{zSs%_SBLawp^cp-}<dj=Jv8@' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
