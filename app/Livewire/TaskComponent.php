<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{

    public $taskStatus = 0;
    public $descriptionTask; 
    public $taskContent; 

    public $taskId; 

    public function saveTask() { 
        $task = new Task; 

        $task->taskDescription = $this->descriptionTask;
        $task->taskStatus = $this->taskStatus;
        $task->save();
        $this->descriptionTask = ''; 

        $this->dispatch('save-task'); 
        $this->dispatch('close-modal');
    }

    public function editTask($id) {
        $this->taskId = $id;
        $task = Task::find($id);
        $this->descriptionTask = $task->taskDescription;
        $this->taskStatus = $task->taskStatus;

        $this->dispatch('open-modal-edit');
    }
    public function updateTask() {

        Task::where('idTaskContent', $this->taskId)->update([
            'taskDescription' => $this->descriptionTask, 
            'taskStatus' => $this->taskStatus, 
        ]);


        $this->descriptionTask = '';
        $this->dispatch('update-task');
        $this->dispatch('close-modal');
    
    }

    public function deleteTask($id) {
        $task = Task::find($id);
        $this->taskId = $task->idTaskContent;
        $this->descriptionTask = $task->taskDescription;
        $this->taskStatus = $task->taskStatus;
        $this->dispatch('open-modal-delete'); 
    }

    public function destroyTask() {
        $task = Task::find($this->taskId);
        $task->delete(); 

        $this->dispatch('destroy-task');
        $this->dispatch('clode-modal');
    }
    
    public function render()
    {
        $this->taskContent = Task::where('taskStatus', '!=', 'INACTIVO')->get(); 
        return view('livewire.task-component', ['taskContent'=> $this->taskContent]);
    }
}
