<?php

require_once 'db.class.php';
//require 'interfaces/usuario.interface.php';

class Inserir extends Banco
{
    public function inserir()
    {

        $stmt = $this->dns->prepare('INSERT INTO cliente (nome, email, senha, end, categoria1, ) VALUES (:nome, :email, :senha, :end, :categoria1)');

        if ($stmt->execute([':nome' => $this->nome, ':email' => $this->email, ':senha' => $this->senha, ':end' => $this->end, ':categoria' => $this->categoria])) {

            return true;
        }
    }
}
// separar classe inserir de cliente Conceito S de Solid
class Cliente extends Inserir
{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $end;
    protected $categoria;

    public function __construct()
    {
        parent::__construct();
    }

    public function setDados(array $dados)
    {
        $this->nome = $dados[0] ?? null;
        $this->email = $dados[1] ?? null;
        $this->senha = $dados[2] ?? null;
        $this->end = $dados[3] ?? null;
        $this->categoria1 = $dados[4] ?? null;


        return $this->Inserir();
    }
}

// separar classe getId que extende cliente
class Id extends Cliente
{
    public function getId($email, $senha)
    {

        $stmt = $this->dns->prepare("SELECT idcliente FROM cliente WHERE senha = '{$senha}' AND email = '{$email}'");

        $stmt->execute();
        $recuperaID = $stmt->fetchAll();
        $this->id = $recuperaID[0][0];
    }
}
