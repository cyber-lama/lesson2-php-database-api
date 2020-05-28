<?php

class database
{
    private $configs;
    private $host;
    private $username;
    private $password;
    private $database;
    private $str_table;
    private $table;
    public $db;

    public function __construct($configs = []){
        if (!count($configs)) {
            $this->configs = include($_SERVER['DOCUMENT_ROOT'] . '/Lessons/Parsing.local/app/config/db.php');
        } else {
            $this->configs = $configs;
        }

        $this->host = $this->configs['host'];
        $this->username = $this->configs['username'];
        $this->password = $this->configs['password'];
        $this->database = $this->configs['database'];
        $this->str_table = $this->configs['str_table'];
        $this->table = $this->configs['table'];

        $this->connect_to_db();
    }

    /*
     * Подключаемся к базе данных
     * */

    function connect_to_db(){
        $this->db = new mysqli();

        $try_connect = $this->db->connect($this->host,$this->username,$this->password,$this->database);

        if ($try_connect === false) {
            throw new \Exception("Один из параметров для подключения к БД указан не верно");
        }
    }

    /*
     * Метод возвращает строку из всех названий полей таблицы
     * */

    public function allFieldsInBD(string $tableName)
    {
        $arrayTableNames = [];

        $fields = $this->db->query("SELECT * FROM $tableName")->fetch_assoc();
        foreach ($fields as $key=> $field){
            array_push($arrayTableNames, $key);
        }
        $strTableNames = implode(",", $arrayTableNames);
        print_r($strTableNames);
    }

}