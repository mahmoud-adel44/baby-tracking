<?php

namespace App\Policies;

use App\Models\BabyRecord;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BabyRecordPolicy
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

    public function view(User $user, BabyRecord $babyRecord)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, BabyRecord $babyRecord)
    {
        //
    }

    public function delete(User $user, BabyRecord $babyRecord)
    {
        //
    }

    public function restore(User $user, BabyRecord $babyRecord)
    {
        //
    }

    public function forceDelete(User $user, BabyRecord $babyRecord)
    {
        //
    }
}
