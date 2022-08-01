<?php

namespace App\Http\Controllers;

use App\Interfaces\AdminRepositoryInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(AdminRepositoryInterface $admin)
    {
        $this->admin = $admin;
    }
    public function index()
    {
        $user = $this->admin->all();
        return view('admin.index', compact('user'));
    }

    public function store(Request $request)
    {
        if ($request->addRoleId == '') {
            $userId = $request->removeRoleId;
            $roleName = $request->roleName;
            $RemoveUserData = $this->admin->get($userId);
            $this->admin->removeRole($RemoveUserData, $roleName);
        } else {
            $user = $request->addRoleId;
            $userData = $this->admin->get($user);
            $role = $request->role;
            $this->admin->addRole($userData, $role);
        }
        return back();
    }

    public function show($admin)
    {
        $show = $this->admin->get($admin);
        $roles = $show->roles;
        return view('admin.details', compact('show', 'roles'));
    }
}
