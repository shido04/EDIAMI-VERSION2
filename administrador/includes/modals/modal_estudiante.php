<div class="modal fade" id="modalEstudiante" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Nuevo estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEstudiante" name="formEstudiante">
        <input type="hidden" name="idEstudiante" id="idEstudiante" value="">
          <div class="form-group">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="form-group">
            <label for="control-label">Direccion:</label>
            <input type="text" class="form-control" name="direccion" id="direccion">
          </div>
          <div class="form-group">
            <label for="control-label">Cedula:</label>
            <input type="text" class="form-control" name="cedula" id="cedula">
          </div>
          <div class="form-group">
            <label for="control-label">Contraseña:</label>
            <input type="password" class="form-control" name="clave" id="clave">
          </div>
          <div class="form-group">
            <label for="control-label">Telefono:</label>
            <input type="text" class="form-control" name="telefono" id="telefono">
          </div>
          <div class="form-group">
            <label for="control-label">Correo:</label>
            <input type="text" class="form-control" name="correo" id="correo">
          </div>
          <div class="form-group">
            <label for="control-label">Nivel de Estudio:</label>
            <input type="text" class="form-control" name="nivel_est" id="nivel_est">
          </div>
          <div class="form-group">
              <label for="listEstado">Estado</label>
              <select class="form-control" name="listEstado" id="listEstado">
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
              </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary" id="action" type="submit">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>