<?php

namespace Henri\core;

use PDO;

class Model
{
    public $db = null;

    function __construct()
    {
        try {
            self::connect();
        } catch (\PDOException $e) {
            exit('Erro na conexão com o banco de dados.');
        }
    }

    private function connect()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=henri; charset=utf8', 'root', '', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
    }
}
