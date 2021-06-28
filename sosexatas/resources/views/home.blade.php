<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS - EXATAS</title>
    </head>
    <body>
        <h1>Página Inicial contendo os cards de disciplinas</h1>
        <a href="/disciplina"> Card da disciplina X</a><br>
        <a href="/cadastroDisciplina">Cadastrar disciplina</a><br>
        <a href="/comunidade"> Ver minha comunidade</a><br>
        <a href="/perfil">Ir para o perfil</a>
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


			<div class="wrap card-columns">

            <a href="/cadastroDisciplina" class="form-btn">Adicionar Disciplina</a> </br>

                <div class="row">

                    @foreach($disciplina as $disc)
                    <div class="col-sm-6">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="card-title">{{ $disc->nomeDisc}}</h5>
                                <p class="card-text">Descrição do progresso do aluno(a), a ser configurado.</p>
                                <a href="/disciplinaShow/{{ $disc->idDisc}}" class="form-btn">Vamos estudar?</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>



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

@if(session('msg'))
<script> alert("Disciplina criada com sucesso."); </script>
@endif

</html>
