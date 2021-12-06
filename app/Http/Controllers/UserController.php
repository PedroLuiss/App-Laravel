<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        return view('usuarios.show',compact('users'));
    }


}
