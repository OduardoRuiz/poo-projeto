<?php
class Pedido extends Banco
{

    protected $idprod;
    protected $idcliente;


    public function __construct()
    {
        parent::__construct();
    }


    public function setDados(array $dados)
    {
        $this->idprod = $dados[0] ?? null;
        $this->idcliente = $dados[1] ?? null;

        return $this->criar();
    }
    public function criar()
    {

        $stmt = $this->dns->prepare('INSERT INTO pedido (idprod, idcliente) VALUES (:idprod, :idcliente)');

        if ($stmt->execute([':idprod' => $this->idprod, ':idcliente' => $this->idcliente])) {

            return true;
        }
    }
    public function mostrar($id)
    {

        $stmt = $this->dns->prepare("SELECT * FROM pedido WHERE idcliente = '{$id}'");

        $stmt->execute();

        return $stmt->fetchAll();
    }
    public function apagar($id)
    {

        $this->dns->query("DELETE FROM pedido WHERE idcliente ='{$id}'");
    }
}
