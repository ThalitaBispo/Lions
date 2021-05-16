<?php

namespace App\Policies;

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

    public function before(User $user)
    {
         if($user->administrator == 1) {
              return true;
         }
    }

    public function delet(User $user)
    {
        return $user->administrator == 1;
    }

    public function notDeletADM(User $user)
    {
        return $user->administrator == 1;
    }

    public function PDFCashier(User $user)
    {
        return $user->administrator == 1;
    }
}
