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
				<form class="inputSubject-form" action=@if($subtopico)'/subtopicoUpdateBD/{{$disciplinaID}}/{{$topicoId}}/{{$subtopico->idSubTop}}'@else'/subtopicoInsertBD/{{$disciplinaID}}/{{$topicoId}}' @endif action="/topicoInsertBD/{{$disciplinaID}}" method="POST">
                @csrf <!--===== LARAVEL PRECISA PRO FORM FUNCIONAR ======-->
                @if($subtopico) @method('PUT') @endif
					<span class="form-title">
                    @if($subtopico) Altera????o Subt??pico @else Cadastro de Subt??pico @endif
					</span>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" placeholder="Nome do Sub??pico" @if($subtopico) value="{{$subtopico->nomeSubTop}}"@endif required>
						<span class="focus-input100"></span>
					</div>


					<div class="container-form-btn">
                        <button class="form-btn" type="submit">
                            @if($subtopico) Alterar Subt??pico @else Criar Subt??pico @endif
						</button>
					</div>

					<div class="text-center p-t-12">
                        <a class="txt2" href="/disciplinaShow/{{$disciplinaID}}">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        Voltar para tela da Disciplina
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
