<?php

// Inclua o arquivo de configuração
require_once 'config/config.php';

// Inclua o arquivo de autoload do Composer
require_once 'vendor/autoload.php';

// Verifica a rota solicitada
$route = $_GET['route'] ?? 'estudante';

// Rotas disponíveis
$routes = [
    'estudante' => 'EstudanteController',
    'curso' => 'CursoController',
    'matricula' => 'MatriculaController'
];

// Verifica se a rota é válida
if (array_key_exists($route, $routes)) {
    // Crie uma instância do controlador correspondente
    $controller = new $routes[$route]();
    
    // Verifica o método solicitado
    $method = $_GET['method'] ?? 'index';
    
    // Chama o método correspondente
    $controller->$method();
} else {
    echo "Rota não encontrada!";
}

?>