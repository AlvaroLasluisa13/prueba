<h1>Nuevo Candidato a Presidente</h1>

<form class="" action="<?php echo site_url(); ?>/presidentes/guardar" method="post">

  <div class="row">
    <div class="col-md-4">
      <label for="">Cedula de ciudadanía:</label>
      <br>
      <input type="number" class="form-control" name="ci_pres" value="" id="ci_pres" placeholder="Ingrese identificación">
      </div>
  </div>
      <div class="row">
        <div class="col-md-3">
           <label for="">Apellido Paterno:</label>
           <br>
           <input type="text" class="form-control" name="apellido_pres" value="" id="apellido_pres" placeholder="Ingrese apellido">
        </div>
        <div class="col-md-3">
          <label for="">Apellido Materno:</label>
          <br>
          <input type="text" class="form-control"name="apellido2_pres" value="" id="apellido2_pres " placeholder="Ingrese apellido">
        </div>
        <div class="col-md-6">
          <label for="">Nombres:</label>
          <br>
          <input type="text" class="form-control"name="nombre_pres" value="" id="nombre_pres" value=""  placeholder="Ingrese nombre">
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
      <input type="text" class="form-control"name="ciudad_pres" value="" id="ciudad_pres" placeholder="Ingrese ciudad">
    </div>
    <div class="col-md-4">
      <label for="">Movimiento político:</label>
      <br>
      <input type="text" class="form-control"name="partido_pres" value="" id="partido_pres" placeholder="Ingrese partido">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <label for="">Latitud:</label>
      <br>
      <input type="number" class="form-control" name="latitud_pres" value="" id="latitud_pres" placeholder="Ingrese latitud">
    </div>
    <div class="col-md-3">
      <label for="">Longigtud:</label>
      <br>
      <input type="number" class="form-control" name="longitud_pres" value="" id="longitud_pres" placeholder="Ingrese longitud">
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
      <a href="<?php echo site_url(); ?>/presidentes/index" class="btn btn-danger">Cancelar </a>
    </div>

  </div>

</form>
