<?php

namespace sispo\models\factories;
require_once 'models/Usuario.php';
use sispo\models\Usuario;

class UsuarioFactory extends AbstractFactory {

    private $usuarios;

    public function __construct() {
        $this->connectDatabase();
    }

    public function __destruct() {
        $this->disconnectDatabase();
    }

    public function createTable() {
        $createTable = "CREATE TABLE IF NOT EXISTS usuario(";
        $createTable .= "id INT AUTO_INCREMENT PRIMARY KEY,";
        $createTable .= " nome VARCHAR(50) NOT NULL,";
        $createTable .= " sobrenome VARCHAR(50) NOT NULL,";
        $createTable .= " data_nascimento DATE NOT NULL,";
        $createTable .= " sexo ENUM('masculino', 'feminino') DEFAULT 'masculino',";
        $createTable .= " email VARCHAR(50) NOT NULL UNIQUE,";
        $createTable .= " senha VARCHAR(50) NOT NULL,";
        $createTable .= " data_criacao DATE NOT NULL,";
        $createTable .= " data_desativacao DATE DEFAULT NULL,";
        $createTable .= " status ENUM('ativo', 'inativo') DEFAULT 'ativo'";
        $createTable .= ")";
        $this->db->exec($createTable);
    }

    public function insert($values) {
        $sql = "INSERT INTO usuario (nome, sobrenome, data_nascimento, sexo, email, senha, data_criacao)";
        $sql .= "VALUES (:nome, :sobrenome, :dataNascimento, :sexo, :email, :senha, :dataCriacao)";

        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nome', $values['nome']);
        $statement->bindParam(':sobrenome', $values['sobrenome']);
        $statement->bindParam(':dataNascimento', $values['data_nascimento']);
        $statement->bindParam(':sexo', $values['sexo']);
        $statement->bindParam(':email', $values['email']);
        $statement->bindParam(':senha', $values['senha']);
        $statement->bindParam(':dataCriacao', $values['data_criacao']);

        $statement->execute();
    }

    public function selectAll() {
        $sql = "SELECT id, nome, sobrenome, data_nascimento, sexo, email, senha, data_criacao FROM usuario WHERE status = 'ativo'";
        $result = $this->db->query($sql);
        foreach($result as $row) {
            $usuario = new Usuario($row['nome'], $row['sobrenome'], $row['data_nascimento'], $row['sexo'], $row['email'], $row['senha'], $row['data_criacao']);
            $usuario->setId($row['id']);
            $this->usuarios[] = $usuario;
        }
        return $this->usuarios;
    }

    public function selectById($id) {
        $sql = "SELECT id, nome, sobrenome, data_nascimento, sexo, email, senha, data_criacao FROM usuario WHERE id = {$id}";
        $result = $this->db->query($sql);
        $usuario = null;
        foreach($result as $row) {
            $usuario = new Usuario($row['nome'], $row['sobrenome'], $row['data_nascimento'], $row['sexo'], $row['email'], $row['senha'], $row['data_criacao']);
            $usuario->setId($row['id']);
        }
        return $usuario;
    }

    public function selectByLogin($email, $senha) {
        $sql = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
        $result = $this->db->query($sql);
        $usuario = null;
        foreach($result as $row) {
            $usuario = new Usuario($row['nome'], $row['sobrenome'], $row['data_nascimento'], $row['sexo'], $row['email'], $row['senha'], $row['data_criacao']);
            $usuario->setId($row['id']);
        }
        return $usuario;
    }

    public function update($values) {
        // TODO: Implement update() method.
    }

    public function delete($id) {
        // TODO: Implement delete() method.
    }

    public function count() {
        // TODO: Implement count() method.
    }
}