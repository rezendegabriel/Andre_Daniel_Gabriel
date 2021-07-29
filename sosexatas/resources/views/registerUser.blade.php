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
    <title>S.O.S - EXATAS</title>
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

<script language="Javascript">

</script>


</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap">
				<div class="pic js-tilt" data-tilt>
					<img src="/login/images/img-01.png" alt="IMG">
				</div>

                <!-- validate-form tirei do form para teste -->
				<form class="form validate-form" name="f1" action="/createUser" method="POST">
                @csrf <!--===== LARAVEL PRECISA PRO FORM FUNCIONAR ======-->
                @method('PUT')
					<span class="form-title">
						Cadastro Usuário
					</span>

                    <div class="wrap-input100 validate-input"  data-validate = "Digite um Nome Completo válido" >
						<input class="input100" type="text" name="name" placeholder="Nome Completo" @if(session()->get('values')) value='{{Session::get('values')[0]}}' @endif >
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input"  data-validate = "Nick somente com letras e números" >
						<input class="input100" type="text" name="nick" placeholder="Nick" @if(session()->get('values')) value='{{Session::get('values')[1]}}' @endif>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input"  data-validate = "Digite um CPF válido, sem pontos ou traços">
						<input class="input100" type="text" name="cpf" placeholder="CPF" @if(session()->get('values')) value='{{Session::get('values')[2]}}' @endif>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Digite um telefone válido no formato xxxxxxxxxxx" >
						<input class="input100" type="text" name="tel" placeholder="Telefone" @if(session()->get('values')) value='{{Session::get('values')[3]}}' @endif>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um email válido: ex@abc.xyz">
						<input class="input100" type="text" id="email1" name="email" placeholder="Email" @if(session()->get('values')) value='{{Session::get('values')[4]}}' @endif>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input"  data-validate = "Digite um email válido: ex@abc.xyz">
                        <div id="msgemail"></div>
						<input class="input100" type="text" id="email2" name="email" placeholder="Confirme o Email" @if(session()->get('values')) value='{{Session::get('values')[4]}}' @endif>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite uma Senha, ao menos um número e uma letra">
						<input class="input100" type="password" id="pass1" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Digite uma Senha, ao menos um número e uma letra">
						<input class="input100" type="password" id="pass2" name="pass" placeholder="Confirme a Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Digite uma Senha, ao menos um número e uma letra">

					<span class="focus-input100"></span>
						<span class="" style="color: red" id="erros">
                        @if(session()->get('erros'))
                        @foreach (Session::get('erros') as $av)
                            {{$av}}  |
                        @endforeach
                        @endif


						</span>
					</div>

					<div class="container-form-btn">
						<button class="form-btn">
							Criar Conta
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="/home/login">
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Voltar para tela de Login
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
