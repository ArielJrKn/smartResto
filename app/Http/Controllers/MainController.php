<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view('main.dashboard');
    }

    public function employes(){
        $users = User::with('role')->get();
        return view('main.employes', compact('users'));
    }

    public function showemployes($user){
        $user = User::with('role')->where('id', $user)->first();

        return view('main.detailEmployes', compact('user'));
    }

}
