<?php
require_once(dirname(__FILE__, 2)  . '/src/config/config.php');
//o dirname(__FILE__) pega o diretorioa atual, o ,2 retorna duas pastas e, o . concatena(adiciona) com o caminho onde esta o arquivo database.php, onde vai esta as funções que eu preciso.

//require_once(VIEW_PATH . '/login.php'); //define a constante VIEW_PATH com o caminho la no config.php

require_once(MODEL_PATH . '/Login.php');

$login = new Login([

    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try {
    $login->checkLogin();
    echo 'deu certo';
} catch (Exception $e) {
    echo 'Problema no login ;P';
}
