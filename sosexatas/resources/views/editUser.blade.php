<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS - EXATAS</title>
    </head>
    <body>
        <h1>Página da registro de usuário</h1>
        <a href="/home/login"> Voltar para tela de login</a><br>
        <a href="/home"> Cadastrar (chama o método de verificação depois vai pra home)</a>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOS - EXATAS</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap">
				<div class="pic js-tilt" data-tilt>
					<img src="/login/images/img-01.png" alt="IMG">
				</div>

				<form class="form validate-form">
					<span class="form-title">
						Editar
					</span>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" placeholder="Nome Completo">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nick" placeholder="Nick">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="cpf" placeholder="CPF">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="end" placeholder="Endereço">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="tel" placeholder="Telefone">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="emailConf" placeholder="Confirme o Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="passConf" placeholder="Confirme a Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-form-btn">
						<button class="form-btn">
							Editar Usuário
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="/home/login">
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Voltar para tela de Perfil
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/login/js/main.js"></script>

</body>
</html>