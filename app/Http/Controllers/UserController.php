<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }
    
    public function index()
    {
        $user = $this->user->all();
        return view('admin.index', compact('user'));
    }

    public function store(Request $request)
    {
        if ($request->addRoleId == '') {
            $userId = $request->removeRoleId;
            $roleName = $request->roleName;
            $RemoveUserData = $this->user->getUserById($userId);
            $this->user->removeRole($RemoveUserData, $roleName);
            return back()->with('roleRemoved','Role has Remove'); 
        } 
            $user = $request->addRoleId;
            $userData = $this->user->getUserById($user);
            $role = $request->role;
            $this->user->addRole($userData, $role);
            return back()->with('roleAssigned','Role has Assigned');         
       
    }

    public function show($id)
    {
        $show = $this->user->getUserById($id);
        $roles = $show->roles;
        return view('admin.details', compact('show', 'roles'));
    }

}
