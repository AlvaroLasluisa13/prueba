<h1>Nuevo Candidato a Asamblesita</h1>

<form class="" action="<?php echo site_url(); ?>/asambleistas/guardar" method="post">

  <div class="row">
    <div class="col-md-4">
      <label for="">Cedula de ciudadanía:</label>
      <br>
      <input type="number" class="form-control" name="ci_asam" value="" id="ci_asam" placeholder="Ingrese identificación">
      </div>
  </div>
      <div class="row">
        <div class="col-md-3">
           <label for="">Apellido Paterno:</label>
           <br>
           <input type="text" class="form-control" name="apellido_asam" value="" id="apellido_asam" placeholder="Ingrese apellido">
        </div>
        <div class="col-md-3">
          <label for="">Apellido Materno:</label>
          <br>
          <input type="text" class="form-control"name="apellido2_asam" value="" id="apellido2_asam " placeholder="Ingrese apellido">
        </div>
        <div class="col-md-6">
          <label for="">Nombres:</label>
          <br>
          <input type="text" class="form-control"name="nombre_asam" value="" id="nombre_asam" value=""  placeholder="Ingrese nombre">
        </div>
      </div>

  <div class="row">
    <div class="col-md-4">
      <label for="">Provincia:</label>
      <br>
      <select type="text" class="form-control" name="provincia_asam" class="form-control input-sm" required>
        <option >AZUAY</option>slot
        <option >BOLIVAR</option>slot
        <option >CAÑAR</option>slot
        <option >CARCHI </option>slot
        <option >CHIMBORAZO</option>slot
        <option >COTOPAXI</option>slot
        <option >EL ORO</option>slot
        <option >ESMERALDAS</option>slot
        <option >GALAPAGOS</option>slot
        <option >GUAYAS</option>slot
        <option >IMBABURA</option>slot
        <option >LOJA</option>slot
        <option >LOS RIOS</option>slot
        <option >MANABÍ</option>slot
        <option >MORONA SANTIAGO</option>slot
        <option >NAPO</option>slot
        <option >ORELLANA</option>slot
        <option >PASTAZA</option>slot
        <option >PICHINCHA</option>slot
        <option >SANTA ELENA</option>slot
        <option >SANTO DOMINGO DE LOS TSACHILAS</option>slot
        <option >SUCUMBIOS</option>slot
        <option >TUNGURAGUA</option>slot
        <option >ZAMORA CHINCHIPE</option>slot
        </select>
    </div>
  </div>

    <div class="col-md-4">
      <label for="">Ciudad:</label>
      <br>
      <input type="text" class="form-control"name="ciudad_asam" value="" id="ciudad_asam" placeholder="Ingrese ciudad">
    </div>
    <div class="col-md-4">
      <label for="">Movimiento político:</label>
      <br>
      <input type="text" class="form-control"name="partido_asam" value="" id="partido_asam" placeholder="Ingrese partido">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <label for="">Latitud:</label>
      <br>
      <input type="float" class="form-control" name="latitud_" value="" id="latitud_asam" placeholder="Ingrese latitud">
    </div>
    <div class="col-md-3">
      <label for="">Longigtud:</label>
      <br>
      <input type="float" class="form-control" name="longitud_asam" value="" id="longitud_asam" placeholder="Ingrese longitud">
    </div>
    <div class="col-md-3">
      <label for="">Tipo de Posisicon politica:</label>
      <select type="text" class="form-control" name="posicion_asam" id="posicion_asam" class="form-control input-sm" required>
          <option >IZQUIERDA</option>slot
          <option >DERECHA</option>slot
      </select>
    </div>
  </div>
  <br> <br><br>
  <div class="row">
    <div class="col-md-12 text-center">
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
      <a href="<?php echo site_url(); ?>/asambleistas/index" class="btn btn-danger">Cancelar </a>
    </div>

  </div>

</form>
