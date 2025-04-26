<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreRequest;
use App\Services\TaskService;
use Illuminate\Http\JsonResponse;

/**
 * Task Controller
 *
 * Handles incoming HTTP requests related to tasks.
 */
class TaskController extends Controller
{
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

        return response()->json([
            'message' => 'Task created successfully.',
            'data' => $task
        ], 201);
    }
}
