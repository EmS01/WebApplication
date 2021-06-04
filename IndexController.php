<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


class IndexController extends Action {

	public function index() {
		
		$this->render('index', 'index');

	}


	public function menuPrincipal() {

		$this->render('menuPrincipal', 'layout1');
	}


	public function sobreNos() {

		$this->render('sobreNos', 'layout3');
	}

	public function validarLogin() {

		$this->render('validarLogin', 'index');
	}


}


?>