<?php

namespace sispo\models;

class Usuario {

    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $sexo;
    private $email;
    private $senha;
    private $dataCriacao;
    private $dataDesativacao;
    private $status;

    public function __construct($nome, $sobrenome, $dataNascimento, $sexo, $email, $senha) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->senha = $senha;
        $this->sexo = $sexo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getDataCriacao() {
        return $this->dataCriacao;
    }

    public function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    public function getDataDesativacao() {
        return $this->dataDesativacao;
    }

    public function setDataDesativacao($dataDesativacao) {
        $this->dataDesativacao = $dataDesativacao;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}