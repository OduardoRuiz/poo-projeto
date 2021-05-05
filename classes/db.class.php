<?php

abstract class Banco{

	private $user = 'root';
	private $pass = '';
	private $db_name = 'loja';
	private $host = 'localhost';
	private $port = '3306';
	private $driver = 'mysql';
	public $dns = '' ;


    public function __construct()
	{
		$this->dns = new PDO($this->driver . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name, $this->user, $this->pass);
	}


}
