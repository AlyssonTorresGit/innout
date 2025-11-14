<?php

class Model
{
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];
    //sao propriedades protegidas que so pode ser acessadas por elas e por suas filhas herdadas e statica, que pertence a classe e não ao objeto.
    //$tableName	Nome da tabela no banco (ex: users, products)
    //$columns	Lista das colunas dessa tabela (ex: ['id', 'name', 'email'])
    //elas servem como configurações que o php usa nos metodos da classe.

    function __construct($arr)
    {
        $this->loadFromArray($arr);
    }
    public function loadFromArray($arr)
    {
        if ($arr) {
            foreach ($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }
    public function __get($key)
    {
        return $this->values[$key];
    }
    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }
}
