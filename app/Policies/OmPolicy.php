<?php

namespace App\Policies;

use App\User;
use App\om;
use Illuminate\Auth\Access\HandlesAuthorization;

class OmPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the om.
     *
     * @param  \App\User  $user
     * @param  \App\om  $om
     * @return mixed
     */
    public function view(User $user, om $om)
    {
       return $user->om->id == $om->id;
    }

    /**
     * Determine whether the user can create oms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the om.
     *
     * @param  \App\User  $user
     * @param  \App\om  $om
     * @return mixed
     */
    public function update(User $user, om $om)
    {
        //
    }

    /**
     * Determine whether the user can delete the om.
     *
     * @param  \App\User  $user
     * @param  \App\om  $om
     * @return mixed
     */
    public function delete(User $user, om $om)
    {
        //
    }

    /**
     * Determine whether the user can restore the om.
     *
     * @param  \App\User  $user
     * @param  \App\om  $om
     * @return mixed
     */
    public function restore(User $user, om $om)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the om.
     *
     * @param  \App\User  $user
     * @param  \App\om  $om
     * @return mixed
     */
    public function forceDelete(User $user, om $om)
    {
        //
    }
}
