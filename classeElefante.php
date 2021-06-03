<?php
	require_once "classeAnimal.php";	
	class Elefante extends Animal{

		public $tromba;

		public function __construct($valores){
			parent::__construct($valores);
			$this->tromba=$valores["tromba"];

		}

		public function exibir(){
			echo "<hr /> Elefante: <br />";
			parent::exibir();
			echo "Tamanho tromba: $this->tromba <br/>";
		}
	}
	
?>