<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;


class ReceitasController extends Action {


	public function Receitas() {

		$this->render('Receitas', 'layout4');
	}

}


?>