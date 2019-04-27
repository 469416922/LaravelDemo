<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Status;

class StatusPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, Status $status)
    {
        // return true;
        return $user->id === $status->user_id;
    }
}
