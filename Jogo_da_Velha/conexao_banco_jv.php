<?php

class db {


       //host
	private $host = 'localhost';

 	   //usuario
	private $usuario = 'root';

 	   //senha
	private $senha = '';

 	   //banco de dados
	private $database = 'jogo_velha_ranking';


	public function conexao_mysql() {


          //criar a conexão
		$conex = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);

		mysqli_set_charset($conex , 'utf8');

		if(mysqli_connect_errno()) {

			echo 'Erro ao tentar se conectar com o Banco de Dados: '.mysqli_connect_error();
		}

		return $conex;
	}
}



?>