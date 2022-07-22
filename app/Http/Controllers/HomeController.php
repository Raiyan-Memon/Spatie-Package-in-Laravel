<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()   
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // Role::create(['id'=> 1, 'name'=>'admin']);
        // Role::create(['id'=> 2, 'name'=>'editor']);
        // Role::create(['id'=> 3, 'name'=>'adder']);
        // Role::create(['id'=> 4, 'name'=>'commenter']);
        // Role::create(['id'=> 5, 'name'=>'deletor']);

        // Permission::create(['name'=>'editpost']);
        // Permission::create(['name'=>'addpost']);
        // Permission::create(['name'=>'commentpost']);
        // Permission::create(['name'=>'deletepost']);



        // Permission::create(['name'=>'write post']);

        // $role = Role::find(5);
        // dd($role);
        // $permission = Permission::find(4);
        // dd($permission);

        // $permission = Permission::create(['name'=>'edit post']);
        // dump($permission);

        // $role->givePermissionTo($permission);
        
        // $permission->removeRole($role);

// $umer = User::find(2);
//         $umer->assignRole('adder');

        // return auth()->user()->getDirectPermissions(); 

        // return auth()->user()->getPermissionsViaRoles(); 

        // return auth()->user()->roles; 


        // return User::Permission('write post')->get();


        // Post::create(['title'=>'Science', 'desc'=>'Science lksdjf dsfj fdljdslkfj ldsjf df dslfjdslf dslfj dsfl jdslf dslfldsfsjdfs dfs fdslkfdsfjlkds jfd dsl']);
        // Post::create(['title'=>'Commerce', 'desc'=>'Commerce Science lksdjf dsfj fdljdslkfj ldsjf df dslfjdslf dslfj dsfl jdslf dslfldsfsjdfs dfs fdslkfdsfjlkds jfd dsl']);
        // Post::create(['title'=>'Biology', 'desc'=>'Biology Science lksdjf dsfj fdljdslkfj ldsjf df dslfjdslf dslfj dsfl jdslf dslfldsfsjdfs dfs fdslkfdsfjlkds jfd dsl']);
        

        return view('home');
    }
}
