<?php
	
	abstract class Animal{

		public $peso;
		public $altura;
		public $data_nascimento;
		public $sexo;

		public function __construct($valores){
			$this->peso=$valores["peso"];
			$this->altura=$valores["altura"]; 
			$this->data_nascimento=$valores["data_nascimento"]; 
			$this->sexo=$valores["sexo"];
		}
		public function exibir(){
			echo "Peso: $this->peso <br/>";
			echo "Altura: $this->altura <br/>";
			echo "Data nascimento: $this->data_nascimento <br/>";
			echo "Sexo: $this->sexo <br/>";
		}
    }

?>