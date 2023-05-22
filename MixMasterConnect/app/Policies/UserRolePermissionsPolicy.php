<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserRolePermissions;
use Illuminate\Auth\Access\Response;

class UserRolePermissionsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserRolePermissions $userRolePermissions): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserRolePermissions $userRolePermissions): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserRolePermissions $userRolePermissions): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UserRolePermissions $userRolePermissions): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UserRolePermissions $userRolePermissions): bool
    {
        //
    }
}
