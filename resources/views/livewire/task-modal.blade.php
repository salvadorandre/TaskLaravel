
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Tarea</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="saveTask">
            <div class="form-group">
                <label>Descripcion Tarea</label>
                <textarea wire:model="descriptionTask" cols="5" rows="5" placeholder="descripcion de la tarea..." class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Estado Tarea</label>
                <select class="form-control" wire:model="taskStatus">
                    <option value="0">ACTIVO</option>
                    <option value="1">INACTIVO</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>


  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tarea</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="updateTask">
            <div class="form-group">
                <label>Descripcion Tarea</label>
                <textarea wire:model="descriptionTask" cols="5" rows="5" placeholder="descripcion de la tarea..." class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Estado Tarea</label>
                <select class="form-control" wire:model="taskStatus">
                    <option value="0">ACTIVO</option>
                    <option value="1">TERMINAR</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">EDITAR</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Tarea</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form wire:submit.prevent="destroyTask">
                <h1 style="text-align: center;">Desea eliminar esta tarea?</h1>
                <div class="form-group">
                    <label>Descripcion Tarea</label>
                    <textarea disabled wire:model="descriptionTask" cols="5" rows="5" placeholder="descripcion de la tarea..." class="form-control"></textarea>
                </div>
    
                <div class="form-group">
                    <label>Estado Tarea</label>
                    <select disabled class="form-control" wire:model="taskStatus">
                        <option value="0">ACTIVO</option>
                        <option value="1">TERMINAR</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>