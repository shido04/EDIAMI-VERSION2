<div class="modal fade" id="modalCurso" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Nuevo Cursos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCurso" name="formCurso">
          <input type="hidden" name="cursos_id" id="cursos_id" value="">
          <div class="form-group">
            <label for="nombre">Nombre del curso:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" name="autor" id="autor">
          </div>
          <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" class="form-control" name="imagen" id="imagen" accept=".jpg,.jpeg,.png">
          </div>
          <div class="form-group">
            <label for="video">Video:</label>
            <input type="file" class="form-control" name="video" id="video" accept=".mp4,.mkv,.avi">
          </div>
          <div class="form-group">
              <label for="listCategoria">Categoria</label>
              <select class="form-control" name="listCategoria" id="listCategoria">
                  <option value="1">Oficce</option>
                  <option value="2">Navegacion</option>
                  <option value="3">Seguridad</option>
                  <option value="4">Manualidades</option>
              </select>
          </div>
          <div class="form-group">
              <label for="listNivel">Nivel</label>
              <select class="form-control" name="listNivel" id="listNivel">
                  <option value="1">Principiante</option>
                  <option value="2">Intermedio</option>
                  <option value="3">avanzado</option>
              </select>
          </div>
          <div class="form-group">
                <label for="actividad">Actividad:</label>
                <textarea class="form-control" name="actividad" id="actividad" cols="30" rows="10"></textarea>
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