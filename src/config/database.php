<?php

use LDAP\Result;

class Produto
{
    public $nome;
    public $preco;
}

$produto1 = new Produto();
$produto1->nome = 'alysson';
$produto1->preco = '31';

class Database
{
    public static function getConnection()
    {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath); // transforma o $env em um array com od dados do banco (env.ini), Array ( [host] => localhost [username] => root [password] => [database] => innout )
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database'],);

        if ($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }
    public static function getResultFromQuery($sql)
    {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return ($result);
    }
    public static function executeSQL($sql)
    {
        $conn = self::getConnection();
        if (!mysqli_query($conn, $sql)) {
            throw new Exception(mysqli_error($conn));
        }
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }
}
