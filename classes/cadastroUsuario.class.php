<?php

require_once 'conexao.class.php';
//require 'interfaces/usuario.interface.php';

class Usuario extends Banco
{

    protected $id;
    protected $email;
    protected $nome;
    protected $senha;


    public function __construct()
    {
        parent::__construct();
    }


    public function setDados(array $dados)
    {
        $this->nome = $dados[0] ?? null;
        $this->email = $dados[1] ?? null;
        $this->senha = $dados[2] ?? null;

        return $this->inserir();
    }
    public function inserir()
    {

        $stmt = $this->dns->prepare('INSERT INTO usuario (nomec, email,senha) VALUES (:nome, :email, :senha)');

        if ($stmt->execute([':nome' => $this->nome, ':email' => $this->email, ':senha' => $this->senha])) {

            return true;
        }
    }
    public function getId($email, $senha)
    {

        $stmt = $this->dns->prepare("SELECT idusuario FROM usuario WHERE senha = '{$senha}' AND email = '{$email}'");

        $stmt->execute();
        $statement = $stmt->fetchAll();
        $this->id = $statement[0][0];
    }
}
