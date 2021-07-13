<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS - EXATAS</title>
    </head>
    <body>
        <h1>Página da disciplina</h1>
        <a href="/disciplina/quizz"> Fazer Quizz</a><br>
        <a href="/disciplina/ranking"> Ranking</a><br>
        <a href="/home"> Voltar para home</a>
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
				<form class="inputSubject-form">
					<span class="form-title">
						{{$disciplina->nomeDisc}}
					</span>

                    @if(count($topicos) > 0)

                    @foreach($topicos as $top)
                    <div class="table-aguardo">
                        <input id="topico{{$loop->index + 1}}" type="checkbox">
                        <label for="topico{{$loop->index + 1}}" class="topic-table">{{$top->nomeTop}}</label>


                        <table cellspacing="0">
                        <tr> <th>Material Didático</th> </tr>
                        @if(count($materiais[$loop->index]) > 0)
                            @foreach($materiais[$loop->index] as $mat)
                            <tr style="margin:10px" class="subtopic-table" >
                                <td >{{$mat->nome}}</td>
                            </tr>
                            @endforeach
                        @else
                        <tr style="margin:10px" class="subtopic-table" >
                                <td >Poxa, não temos materiais didáticos aqui (ainda) :/</td>
                        </tr>
                        @endif
                        <tr>
                                <td ><a href="/cadastroMaterialDidatico/{{ $disciplina->idDisc}}" style="margin:10px" class="form-btn">Cadastrar Material Didático</a></td>
                        </tr>
                        </table>

                        <table cellspacing="0">
                        <tr> <th>Conteúdo</th> </tr>
                        @if(count($subtopicos[$loop->index]) > 0)
                            @foreach($subtopicos[$loop->index] as $sub)
                            <tr style="margin:10px" class="subtopic-table" >
                            <td> {{$sub->nomeSubTop}}</td>
                            </tr>
                            @endforeach
                        @else
                        <tr style="margin:10px" class="subtopic-table" >
                                <td >Poxa, não temos conteúdo aqui (ainda) :/</td>
                        </tr>
                        @endif
                        <tr>
                                <td ><a href="/cadastroSubTopico/{{ $disciplina->idDisc}}/{{ $top->idTop}}" style="margin:10px" class="form-btn">Cadastrar SubTópico</a></td>
                        </tr>
                        </table>



                    </div>
                    @endforeach

                    @else
                    <div class="table-aguardo">
                        <input id="" type="">
                        <label for="" class="topic-table">Sem tópicos criados (ainda)!</label>
                    </div>
                    @endif
                    <div>
                        <a href="/cadastroTopico/{{ $disciplina->idDisc}}" style="margin:10px" class="form-btn">Cadastrar Tópico</a>
                    </div>

					<div class="text-center p-t-12">
                        <a class="txt2" href="/home">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Voltar para tela de Disciplinas
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
<!--===============================================================================================-->

</body>
</html>
