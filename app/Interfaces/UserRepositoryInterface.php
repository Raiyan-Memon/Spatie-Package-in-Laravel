<?php

namespace App\Interfaces;

interface UserRepositoryInterface {

    public function all();
    public function getUserById($id);
    public function addRole($user_data, $role_name);
    public function removeRole($user_data, $role_name);

}