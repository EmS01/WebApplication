<?php

namespace App\Models;
class Cliente {

    protected $id; 
    protected $nome;

    protected $db;

	public function __construct(\PDO $db) {
		$this->db = $db;
	}

   
    public function getId() {
    	return $this->id; 
    }
    public function setId($id) {
    	$this->id = $id; 
    }

    public function setNome($nome) {
        $this->nome = $nome; 
    }

    public function getNome() {
    	return $this->nome; 
    }
    


    public function getClientes() {
		
		$query = "select id, nome from tb_clientes";
		return $this->db->query($query)->fetchAll();
	}

    public function nomeClientes($id) {
        
        $query = "select id, nome from tb_clientes where id =".$id;
        return $this->db->query($query)->fetchAll();
    }

    public function salvarCliente($cliente) {
       if ($this->getId()==0) {
           $query = "insert into tb_clientes (nome) values('".$cliente->getNome().")";
        }
        else  {
           $query = "update tb_clientes set nome = '".$cliente->getNome()."' where id = ".$cliente->getId();
        } 
        return $this->db->query($query)->fetchAll();
    }

    public function excluirCliente($id) {
       $query = "delete from tb_clientes where id = ".$id;
        return $this->db->query($query)->fetchAll();
    }


} 
