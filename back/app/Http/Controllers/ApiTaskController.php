<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Resources\TaskResource;
use App\Http\Requests\TaskRequest;



class ApiTaskController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page', 10);

        $tasks = Task::paginate($perPage);

        return TaskResource::collection($tasks);
    }

    public function store(TaskRequest $request)
    {
        $Task=Task::createTask($request->validated());

        return response()->json(['message' => 'Course created successfully', 'data' => $Task], 201);
    }

    public function show(Task $Task)
    {
        return new TaskResource($Task);

    }

    public function update(TaskRequest $request, Task $Task)
    {
        $Task->update($request->validated());
        return response()->json(['message' => 'Course updated successfully'], 201);
    }

    public function destroy(Task $Task)
    {
        $Task->delete();
        return response()->json(['message' => 'Task deleted successfully'], 201);
    }
}
?>
