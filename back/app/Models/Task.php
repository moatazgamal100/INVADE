<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'description',
        'status',
        'category',
        'due_date',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public static function createTask(array $taskData)
    {

        $task=self::create($taskData);
        return $task;
    }
    public static function updateTask( array $taskData)
    {

        $task=self::update($taskData);
        return $task;
    }
}
