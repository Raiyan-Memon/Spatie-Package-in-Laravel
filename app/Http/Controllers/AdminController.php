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
        if ($request->add_role_id == '') {
            $user_id = $request->remove_role_id;
            $role_name = $request->rolename;
            $user_data = $this->admin->get($user_id);
            $this->admin->removeRole($user_data, $role_name);
        } else {
            $user = $request->add_role_id;
            $user_data = $this->admin->get($user);
            $role = $request->role;
            $this->admin->addRole($user_data, $role);
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
