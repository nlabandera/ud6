<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin')->with('users',User::all())->with('roles',Role::all());
    }

    public function updateUserRole(Request $request,User $user){
        $user->role = $request->role;
        $user->save();
        return redirect('/admin');
    }
}
