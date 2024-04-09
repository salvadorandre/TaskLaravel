<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class task 
 * 
 * @property int $idTaskContent
 * @property string $taskDescription
 * @property string $taskStatus
 * 
 * @package App/Models
 */
class Task extends Model
{
    protected $table = 'taskcontent';
	protected $primaryKey = 'idTaskContent';
	public $timestamps = false;
}
