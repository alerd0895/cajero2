
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
