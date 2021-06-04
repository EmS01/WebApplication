<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


class CadastroController extends Action {


	public function Cadastro() {

		$this->render('cadastro', 'layout2');
	}

}


?>