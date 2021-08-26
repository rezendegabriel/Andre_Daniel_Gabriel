



<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS - EXATAS</title>
    </head>
    <body>
        <h1>Página da sua comunidade de amigos</h1>
        <a href="/home">Voltar da home</a>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
<!--===============================================================================================-->
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        @include('sidenavbard')   
		<div class="container-login100">
			<div class="wrap card-columns">
                <div class="col-sm-12" >
                    <h2>Bem vindo a sua página de comunidade {{ session()->get('nomeUsuario')}}</h2>
                </div> 
               
                    @foreach($usuarios as $u)
                    @if(session()->get('idUsuario') != $u->idUsuario && $u->tipo != 0)
                        <div class="col-sm-12">
                            <div class="card ">
                                <div class="card-body">
                                    <h5>{{ $u->nome}} level {{ $u->level}}</h5>
                                </div>
                            </div>
                        </div>
                    @endif 
                    
                    @endforeach
                
                
                <div class="wrap-input100 col-sm-12" >
                    <input class="input100" type="text" name="amigo" placeholder="Digite o nome ou nick do seu amigo">
                    <span class="focus-input100"></span>
                    <a href="/cadastroDisciplina" class="form-btn">Adicionar Amigo</a>
                </div>
                <div class="text-center p-t-12">
                        <a class="txt2" href="/perfil">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Voltar para tela de perfil
                        </a>
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
</html>
