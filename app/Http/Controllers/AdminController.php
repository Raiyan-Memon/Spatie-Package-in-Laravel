<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\User;
use League\CommonMark\Inline\Parser\AutolinkParser;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('sdf');
        $user = User::all();
        return view('admin.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        if($request->user_idforadd == ''){

            // dd($request->all());
            $userid = $request->user_idforremove;
            $rolename = $request->rolename;
            // dd('asfd'. $roledel);
            $userdata = User::find($userid);
            $userdata->removeRole($rolename);

            return back();

        }
        else{

        $user = $request->user_idforadd;
        $userdata = User::find($user);
        $role = $request->role;
        $userdata->assignRole($role);
        return back();
        }

        // return "store";
        // $role = Role::find();
        // dd($role);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show( $admin)
    {
        $show = User::find($admin);
        $roles = $show->roles;
        // dump($roles);
        return view('admin.details', compact('show', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update( $request,  $admin)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy( $admin)
    {
        dd($admin);
    }
}
