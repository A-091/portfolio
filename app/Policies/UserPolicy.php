<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * スーパーバイザーのみ閲覧できる
     *
     * @param \App\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isSuperVisor();
    }

    /**
     * スーパーバイザーと自分自身のみ閲覧できる
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        return $user->id === $model->id || $user->isSuperVisor();
    }

}
