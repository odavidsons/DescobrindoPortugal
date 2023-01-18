<?php
require 'includes/conexao.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Sugestoes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="includes/style.css">
	<link rel="stylesheet" href="includes/footer.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include_once('header.php'); ?>
	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action="processo_sugestao.php" id='register' method="POST">
					<span class="contact3-form-title">
						Sugestões
					</span>

					<div class="wrap-input3 validate-input" data-validate="Nome em falta">
						<input class="input3" type="text" id="user" name="utilizador" placeholder="Seu nome">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Local em falta">
						<input class="input3" type="text" id="nome" name="local" placeholder="Nome do local">
						<span class="focus-input3"></span>
					</div>


					<div class="wrap-input3 validate-input" data-validate = "Descrição é necessária">
						<textarea class="input3" name="descricao" id="descricao" placeholder="Descrição"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button type="submit" name="enviar" class="contact3-form-btn">
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include_once('footer.php'); ?>
</body>
</html>
