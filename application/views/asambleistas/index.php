<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrsdwYvTuKxgkmkZjme4WXEYTW1wRdEVI&callback=initMap" ></script>


	<div class="row">
		<div class="col-md-12" style="height:500px; width: 100%; border:2px solid black;" id="mapaAsambleistas">
		</div>
	</div>

	<script type="text/javascript">
		function initMap(){

			var centro=new google.maps.LatLng(-0.9294185047366058, -78.62339778942538);
			var mapaAsam=new google.maps.Map(document.getElementById('mapaAsambleistas'),
			{
				center:centro,
				zoom: 7,
				mapTypeId:google.maps.MapTypeId.HYBRID
			}
			);
			<?php if($asambleistas):?>
			<?php foreach ($asambleistas as $lugarTemporal1):?>
			var coordenadaTemporal= new google.maps.LatLng( <?php echo $lugarTemporal->latitud_asam; ?>,  <?php echo $lugarTemporal->longitud_asam; ?>)
			var marcador=new google.maps.Marker({
				position: coordenadaTemporal,
				title: "<?php echo $lugarTemporal1->ciudad_asam?>",
				map:mapaAsam
			});
			<?php endforeach ?>
			<?php endif ?>
		}//cierre funcion

	</script>

<div class="row">
  <div class="col-md-8">
    <h1>ASAMBLEISTAS NACIONALES</h1>
    <br>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('asambleistas/nuevo')?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-plus"></i>
      Agregar asambleistas
    </a>
  </div>
</div>

<?php if ($asambleistas):?>
   <table class="table table-striped table-bordered table-hover">
     <thead>
       <tr>
         <th>ID:</th>
         <th>CEDULA DE CIIUDADANIA:</th>
         <th>APELLIDO PATERNO:</th>
         <th>APELLIDO MATERNO:</th>
         <th>NOMBRES:</th>
         <th>PROVINCIA:</th>
         <th>CIUDAD:</th>
         <th>MOVIMIENTO POLÍTICO:</th>
         <th>LATITUD</th>
         <th>LONGITUD</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($asambleistas as $filaTemporal): ?>
       <tr>
         <td><?php echo $filaTemporal->id_asam;?></td>
         <td><?php echo $filaTemporal->ci_asam;?></td>
         <td><?php echo $filaTemporal->apellido_asam;?></td>
         <td><?php echo $filaTemporal->apellido2_asam;?></td>
         <td><?php echo $filaTemporal->nombre_asam;?></td>
         <td><?php echo $filaTemporal->provincia_asam;?></td>
         <td><?php echo $filaTemporal->ciudad_asam;?></td>
         <td><?php echo $filaTemporal->partido_asam;?></td>
         <td><?php echo $filaTemporal->latitud_asam;?></td>
         <th><?php echo $filaTemporal->longitud_asam;?></th>
         <td class="text-center">
           &nbsp;&nbsp;&nbsp;&nbsp;
           <!-- <a href="<?php echo site_url(); ?>/residentes/eliminar/ "></a> -->
          <a href="<?php echo site_url();?>/asambleistas/eliminar/<?php echo $filaTemporal->id_asam;?>" title="borrar" return confirm ('¿Estas seguro de eliminar?')"> <i class="glyphicon glyphicon-trash" style="color:red;"> </i> </a>
        </td>
       </tr>
     <?php endforeach;?>
          </tbody>

   </table>
<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>
