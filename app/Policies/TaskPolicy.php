<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Model\User;
use App\Model\Task;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
