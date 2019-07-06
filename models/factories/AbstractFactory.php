<?php

namespace sispo\models\factories;
use PDO;

abstract class AbstractFactory {
    protected $db;

    protected function connectDatabase() {
        // Set default timezone
        date_default_timezone_set('UTC');
        try {
            $this->db = new PDO( 'mysql:host=localhost; dbname=db_sispo-v1', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->createTable();
        }
        catch ( PDOException $e ) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }

    protected function disconnectDatabase() {
        $this->db = null;
    }

    abstract public function createTable();

    abstract public function insert($values); //array com os valores do insert

    abstract public function selectAll();

    abstract public function selectById($id);

    abstract public function update($values); //array com os valores do update

    abstract public function delete($id);

    abstract public function count();
}