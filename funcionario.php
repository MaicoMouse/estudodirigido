<?php


		


	class Funcionario
	{
		
		public $departamento;
		public $salario;
		public $dataEntrada;
		public $CPF;

		public function recebeAumento(){
			$this->salario = $this->salario * 0.1;
		}

		public function calculaGanhoAnual(){
			$totalSalario = $this->salario * 12;
			return $totalSalario;
		}

		function __toString()
			{
				return "O funcionario de cpf {$this->CPF}, que trabalha no departamento {$this->departamento} e recebe um salario de {$this->salario}, e que entrou no dia {$this->dataEntrada->getData()} existe nesse mundo";
			}
			

	}

		class Data
		{
			
			public $m;
			public $d;
			public $a;


			function __construct($m, $d, $a)
			{
				$this->m = $m;
				$this->d = $d;
				$this->a = $a; 
			}

			public function getData(){
				$data = $this->m."/".$this->d."/".$this->a;
				return $data;
			}
		}
