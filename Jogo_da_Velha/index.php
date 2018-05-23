<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Jogo da velha</title>
	<script src="jquery-2.2.1.js"></script>
	<script type="text/javascript" src="javascript/jogo.js"></script>
	<link rel="stylesheet" href="css/estilo.css">

	<script type="text/javascript">

		$(document).ready( function(){

			$('#grava_placar').click( function(){
            // nomes
            var id_nome_player_1 = $('#nome_jogador_1').html();
            var id_nome_player_2 = $('#nome_jogador_2').html();
			// placares
			var id_placar_player_1 = $('#placar_jogador_1').html();
			var id_placar_player_2 = $('#placar_jogador_2').html();

			$.ajax({
				url: 'placar.php',
				type: 'POST',
				data: {nome_1 : id_nome_player_1 , placar_1 : id_placar_player_1 , nome_2 : id_nome_player_2 , placar_2 : id_placar_player_2},
				success: function(data){
					alert(data);
				}
			});

		});

		});

	</script>

</head>

<body>

	<div id="container_principal">
		<h1>JOGO DA VELHA - (Beta)</h1>
		<div id="placar"><h3><a href="top_ranking.php">Top 10 Jogadores</a></h3></div>
		<div id="menu_jogadores">
			<table border="0" width="600px;">
				<tbody>
					<tr>
						<td align="center">
							<img src="imagens/jogador_1.png" />
							<br />
							<input id="entrada_apelido_jogador_1" type="text" maxlength="10" placeholder="Apelido jogador 1" style="border: 0px;" />
						</td>
						<td align="center">
							<img id="btn_iniciar_jogo" src="imagens/iniciar.png" style="width: 80px;"/>
						</td>
						<td align="center">
							<img src="imagens/jogador_2.png" />
							<br />
							<input id="entrada_apelido_jogador_2" type="text" maxlength="10" placeholder="Apelido jogador 2" style="border: 0px;" />
						</td>
					</tr>
				</table>
			</div>
		</div>	

		<div id="palco_jogo" style="display:none; margin-top:50px; text-align:center">
			<div style="display:inline-block;">
				<img src="imagens/jogador_1.png" />
				<br />
				<span id="nome_jogador_1"></span>
			</div>

			<div style="display:inline-block;">
				<table border="0">
					<tr>
						<td style="border-bottom: solid 1px red; border-right:solid 1px red;">
							<div class="jogada" id="a-1" style="width:100px; height:100px;"></div>
						</td>
						<td style="border-bottom: solid 1px red; border-right:solid 1px red;">
							<div class="jogada" id="a-2" style="width:100px; height:100px;"></div>
						</td>
						<td style="border-bottom: solid 1px red;">
							<div class="jogada" id="a-3" style="width:100px; height:100px;"></div>
						</td>
					</tr>
					<tr>
						<td style="border-bottom: solid 1px red; border-right:solid 1px red;">
							<div class="jogada" id="b-1" style="width:100px; height:100px;"></div>
						</td>
						<td style="border-bottom: solid 1px red; border-right:solid 1px red;">
							<div class="jogada" id="b-2" style="width:100px; height:100px;"></div>
						</td>
						<td style="border-bottom: solid 1px red;">
							<div class="jogada" id="b-3" style="width:100px; height:100px;"></div>
						</td>
					</tr>
					<tr>
						<td style="border-right: solid 1px red;">
							<div class="jogada" id="c-1" style="width:100px; height:100px;"></div>
						</td>
						<td style="border-right: solid 1px red;">
							<div class="jogada" id="c-2" style="width:100px; height:100px;"></div>
						</td>
						<td>
							<div class="jogada" id="c-3" style="width:100px; height:100px;"></div>
						</td>
					</tr>
				</table>
			</div>

			<div style="display:inline-block;">
				<img src="imagens/jogador_2.png" />
				<br />
				<span id="nome_jogador_2"></span>
			</div>
			<br />
			<br />

			<!-- Placar de Jogadores -->
			<div id="placar_jogadores" style="display: none;">
				<table>
					<tr>
						<td><img src="imagens/jogador_1.png" width="50px"/></td>
						<td id="placar_jogador_1" style="font-size: 40px; color: red;"><h3>0</h3></td>
						<td><h1 style="color: red;">X</h1></td>
						<td id="placar_jogador_2" style="font-size: 40px; color: blue;"><h3>0</h3></td>
						<td><img src="imagens/jogador_2.png" width="50px"/></td>
					</tr>
				</table>
			</div>

		</div>

		<div id="revanche" style="display: none;">
			<span>Revanche</span>
		</div>
		<div id="grava_placar" style="display: none;">
			<span>Registrar o Placar</span>
		</div>
		<div id="menu_principal" style="display:none;">
			<span>Menu Principal</span>
		</div>


	</body>
	</html>