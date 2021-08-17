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
				<form class="inputSubject-form" action=@if($topico)'/questionUpdateBD/{{$disciplinaID}}/{{$topico->fk_Quiz_id}}'@else'/questionInsertBD/{{$disciplinaID}}' @endif method="POST">
                @csrf <!--===== LARAVEL PRECISA PRO FORM FUNCIONAR ======-->
                @if($topico) @method('PUT') @endif
					<span class="form-title">
						@if($topico) Alteração de Pergunta @else Cadastro de Pergunta @endif
					</span>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="enunciado" placeholder="Enunciado da Pergunta" @if($topico) value="{{$topico->enunciado}}"@endif required>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="opc1" placeholder="Opção 01 " @if($topico) value="{{$topico->opc1}}"@endif required>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="opc2" placeholder="Opção 02 " @if($topico) value="{{$topico->opc2}}"@endif required>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="opc3" placeholder="Opção 03 - Opcional " @if($topico) value="{{$topico->opc3}}"@endif>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="opc4" placeholder="Opção 04 - Opcional " @if($topico) value="{{$topico->opc4}}"@endif>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="opc5" placeholder="Opção 05 - Opcional " @if($topico) value="{{$topico->opc15}}"@endif>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="txt2" type="radio" name="resposta" value ='1' placeholder="Resposta" @if($topico && $topico->resposta == 1) checked @endif> 01
                        <input class="txt2" type="radio" name="resposta" value ='2' placeholder="Resposta" @if($topico && $topico->resposta == 2) checked @endif> 02
                        <input class="txt2" type="radio" name="resposta" value ='3' placeholder="Resposta" @if($topico && $topico->resposta == 3) checked @endif> 03
                        <input class="txt2" type="radio" name="resposta" value ='4' placeholder="Resposta" @if($topico && $topico->resposta == 4) checked @endif> 04
                        <input class="txt2" type="radio" name="resposta" value ='5' placeholder="Resposta" @if($topico && $topico->resposta == 5) checked @endif> 05
						<span class="focus-input100"></span>
					</div>


					<div class="container-form-btn">
                        <button class="form-btn" type="submit">
                        @if($topico) Alterar Pergunta @else Criar Pergunta @endif
						</button>
					</div>

					<div class="text-center p-t-12">
                        <a class="txt2" href="/backQuiz/{{$disciplinaID}}">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        Voltar para tela de Alteração do Quiz
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
