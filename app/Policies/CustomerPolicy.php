<?php

namespace App\Policies;

use App\Customer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    /**
 * スーパーバイザーは全店舗の顧客を閲覧出来る
 * 以外は 自分が所属する店舗の顧客だけ閲覧出来る
 * @param  \App\Models\User  $user
 * @param  \App\Models\Customer  $customer
 * @return mixed
 */
public function view(User $user, Customer $customer)
{
    return $user->shop_id === $customer->shop_id || $user->isSuperVisor();
}
}
