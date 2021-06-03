<?php
	require_once "classeAnimal.php";

	class Rinoceronte extends Animal{

		public $chifre;
		
		public function __construct($valores){
			parent::__construct($valores);
			$this->chifre=$valores["chifre"];

		}

		public function exibir(){
			echo "<hr /> Rinoceronte: <br />";
			parent::exibir();
			echo "Tamanho chifre: $this->chifre <br/>";
		}
	}

	
?>