<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cajero</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="assetss/css/signin.css">
	<link rel="stylesheet" href="assetss/css/dashboard.css">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Opciones</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Buscar...">
          </form>
        </div>
      </div>
    </nav>

    
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a>Saldo </a></li>
            <li><a>Depositar</a></li>
            <li class="active"><a href="#">Retirar<span class="sr-only">(current)</span></a></li>
          </ul>
        </div>-->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Retirar</h2>
          <div class="col-md-4">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">-- Seleccione cantidad --
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">$100.00</a></li>
                <li><a href="#">$200.00</a></li>
                <li><a href="#">$500.00</a></li>
                <li><a href="#">$1,000.00</a></li>
                <li><a href="#">$2,000.00</a></li>
                <li><a href="#">$5,000.00</a></li>
              </ul>
            </div>
            <br><input type="numero" id="cantidad_retiro" class="form-control invisible" placeholder="Ingrese cantidad">
            <br><button type="button" class="btn btn-danger">Retirar</button>
            <button type="button" class="btn btn-primary" onclick = "otraCantidad()">Otra cantidad</button>
          </div>
        </div>
      </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="assetss/js/holder.min.js"></script>
</body>
</html>
