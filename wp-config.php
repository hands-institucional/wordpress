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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'testao' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'n<+H&P0dBXJYe5Eg8_]$aQX}g3 Id]8ymta<}BKy:]0%Shaso_W@dY~?(*m~|S,P' );
define( 'SECURE_AUTH_KEY',  'Fat!t5F(^|ZJ@dJ;W%po^s0@uian;}^(|}X,ll<K!4fe|*Svk%LlN]>{Smhwja1.' );
define( 'LOGGED_IN_KEY',    ',O!9e0WV*;bJB;^{@Xk}S:C`km@0)]/^n?gaegk5X06ws`;.!816=:1QXpO(emO$' );
define( 'NONCE_KEY',        'G1649e`|}jm zPxU^pitV(,w^q*COid>JDA+e}d8j+UOAuaFHFI6V8$c3n{`-Jy9' );
define( 'AUTH_SALT',        'oT^_}]P<$m;X[@MDVJ}(~5oId_J[z)3tw5(%p1S:eOc?$>+:8=!>g@.V2^P:eF4o' );
define( 'SECURE_AUTH_SALT', '}5+z^>E-{/DhA=38m?%*wk;od4R*|XY:$nEU#g!lt,(5^UvZ$dy[Y_]ip}Q3W(;d' );
define( 'LOGGED_IN_SALT',   'KLr2&&cS:4t!{bZ};);)>ZN{u)U0sz12JUxA4CWxR+(#1YYUrVuJ<^c@Qsfq-T~:' );
define( 'NONCE_SALT',       '|o.t@vCXHB?:!B#}&ZwNNuJ&vB-g)3RKgOs.rguSP`7[F&BE{f>!FIj7M~M)^^&#' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
