<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('role', 2)
        ->orWhere('role',1)
        ->get();
        return view('admin/home', ['users' => $users]);
    }
    public function user($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if ($user->role == 1) {
            $result = DB::table('users')
              ->where('id', $id)
              ->update(['role' => 2]);
        } elseif ($user->role == 2) {
            $result = DB::table('users')
              ->where('id', $id)
              ->update(['role' => 1]);
        }
        return redirect()->back();
    }
}
