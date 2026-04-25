<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Boisson;
use App\Models\User;
use App\Models\Role;
use App\Models\Verre;
use App\Models\Table;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view('main.dashboard');
    }

    public function commandes(){
        return view('main.commande.commandes');
    }
    
    public function tables(){
        $tables = Table::All();
        return view('main.table.table', compact('tables'));
    }

    public function addtables(){
        $serveurs = User::with('role')->where('id_role', 3)->get();

        return view('main.table.addtable', compact('serveurs'));
    }

    public function employes(){
        $users = User::with('role')->get();

        return view('main.employes', compact('users'));
    }

    public function produits(){
        $entrees = Product::where('type', 'Entrée')->get();
        $plats = Product::where('type', 'Plat')->get();
        $desserts = Product::where('type', 'Dessert')->get();
        $boissons = Boisson::All();
        $verres = Verre::All();
        return view('main.product.produits', compact('verres', 'entrees', 'plats', 'desserts', 'boissons'));
    }

public function detailproduit(Product $product)
{
    return view('main.product.detailproduit', compact('product'));

}

public function detailboisson($product)
{
    $product = Boisson::where('id', $product)->first();
    return view('main.product.detailboisson', compact('product'));

}


    public function setting(){
        $verres = Verre::All();
        return view('main.setting', compact('verres'));
    }

    public function showemployes($user){
        $user = User::with('role')->where('id', $user)->first();

        return view('main.detailEmployes', compact('user'));
    }

}
