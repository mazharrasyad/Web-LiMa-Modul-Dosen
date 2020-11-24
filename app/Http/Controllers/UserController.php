<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){        
        return view('users.index');
    }

    public function show(){        
        return view('users.show');
    }
}