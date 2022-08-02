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

    }

    public function store(Request $request)
    {
        
    }

    public function show($admin)
    {
        
    }
}
