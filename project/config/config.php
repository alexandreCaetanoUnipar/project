// Configurações gerais
define('APP_NAME', 'Escola');
define('APP_VERSION', '1.0');

// Configurações de banco de dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'escola');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Configurações de segurança
define('PASSWORD_SALT', 'seu_salt_aqui');

// Configurações de caminhos
define('APP_PATH', dirname(__DIR__));
define('VIEWS_PATH', APP_PATH . '/views');
define('MODELS_PATH', APP_PATH . '/models');
define('CONTROLLERS_PATH', APP_PATH . '/controllers');

// Configurações de URL
define('BASE_URL', 'http://localhost/escola');

?>