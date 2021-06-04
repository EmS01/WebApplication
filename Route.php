<?php
namespace App;
use MF\Init\Bootstrap;
class Route extends Bootstrap {

	protected function initRoutes() {
	
// menu Principal 		
		$routes['menuPrincipal'] = array(
			'route' => '/menuPrincipal',
			'controller' => 'indexController',
			'action' => 'menuPrincipal'
		);

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['sobreNos'] = array(
			'route' => '/sobreNos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);	
		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'indexController',
			'action' => 'index'
		);	
		$routes['validarLogin'] = array(
			'route' => '/validarLogin',
			'controller' => 'indexController',
			'action' => 'validarLogin'
		);

// Cursos
		$routes['produtos'] = array(
			'route' => '/produtos',
			'controller' => 'ProdutosController',
			'action' => 'listaProdutos'
		);

		$routes['incluirProduto'] = array(
			'route' => '/incluirProduto',
			'controller' => 'ProdutosController',
			'action' => 'incluirProduto'
		);

		$routes['salvarProduto'] = array(
			'route' => '/salvarProduto',
			'controller' => 'ProdutosController',
			'action' => 'salvarProduto'
		);

		$routes['alterarProduto'] = array(
			'route' => '/alterarProduto',
			'controller' => 'ProdutosController',
			'action' => 'alterarProduto'
		);



		$routes['excluirProduto'] = array(
			'route' => '/excluirProduto',
			'controller' => 'ProdutosController',
			'action' => 'excluirProduto'
		);


// Clientes 

		$routes['cadastro'] = array(
			'route' => '/cadastro',
			'controller' => 'ClientesController',
			'action' => 'listaClientes'
		);

		$routes['incluirCliente'] = array(
			'route' => '/incluirCliente',
			'controller' => 'ClientesController',
			'action' => 'incluirCliente'
		);

		$routes['salvarCliente'] = array(
			'route' => '/salvarCliente',
			'controller' => 'ClientesController',
			'action' => 'salvarCliente'
		);

		$routes['alterarCliente'] = array(
			'route' => '/alterarCliente',
			'controller' => 'ClientesController',
			'action' => 'alterarCliente'
		);



		$routes['excluirCliente'] = array(
			'route' => '/excluirCliente',
			'controller' => 'ClientesController',
			'action' => 'excluirCliente'
		);

//Receitas
		$routes['Receitas'] = array(
			'route' => '/Receitas',
			'controller' => 'ReceitasController',
			'action' => 'Receitas'
		);

//Receitas
		//$routes['Cadastro'] = array(
			//'route' => '/cadastro',
			//'controller' => 'CadastroController',
			//'action' => 'Cadastro'
		//);


		$this->setRoutes($routes);
	}
}
?>
