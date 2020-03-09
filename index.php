<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/',function(){

    echo 'ROTA 1 -> Testando Rotas com Slim Framework';

});

$app->get('/teste/:name', function ($name) {
    echo "ROTA 2 -> Wesley Eduardo - wesleyeduardo.com.br".'<br><br>' . $name;
});
$app->run();


?>