<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S.O.S. EXATAS</title>

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<!--===============================================================================================-->

</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">
        @if(session()->get('tipoUsuario') == 0)
            @include('sideNavBardAdmin')
        @else
            @include('sideNavBardUser')
        @endif
		<div class="container-login100">
			<div class="wrap card-columns">
            @if(session()->get('tipoUsuario') == 1)
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="card-title" style="padding: 10%" >
                            Bem vindo, {{session()->get('nomeUsuario')}}
                        </h5>
                    </div>
                    @if(session()->get('avatar_id'))
                        @foreach ($avatar as $av)
                        <div class="col-sm-6">
                            <img width="100px" height="100px" align="right" src="{{asset("storage/avatar/$av->endImg")}}" alt="Avatar">
                        </div> 
                        @endforeach               
                    @else
                        <div class="col-sm-6">
                            <a href="/home/{{ session()->get('idUsuario') }}/avatar" class="form-btn">Escolha seu avatar!</a>
                        </div>
                    @endif
            @endif

            <div class="row">
                
                @foreach($disciplina as $disc)
                <div class="col-sm-6">
                    <div class="card ">
                        <div class="card-body">
                            @if(session()->get('tipoUsuario') == 0)
                            <h5 class="card-title">{{ $disc->nomeDisc}}
                                <a href="#"> <button style="float: right; margin-left: 5px;" id="close-image"><img src="https://img.icons8.com/ios-glyphs/20/000000/delete-sign.png"/></button> </a>
                                <a href="/cadastroDisciplina/{{ $disc->idDisc}}"> <button  style="float: right; margin-left: 5px; " id="close-image"><img src="https://img.icons8.com/material-rounded/20/000000/edit--v1.png"/></button> </a>
                            </h5>
                            <p class="card-text">Descrição da visualização do adm, a ser configurado.</p>
                            <a href="/disciplinaShow/{{ $disc->idDisc}}" style="margin:10px" class="form-btn">Explorar</a>
                            
                            @else
                            <h5 class="card-title">{{ $disc->nomeDisc}}
                                <button  style="float: right; margin-left: 5px;" id="close-image"><img src="https://img.icons8.com/fluent/20/000000/crown.png"/></button>
                            </h5>
                            <p class="card-text">Descrição do progresso do aluno(a), a ser configurado.</p>
                            <a href="/disciplinaShow/{{ $disc->idDisc}}" class="form-btn">Vamos estudar?</a>
                            @endif
                            
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
<!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>

@if(session('msg'))
<script> alert("Disciplina criada com sucesso."); </script>
@endif

@if(session('msgEdit'))
<script> alert("Disciplina editada com sucesso."); </script>
@endif

</html>
