
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
          <select class="form-control" id="sel2">
						<option value="100">$100.00</option>
						<option value="200">$200.00</option>
						<option value="500">$500.00</option>
						<option value="1000">$1,000.00</option>
						<option value="2000">$2,000.00</option>
						<option value="5000">$5,000.00</option>
          </select>
            <br><input type="numero" id="cantidad_retiro" class="form-control invisible" placeholder="Ingrese cantidad">
            <br><button type="button" class="btn btn-danger" id="retirar">Retirar</button>
            <button type="button" class="btn btn-primary" id="btn_otraCantidad">Otra cantidad</button>
          </div>

      </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="assetss/js/holder.min.js"></script>
	<script>
	 (function ($) {
		var base_url = "<?php echo base_url(); ?>";
		var id_usuario = "<?php echo $this->session->userdata("id"); ?>";
		$("#btn_otraCantidad").on("click",function(e){
			$("#cantidad_retiro").removeClass('invisible');
			$("#sel2").addClass('invisible');
		});
		$("#retirar").on("click",function(e){
			//para el valor del select
			var select = 0;
			if($("#sel2").hasClass('invisible')){
				//alert("valor del input");
				//usar valor del input
				select = $("#cantidad_retiro").val();
			}else{
				//alert("valor del select");
				//usar valor del select
				select = $("#sel2").val();
			}
			//var select = $("#sel2").val();
			$.ajax({
				url : base_url + "dashboard/retiro/" + id_usuario + "/" + select,
				type : "POST",
				success: function(resp){
					if(resp == "1"){
						alert("Se realizo el retiro correctamente");
					}else{
						alert("Ocurrio un error intentelo de nuevo");
					}
				}
			});
		})
	 })(jQuery);	
	</script>
</body>
</html>
