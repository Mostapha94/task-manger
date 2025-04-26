<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreRequest;
use App\Services\TaskService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;


/**
 * Task Controller
 *
 * Handles incoming HTTP requests related to tasks.
 */
class TaskController extends Controller
{
    use ApiResponse;

    protected $taskService;

    /**
     * Inject TaskService dependency.
     *
     * @param TaskService $taskService
     */
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * Store a newly created task in storage.
     *
     * @param TaskStoreRequest $request
     * @return JsonResponse
     */
    public function store(TaskStoreRequest $request): JsonResponse
    {
        $task = $this->taskService->createTask($request->validated());
        return $this->success($task, 'Task created successfully.', 201);
    }
}
