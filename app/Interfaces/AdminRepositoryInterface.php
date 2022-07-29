<?php

namespace App\Interfaces;

interface AdminRepositoryInterface
{
    public function all();
    public function get($id);
    public function addRole($user_data, $role_name);
    public function removeRole($user_data, $role_name);
}
