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
