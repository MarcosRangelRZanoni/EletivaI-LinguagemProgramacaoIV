<?php


require_once __DIR__ . "/vendor/autoload.php";

//AQUI A GENTE RECUPERA O QUE O USUÁRIO DIGITOU E QUAL MÉTODO HTTP ELE UTILIZOU

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//INSTANCIAR CLASSE ROUTER

$router = new \Aluno\Rangel\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

// Exercicio 1
$router->get(
    '/ex1',
    'Aluno\Rangel\Controller\ExercicioCR1::mostrar'
);
$router->post(
    '/ex1-resultado',
    'Aluno\Rangel\Controller\ExercicioCR1::mostrarResultado'
);
// Exercicio 2
$router->get(
    '/ex2',
    'Aluno\Rangel\Controller\ExercicioCR2::mostrar'
);
$router->post(
    '/ex2-resultado',
    'Aluno\Rangel\Controller\ExercicioCR2::mostrarResultado'
);
// Exercicio 3
$router->get(
    '/ex3',
    'Aluno\Rangel\Controller\ExercicioCR3::mostrar'
);
$router->post(
    '/ex3-resultado',
    'Aluno\Rangel\Controller\ExercicioCR3::mostrarResultado'
);
// Exercicio 4
$router->get(
    '/ex4',
    'Aluno\Rangel\Controller\ExercicioCR4::mostrar'
);
$router->post(
    '/ex3-resultado',
    'Aluno\Rangel\Controller\ExercicioCR4::mostrarResultado'
);
// Exercicio 5
$router->get(
    '/ex5',
    'Aluno\Rangel\Controller\ExercicioCR5::mostrar'
);
$router->post(
    '/ex5-resultado',
    'Aluno\Rangel\Controller\ExercicioCR5::mostrarResultado'
);

//ADICIONAR AS ROTAS VÁLIDAS ACIMA
$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());
