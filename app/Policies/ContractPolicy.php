<?php

namespace App\Policies;

use App\Contract;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContractPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any contracts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the contract.
     *
     * @param  \App\User  $user
     * @param  \App\Contract  $contract
     * @return mixed
     */
    public function view(User $user, Contract $contract)
    {
        //
    }

    /**
     * Determine whether the user can create contracts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      return true;
    }

    /**
     * Determine whether the user can update the contract.
     *
     * @param  \App\User  $user
     * @param  \App\Contract  $contract
     * @return mixed
     */
    public function update(User $user, Contract $contract)
    {
        return $user->id === $contract->user_id;
    }

    /**
     * Determine whether the user can delete the contract.
     *
     * @param  \App\User  $user
     * @param  \App\Contract  $contract
     * @return mixed
     */
    public function delete(User $user, Contract $contract)
    {
        return $user->id === $contract->user_id;
    }

    /**
     * Determine whether the user can restore the contract.
     *
     * @param  \App\User  $user
     * @param  \App\Contract  $contract
     * @return mixed
     */
    public function restore(User $user, Contract $contract)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the contract.
     *
     * @param  \App\User  $user
     * @param  \App\Contract  $contract
     * @return mixed
     */
    public function forceDelete(User $user, Contract $contract)
    {
        //
    }
}
