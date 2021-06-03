<?php
	require_once("classeAnimal.php");

	class Cavalo extends Animal{

		public $crina;
		public $corPelo;

		public function __construct($valores){
			parent::__construct($valores);
			$this->crina=$valores["crina"];
			$this->corPelo=$valores["corPelo"];

		}

		public function exibir(){
			echo "<hr /> Cavalo: <br />";
			parent::exibir();
			echo "Tamanho crina: $this->crina <br/>";
			echo "Cor do pêlo: $this->corPelo <br/>";
		}
		
	}

	
?>