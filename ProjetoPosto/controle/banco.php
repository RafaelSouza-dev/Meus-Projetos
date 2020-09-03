<?php 

	class Banco
	{
		private $host;  
		private $db;   
		private $user; 
		private $pass; 

		public function __construct()
		{
			$this ->host  = "127.0.0.1";  //servidor (pode ser ip ou dominio)
			$this ->db    = "clinica_medica";        // nome do banco de dados
			$this ->user  = "root";       //usuario para acesso ao banco
			$this ->pass  = ""; 
		}

		public function novaConexao ($h, $banco, $usuario, $senha)
		{
			$this ->host = $h;
			$this ->db   = $banco;
			$this ->user = $usuario;
			$this ->pass = $senha;
		}

		public function conectar()
		{
			$con = mysqli_connect($this->host,$this->user,$this->pass,$this->db) or die ("Problemas na conexão") ;//Tem que colocar na ordem host,user,pass e db
			return ($con);
		}  
	} 

    $banco = new Banco();
			$con = $banco->conectar();
			
            $sql = "SELECT * FROM pacientes";	
?>