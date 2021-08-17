<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS - EXATAS</title>
    </head>
    <body>
        <h1>Página do quizz</h1>
        <a href="/disciplina/quizz/resultado"> Submeter</a><br>
        <a href="/disciplina"> Voltar para disciplina</a>
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
				<form class="inputSubject-form" action="/result/{{$topico->idQuiz}}" method="POST">
                @csrf <!--===== LARAVEL PRECISA PRO FORM FUNCIONAR ======-->
                @if($topico) @method('PUT') @endif

					<span class="form-title">
						@if($topico) Quiz: {{$topico->nome}} @endif
					</span>

                @foreach($topico->perguntas as $sub)
                    <div class="table-aguardo">

                        <input id="{{$loop->index + 1}}" type="checkbox">
                        <label for="{{$loop->index + 1}}" class="topic-table">{{$sub->enunciado}}
                        </label>


                    <table cellspacing="0">
                    <tr>
                        <th>Opções</th>
                    </tr>

                    <div class="wrap-input100 validate-input" >
                        @for ($i = 1; $i < 6; $i++)

                            @if($sub['opc' . $i] != null)
                            <tr style="margin:10px" class="subtopic-table">
                                    <td>
                                    <input class="txt2" type="radio" name="{{$sub->idPerg}}" value ='{{$i}}' required>
                                    {{$sub['opc' . $i]}}
                                    </td>
                            </tr>
                            @endif
                        @endfor
                    </div>

                    </table>

                @endforeach

					<div class="container-form-btn">
                        <button class="form-btn" onclick="return confirm('Certeza disso?');" type="submit">
                        Responder Quiz
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

