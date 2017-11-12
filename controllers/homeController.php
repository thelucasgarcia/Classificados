<?php
class homeController extends controller {

	public function index() {
		$dados = array();
		
		$this->loadTemplate('app','home', $dados);
	}

}