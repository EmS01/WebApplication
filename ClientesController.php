<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


//os models
use App\Models\Cliente;


class ClientesController extends Action {

	public function listaClientes() {
		$cliente = Container::getModel('Cliente');
		$clientes = $cliente->getClientes();
		$this->view->dados = $clientes;
		$this->render('listaClientes', 'layout2');
	}

	public function incluirCliente() {
		$this->render('incluirCliente', 'layout2');
	}

	public function salvarCliente() {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
		$cliente = Container::getModel('Cliente');
		$cliente->setId($id);
		$cliente->setNome($nome);
        $cliente->salvarCliente($cliente); 
		$this->listaClientes();
	}

	public function alterarCliente() {
        $id = $_GET["id"];
		$cliente = Container::getModel('Cliente');
		$clientes = $cliente->nomeClientes($id);
		$this->view->dados = $clientes;
		$this->render('alterarCliente', 'layout2');
	}

	public function excluirCliente() {
        $id = $_GET["id"];
		$cliente = Container::getModel('Cliente');
		$clientes = $cliente->excluirCliente($id);
		$this->listaClientes();
	}



}