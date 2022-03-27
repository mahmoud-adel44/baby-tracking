<?php

namespace App\Policies;

use App\Models\Baby;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class babiesPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Baby $babies)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Baby $babies)
    {
        //
    }

    public function delete(User $user, Baby $babies)
    {
        //
    }

    public function restore(User $user, Baby $babies)
    {
        //
    }

    public function forceDelete(User $user, Baby $babies)
    {
        //
    }
}
