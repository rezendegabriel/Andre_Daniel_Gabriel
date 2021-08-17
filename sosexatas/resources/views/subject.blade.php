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
    <link rel="icon" type="image/png" href="/login/images/icons/favicon.ico" />
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
                        <label for="topico{{$loop->index + 1}}" class="topic-table">{{$top->nomeTop}}
                            @if(session()->get('tipoUsuario') == 0) <a href="#"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/ios-glyphs/20/000000/delete-sign.png" /> </a> @endif
                            @if(session()->get('tipoUsuario') == 0) <a href="/cadastroTopico/{{ $disciplina->idDisc}}/{{ $top->idTop }}"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/material-rounded/20/000000/edit--v1.png" /> </a> @endif
                        </label>


                        <table cellspacing="0">
                            <tr>
                                <th>Material Didático</th>
                            </tr>
                            @if(count($materiais[$loop->index]) > 0)
                            @foreach($materiais[$loop->index] as $mat)
                            <tr style="margin:10px" class="subtopic-table">
                                <td>
                                    {{$mat->nome}}
                                    @if(session()->get('tipoUsuario') == 0) <a href="#"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/ios-glyphs/20/000000/delete-sign.png" /> </a> @endif
                                    @if(session()->get('tipoUsuario') == 0) <a href="/cadastroMaterialDidatico/{{ $mat->fk_Topico_id}}/{{$mat->idMat}}"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/material-rounded/20/000000/edit--v1.png" /> </a> @endif
                                    <a href="{{asset("storage/app/public/arquivos/teste.pdf")}}" download target="_blank"> <button style="float: right; margin-left: 15px; " id="close-image"><img src="https://img.icons8.com/ios-glyphs/15/000000/download-from-cloud--v1.png" /> <a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr style="margin:10px" class="subtopic-table">
                                <td>Poxa, não temos materiais didáticos aqui (ainda) :/</td>
                            </tr>
                            @endif

                            @if(session()->get('tipoUsuario') == 0)
                            <tr>
                                <td><a href="/cadastroMaterialDidatico/{{ $disciplina->idDisc}}" style="margin:10px" class="form-btn">Cadastrar Material Didático</a></td>
                            </tr>
                            @endif

                        </table>

                        <table cellspacing="0">
                            <tr>
                                <th>Conteúdo</th>
                            </tr>
                            @if(count($subtopicos[$loop->index]) > 0)
                            @foreach($subtopicos[$loop->index] as $sub)
                            <tr style="margin:10px" class="subtopic-table">
                                <td> {{$sub->nomeSubTop}}
                                @if(session()->get('tipoUsuario') == 0) <a href="#"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/ios-glyphs/20/000000/delete-sign.png"/> </a> @endif
                                @if(session()->get('tipoUsuario') == 0) <a href="/cadastroSubTopico/{{ $disciplina->idDisc}}/{{ $top->idTop }}/{{$sub->idSubTop}}"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/material-rounded/20/000000/edit--v1.png"/> </a> @endif
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr style="margin:10px" class="subtopic-table">
                                <td>Poxa, não temos conteúdo aqui (ainda) :/</td>
                            </tr>
                            @endif

                            @if(session()->get('tipoUsuario') == 0)
                            <tr>
                                <td><a href="/cadastroSubTopico/{{ $disciplina->idDisc}}/{{ $top->idTop}}" style="margin:10px" class="form-btn">Cadastrar SubTópico</a></td>
                            </tr>
                            @endif

                        </table>

                        <table cellspacing="0">
                            <tr>
                                <th>Quizzes</th>
                            </tr>
                            @if(count($quizzes[$loop->index]) > 0)
                            @foreach($quizzes[$loop->index] as $quiz)
                            <tr style="margin:10px" class="subtopic-table">
                                <td> {{$quiz->nome}}
                                @if(session()->get('tipoUsuario') == 0) <a href="#"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/ios-glyphs/20/000000/delete-sign.png"/> </a> @endif
                                @if(session()->get('tipoUsuario') == 0) <a href="/cadastroQuiz/{{ $top->idTop}}/{{  $quiz->idQuiz }}"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/material-rounded/20/000000/edit--v1.png"/> </a> @endif
                                @if(session()->get('tipoUsuario') == 1) <a href="/disciplina/quizz/{{ $top->idTop}}/{{ $quiz->idQuiz}}"> <img style="float: right; margin-left: 5px;" src="https://img.icons8.com/emoji/25/000000/video-game-emoji.png"/> </a> @endif
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr style="margin:10px" class="subtopic-table">
                                <td>Poxa, não temos nenhum quiz pronto (ainda) :/</td>
                            </tr>
                            @endif

                            @if(session()->get('tipoUsuario') == 0)
                            <tr>
                                <td><a href="/cadastroQuiz/{{ $top->idTop}}" style="margin:10px" class="form-btn">Cadastrar Quiz</a></td>
                            </tr>
                            @endif

                        </table>



                    </div>
                    @endforeach

                    @else
                    <div class="table-aguardo">
                        <input id="" type="">
                        <label for="" class="topic-table">Sem tópicos criados (ainda)!</label>
                    </div>
                    @endif

                    @if(session()->get('tipoUsuario') == 0)
                    <div>
                        <a href="/cadastroTopico/{{ $disciplina->idDisc}}" style="margin:10px" class="form-btn">Cadastrar Tópico</a>
                    </div>
                    @endif

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

    @if(session('msg')) <script> alert("Topico criado com sucesso.");  </script>  @endif

    @if(session('msgEdit')) <script> alert("Topico Alterado com sucesso."); </script> @endif

    @if(session('msg2')) <script> alert("SubTopico criado com sucesso.");  </script>  @endif

    @if(session('msg3')) <script> alert("SubTopico Alterado com sucesso."); </script> @endif

    @if(session('msg4')) <script> alert("Material Didático criado com sucesso.");  </script>  @endif

    @if(session('msg5')) <script> alert("Material Didático alterado com sucesso."); </script> @endif

    @if(session('msg15')) <script> alert("Quiz criado com sucesso."); </script> @endif

    @if(session('msg16')) <script> alert("Quiz alterado com sucesso."); </script> @endif




    <!--===============================================================================================-->
    <script src="/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login/vendor/bootstrap/js/popper.js"></script>
    <script src="/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="/login/js/main.js"></script>
    <!--===============================================================================================-->

</body>

</html>
