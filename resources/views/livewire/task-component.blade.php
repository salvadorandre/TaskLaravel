<div style="padding: 5em">


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h1>Lista de Tareas</h1>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Nueva Tarea
                    </button>
                    <br>
                    <table class="table table-stripedd" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tarea</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($taskContent as $item)
                                <tr>
                                    <td>{{ $item->idTaskContent }}</td>
                                    <td>{{ $item->taskDescription }}</td>
                                    <td>{{$item->taskStatus}}</td>
                                    <td>
                                        <button wire:click="editTask({{$item->idTaskContent}})" class="btn btn-primary">Editar</button>
                                        <button wire:click="deleteTask({{$item->idTaskContent}})" class="btn btn-danger">Terminar</button>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.task-modal')
</div>
