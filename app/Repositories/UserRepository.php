<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface{


    public function all()
    {
        return User::all();
    }

    public function getUserById($id)
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