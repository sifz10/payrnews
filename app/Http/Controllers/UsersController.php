<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function allUsers()
    {
      $allUsers = DB::table('users')->get();
      return view('Dashboard.users',compact('allUsers'));
    }
}
