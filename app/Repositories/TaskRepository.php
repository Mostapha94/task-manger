<?php

namespace App\Repositories;

use App\Models\Task;

/**
 * Task Repository
 *
 * Handles database operations related to Task.
 */
class TaskRepository
{
    /**
     * Create a new task.
     *
     * @param array $data
     * @return Task
     */
    public function create(array $data): Task
    {
        return Task::create($data);
    }
}
