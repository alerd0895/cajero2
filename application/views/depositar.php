    
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a>Saldo</a></li>
            <li class="active"><a href="#">Depositar<span class="sr-only">(current)</span></a></li>
            <li><a>Retirar</a></li>
          </ul>
        </div>-->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Depositar</h2>
          <div class="col-md-4">
          <select class="form-control" id="sel1">
						<option value="100">$100.00</option>
						<option value="200">$200.00</option>
						<option value="500">$500.00</option>
						<option value="1000">$1,000.00</option>
						<option value="2000">$2,000.00</option>
						<option value="5000">$5,000.00</option>
          </select>
          <br><button type="button" class="btn btn-success" id="btn_depositar">Depositar</button>
          

            
          </div>
        </div>
      </div>
    </div>
		<script> 
			(function ($) {
				var base_url = "<?php echo base_url(); ?>";
				var id_usuario = "<?php echo $this->session->userdata("id"); ?>";
				//console.log(id_usuario);
				$("#btn_depositar").on("click",function(e){
					//capturar valor del select
					var select = $("#sel1").val();
					//console.log(select);
					$.ajax({
						url : base_url + "dashboard/deposito/" + id_usuario + "/" + select,
						type : "POST",
						success: function(resp){
							if(resp == "1"){
								alert("Se realizo el deposito correctamente");
								$.ajax({
									url: base_url + "dashboard/consulta/" + id_usuario,
									type: "POST",
									success: function(resp){
										//console.log(resp);
										$("#monto_real").html(resp);
									}
								});
							}else{
								alert("Ocurrio un error intentelo de nuevo");
							}
						}
					});
				});
			})(jQuery); 
		</script>
