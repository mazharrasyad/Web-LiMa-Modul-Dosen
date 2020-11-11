<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function get_all_user(){
        // return response()->json(User::all(), 200);
        return array('results' => User::all());
    }
}
