<?php

require_once('conexao_banco_jv.php');

//nome e pontuacao do player 1

$nome_player_1 = $_POST['nome_1'];
$placar_player_1 = $_POST['placar_1'];

//nome e pontuacao do player 2

$nome_player_2 = $_POST['nome_2'];
$placar_player_2 = $_POST['placar_2'];


$objDB = new db();
$link = $objDB->conexao_mysql();

//query para selecionar nomes dos usuarios no banco
$sqlinsert_players = " INSERT INTO ranking (player , pontuacao) values ('$nome_player_1' , '$placar_player_1') , ('$nome_player_2' , '$placar_player_2')";

$resultado_id = mysqli_query($link , $sqlinsert_players);

if($resultado_id) {

	echo 'Inserido no Banco de Dados';


} else {

	echo 'Não foi possível efetuar a conexão com o banco de dados';
}

?>