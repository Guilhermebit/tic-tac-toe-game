<?php

require_once('conexao_banco_jv.php');

$objDB = new db();
$link = $objDB->conexao_mysql();

//query para selecionar nomes dos usuarios no banco
$sqlselect_players = " SELECT player,pontuacao FROM ranking ORDER BY pontuacao DESC LIMIT 10";

$resultado_id = mysqli_query($link , $sqlselect_players);

$posicao = 0;

if($resultado_id) {

	echo '<table class="table" align="center" border="1">';
	echo '<thead style="background-color:red;color: #fff;">';
	echo '<tr>';
	echo '<th>Posição</th>';
	echo '<th>Nome</th>';
	echo '<th>Pontuaçao</th>';
	echo '</tr>';
	echo '</thead>';

	while($registro = mysqli_fetch_array($resultado_id , MYSQLI_ASSOC)) {

		$posicao += 1;
		$nome_player = $registro['player'];
		$pontuacao = $registro['pontuacao'];

		echo '<tr>';
		echo '<td>'.$posicao.'</td>';
		echo '<td>'.$nome_player.'</td>';
		echo '<td>'.$pontuacao.'</td>';
		echo '</tr>';

	}

	echo '</table>';

} else {

	echo 'Não foi possível efetuar a conexão com o banco de dados';
}

?>