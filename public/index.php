<?php
require_once(dirname(__FILE__, 2)  . '/src/config/database.php');
//o dirname(__FILE__) pega o diretorioa atual, o ,2 retorna duas pastas e, o . concatena(adiciona) com o caminho onde esta o arquivo database.php, onde vai esta as funções que eu preciso.

$sql = 'select * from users'; // ele esta puxando para a variavel($sql) todos os registros da tabela users.
$result = Database::getResultFromQuery($sql);
//aqui ele registra na varivel($result) a query($sql) apartir da metodo getResultFromQuery da classe Database que esta la em database.php.  

while ($row = $result->fetch_assoc()) { //o fetch_assoc() ler linha por linha(while, que continua tare não ter mais linhas) do resultado ($result, que o objeto) e devolve um array associativo, por exemplo:   ['id' => 1, 'name' =>'Antonio', 'email' => 'antonio@email.com']
    print_r($row);  //exibe o conteúdo do array.
    echo '<br>';
}
