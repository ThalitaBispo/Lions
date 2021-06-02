<?php

namespace App\Policies;

use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccessPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    public function notADM(User $user)
    {
        return $user->administrator == 1;
    }

}
