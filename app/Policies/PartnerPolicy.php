<?php

namespace App\Policies;

use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerPolicy
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

    public function view(User $user, Partner $partner)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Partner $partner)
    {
        //
    }

    public function delete(User $user, Partner $partner)
    {
        //
    }

    public function restore(User $user, Partner $partner)
    {
        //
    }

    public function forceDelete(User $user, Partner $partner)
    {
        //
    }
}
