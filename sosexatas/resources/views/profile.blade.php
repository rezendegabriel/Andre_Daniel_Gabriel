<!-- <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS - EXATAS</title>
    </head>
    <body>
        
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
                <div class="col-sm-6">
                    <h1>Olá {{ session()->get('nomeUsuario')}}!</h1> </br>
                    <h4> você está no nível ZERO </h4>

                </div>
                @if(session()->get('avatar_id'))
                        @foreach ($avatar as $av)
                        <div class="col-sm-6">
                            <img width="100px" height="100px" align="right" src="{{asset("storage/avatar/$av->endImg")}}" alt="Avatar">
                        </div> 
                        @endforeach
                @endif
                <div class="card-body">
					<a class="form-btn" href="/comunidade"> Ir para sua página de comunidade </a>
				</div>
                <div class="card-body">
					<a class="form-btn" href="/editarUsuario"> Editar dados </a>
				</div>
				<div class="text-center p-t-12">
                        <a class="txt2" href="/home/{{session()->get('idUsuario')}}">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Voltar para tela de Disciplinas
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
