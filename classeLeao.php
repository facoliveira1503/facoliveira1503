<?php
	require_once "classeAnimal.php";	
	class Leao extends Animal {

		public $juba;
		
		public function __construct($valores){
			parent::__construct($valores);
			$this->juba=$valores["juba"];

		}

		public function exibir(){
			echo "<hr /> Leão: <br />";
			parent::exibir();
			echo "Tamanho juba: $this->juba <br/>";
		}
	}
	
?>