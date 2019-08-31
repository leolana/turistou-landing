<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'turistou-wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'turistou-admin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'lucasleo');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql942.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v#Sb:N&1LMHr=Jn5urunQ0qr~gc_~IsuI{>_usB?O;[8aC_Pi|(RO4hi$)0X{^}G');
define('SECURE_AUTH_KEY',  'yVuQ=plEx+m~,)1>o2b(|z(S[SFD0]P}1KXBFT{tf=`,ZQMeJX+d6<^Xb`^$HSVz');
define('LOGGED_IN_KEY',    'd91}F)we?.{|]/?~;d@?6l%*>P%=;-@14olgXsm7L7R7q!jc*EU=/^Z:tEeofmSt');
define('NONCE_KEY',        '9lD~5w{`Sh/UL2i_+q#`}>bV&EcIEXzZLiNd5N(g}#vRv30MSDaTs*FZ!/fL7a!.');
define('AUTH_SALT',        '3Arg&FWr]?X `j^R^~~-%d`sQ$Lx#1.,1-R<_f,M[^XKzJ0VYV`83yY*,29P6*uM');
define('SECURE_AUTH_SALT', '|)om9.EnRZrTuFzGv`YpDq@LWz9o>=?E:$PKT/k0!Kt_bP-@rNW8Cczvjf1^G@W#');
define('LOGGED_IN_SALT',   'b@+P1a>QQ*6}(,/%OMAK8;R~zk@-S&P=~uyXiBNfj[27/[>)=oz+ib+$:W,Z|b=B');
define('NONCE_SALT',       's|Q2A0ne[NF>+/qJTLp$qjMuWu/VKH^k`QrZ]AB`P ezu,A},!Sc^d<B/t*(I,~V');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
