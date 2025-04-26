<?php

namespace App\Services;

use App\Repositories\TaskRepository;

/**
 * Task Service
 *
 * Contains business logic related to Tasks.
 */
class TaskService
{
    protected $taskRepository;

    /**
     * Inject TaskRepository dependency.
     *
     * @param TaskRepository $taskRepository
     */
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Create a new task using the repository.
     *
     * @param array $data
     * @return mixed
     */
    public function createTask(array $data)
    {
        return $this->taskRepository->create($data);
    }
}
