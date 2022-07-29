<?php

namespace App\Repositories;

use App\Interfaces\AdminRepositoryInterface;
use App\User;

class AdminRepository implements AdminRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
    public function get($id)
    {
        return User::find($id);
    }
    public function addRole($user_data, $role_name)
    {
        return $user_data->assignRole($role_name);
    }

    public function removeRole($user_data, $role_name)
    {
        return $user_data->removeRole($role_name);
    }
}
