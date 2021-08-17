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
				<form class="inputSubject-form" action=@if($topico)'/quizUpdateBD/{{$disciplinaID}}/{{$topico->idQuiz}}'@else'/quizInsertBD/{{$disciplinaID}}' @endif method="POST">
                @csrf <!--===== LARAVEL PRECISA PRO FORM FUNCIONAR ======-->
                @if($topico) @method('PUT') @endif
					<span class="form-title">
						@if($topico) Alteração Quiz @else Cadastro de Quiz @endif
					</span>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" placeholder="Nome do Quiz" @if($topico) value="{{$topico->nome}}"@endif required>
						<span class="focus-input100"></span>
					</div>

                @if($topico)
                    <table cellspacing="0">
                    <tr>
                        <th>Perguntas</th>
                    </tr>

                    @if(count($topico->perguntas) > 0)
                        @foreach($topico->perguntas as $sub)
                                <tr style="margin:10px" class="subtopic-table">
                                    <td> {{$sub->enunciado}}
                                    @if(session()->get('tipoUsuario') == 0) <a href="#"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/ios-glyphs/20/000000/delete-sign.png"/> </a> @endif
                                    @if(session()->get('tipoUsuario') == 0) <a href="/cadastroQuestion/{{ $topico->idQuiz}}/{{ $sub->idPerg }}"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/material-rounded/20/000000/edit--v1.png"/> </a> @endif
                                    </td>
                                </tr>
                        @endforeach
                    @else
                            <tr style="margin:10px" class="subtopic-table">
                                <td>Poxa, não temos perguntas (ainda) :/</td>
                            </tr>
                            @endif
                    </table>
                @endif

                    <div>
                        @if($topico) <a href="/cadastroQuestion/{{$topico->idQuiz}}" style="margin:10px" class="form-btn">Cadastrar Pergunta</a> @endif
                    </div>

					<div class="container-form-btn">
                        <button class="form-btn" type="submit">
                        @if($topico) Alterar Quiz @else Criar Quiz @endif
						</button>
					</div>

					<div class="text-center p-t-12">
                        <a class="txt2" href="/disciplinaShowTop/{{$disciplinaID}}">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        Voltar para tela da Disciplina
                    </a>
                </div>
				</form>
			</div>
		</div>
	</div>


@if(session('msg25')) <script> alert("Pergunta criado com sucesso."); </script> @endif

@if(session('msg30')) <script> alert("Teste"); </script> @endif

@if(session('msg26')) <script> alert("Pergunta alterado com sucesso."); </script> @endif


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
