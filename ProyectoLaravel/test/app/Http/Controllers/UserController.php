<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function index()
    {
       // $users = DB::table('users')->get();
        $users = User::all();

        

        $title = 'Listado de usuarios';

     //   return view('users.index')
    //       ->with('users', User::all())
     //   ->with('title', 'Listado de usuarios');

        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
