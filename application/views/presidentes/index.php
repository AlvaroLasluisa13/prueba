<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrsdwYvTuKxgkmkZjme4WXEYTW1wRdEVI&callback=initMap" ></script>


	<div class="row">
		<div class="col-md-12" style="height:500px; width: 100%; border:2px solid black;" id="mapaPresidentes">
		</div>
	</div>

	<script type="text/javascript">
		function initMap(){

			var centro=new google.maps.LatLng(-0.9294185047366058, -78.62339778942538);
			var mapPre=new google.maps.Map(document.getElementById('mapaPresidentes'),
			{
				center:centro,
				zoom: 7,
				mapTypeId:google.maps.MapTypeId.HYBRID
			}
			);
			<?php if($presidentes):?>
			<?php foreach ($presidentes as $lugarTemporal):?>
			var coordenadaTemporal= new google.maps.LatLng( <?php echo $lugarTemporal->latitud_pres; ?>,  <?php echo $lugarTemporal->longitud_pres; ?>)
			var marcador=new google.maps.Marker({
				position: coordenadaTemporal,
				title: "<?php echo $lugarTemporal->ciudad_pres?>",
				map:mapPre
			});
			<?php endforeach ?>
			<?php endif ?>
		}//cierre funcion

	</script>




<div class="row">
  <div class="col-md-8">
    <h1>PRESIDENTES</h1>
    <br>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('presidentes/nuevo')?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar presidentes
    </a>
  </div>
</div>

<?php if ($presidentes):?>
   <table class="table table-striped table-bordered table-hover">
     <thead>
       <tr>
         <th>ID:</th>
         <th>CEDULA:</th>
         <th>APELLIDO PATERNO:</th>
         <th>APELLIDO MATERNO:</th>
         <th>NOMBRES:</th>
         <th>PROVINCIA:</th>
         <th>CIUDAD:</th>
         <th>MOVIMIENTO POLÍTICO:</th>
         <th>LATITUD</th>
         <th>LONGITUD</th>
				 <th>TIPO</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($presidentes as $filaTemporal): ?>
       <tr>
         <td><?php echo $filaTemporal->id_pres;?></td>
         <td><?php echo $filaTemporal->ci_pres;?></td>
         <td><?php echo $filaTemporal->apellido_pres;?></td>
         <td><?php echo $filaTemporal->apellido2_pres;?></td>
         <td><?php echo $filaTemporal->nombre_pres;?></td>
         <td><?php echo $filaTemporal->provincia_pres;?></td>
         <td><?php echo $filaTemporal->ciudad_pres;?></td>
         <td><?php echo $filaTemporal->partido_pres;?></td>
         <td><?php echo $filaTemporal->latitud_pres;?></td>
         <th><?php echo $filaTemporal->longitud_pres;?></th>
				 <th><?php echo $filaTemporal->posicion_pres; ?></th>
         <td class="text-center">
           &nbsp;&nbsp;&nbsp;&nbsp;
           <!-- <a href="<?php echo site_url(); ?>/residentes/eliminar/ "></a> -->
          <a href="<?php echo site_url();?>/presidentes/eliminar/<?php echo $filaTemporal->id_pres;?>" title="borrar" return confirm ('¿Estas seguro de eliminar?')"> <i class="glyphicon glyphicon-trash" style="color:red;"> </i> </a>
        </td>
       </tr>
     <?php endforeach;?>
          </tbody>

   </table>
<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>
