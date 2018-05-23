<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Jogo da velha</title>
	<script src="jquery-2.2.1.js"></script>
	<link rel="stylesheet" href="css/estilo.css">

	<!-- bootstrap - link cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script type="text/javascript">

		$(document).ready( function(){
			$.ajax({
				url: 'recupera_ranking.php',
				type: 'POST',
				success: function(data){
					$('#ranking_player').html(data);
				}
			});
		});

	</script>

</head>

<body>
	<div id="ranking_jv">
		<h2>TOP 10 - JOGO DA VELHA</h2>
		<div id="ranking_player">
		</div>
		
	</div>
	<div id="voltar_menu_principal">
		<span><a href="index.php">Menu Principal</a></span>
	</div>
</body>
</html>