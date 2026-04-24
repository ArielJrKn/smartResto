<?php

namespace App\Http\Controllers;

use App\Models\Product;


use App\Models\Verre;
use App\Models\Boisson;
use App\Models\Verre;
use App\Models\Boisson;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {





            if($request->type === 'Boisson'){
                $request->validate([
                    'name' => 'required|string|max:100',
                    'description' => 'required|string|max:255',
                    'type' => 'required|string|max:100',
                    'cover' => 'nullable|image|max:4093',
                    'priceBottle' => 'required|integer',
                    'priceVerre' => 'required|integer',
                    'percentAlcohol' => 'nullable|integer',
                    'volumeBottle' => 'required|integer',
                    'stock' => 'required|integer',
                    'id_verre' => 'required|integer',
                    'disponible' => 'nullable',
                ]);
                $verre = Verre::where('id', $request->id_verre)->first('volumeVerre');
                $nbre = $request->volumeBottle / $verre->volumeVerre;
                Boisson::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'cover' => $request->file('cover')->store('boisson', 'public'),
                    'priceBottle' => $request->priceBottle,
                    'priceVerre' => $request->priceVerre,
                    'percentAlcohol' => $request->percentAlcohol,
                    'nbreVerre' => $nbre,
                    'volumeBottle' => $request->volumeBottle,
                    'stock' => $request->stock,
                    'id_verre' => $request->id_verre,
                    'disponible' => $request->boolean('disponible'),
                ]);

                return back()->with('success', "Boisson ajouter avec success");  

            }else{
                $request->validate([
                    'name' => 'required|string|max:100',
                    'description' => 'required|string|max:255',
                    'type' => 'required|string|max:100',
                    'cover' => 'nullable|image|max:4093',
                    'price' => 'required|integer',
                    'disponible' => 'nullable',
                    'time' => 'nullable|string|max:100',
                ]);
                    // dd($request->all());

                $product = Product::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'cover' => $request->file('cover')->store('product', 'public'),
                    'price' => $request->price,
                    'disponible' => $request->boolean('disponible'),
                ]);

                return back()->with('success', "Produit ajouter avec success");  
            }           
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
    }

    public function addVerre(Request $request){
        try {
             $request->validate([

                'name' => 'required|string|max:100',
                'volume' => 'required|numeric',
                'photo' => 'nullable|image|max:4093',
             ]);

             Verre::create([
                'name' => $request->name,
                'volumeVerre' => $request->volume,
                'photo' => $request->file('photo')->store('verre', 'public'),

             ]);

             return back()->with('success', "Verre ajouter avec succès");

            $request->validate([


                'name' => 'required|string|max:100',
                'volume' => 'required|numeric',
                'photo' => 'nullable|image|max:4093',
             ]);

             Verre::create([
                'name' => $request->name,
                'volumeVerre' => $request->volume,
                'photo' => $request->file('photo')->store('verre', 'public'),

             ]);

             return back()->with('success', "Verre ajouter avec succès");
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(Product $product)
    {
        $verres = Verre::All();
        return view('main.product.editProduit', compact('verres', 'product'));

    public function edit(string $id)

    public function edit(Product $product)

    {
        $verres = Verre::All();
        return view('main.product.editProduit', compact('verres', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, Product $product)
    {
                try {

            if($request->type === 'Boisson'){
                $request->validate([
                    'name' => 'required|string|max:100',
                    'description' => 'required|string|max:255',
                    'type' => 'required|string|max:100',
                    'cover' => 'nullable|image|max:4093',
                    'priceBottle' => 'required|integer',
                    'priceVerre' => 'required|integer',
                    'percentAlcohol' => 'nullable|integer',
                    'volumeBottle' => 'required|integer',
                    'stock' => 'required|integer',
                    'id_verre' => 'required|integer',
                    'disponible' => 'nullable',
                ]);
                $verre = Verre::where('id', $request->id_verre)->first('volumeVerre');
                $nbre = $request->volumeBottle / $verre->volumeVerre;
                Boisson::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'cover' => $request->file('cover')->store('boisson', 'public'),
                    'priceBottle' => $request->priceBottle,
                    'priceVerre' => $request->priceVerre,
                    'percentAlcohol' => $request->percentAlcohol,
                    'nbreVerre' => $nbre,
                    'volumeBottle' => $request->volumeBottle,
                    'stock' => $request->stock,
                    'id_verre' => $request->id_verre,
                    'disponible' => $request->boolean('disponible'),
                ]);

                return back()->with('success', "Boisson ajouter avec success");  

            }else{
                $request->validate([
                    'name' => 'required|string|max:100',
                    'description' => 'required|string|max:255',
                    'type' => 'required|string|max:100',
                    'cover' => 'nullable|image|max:4093',
                    'price' => 'required|numeric',
                    'disponible' => 'nullable',
                    'time' => 'nullable|string|max:100',
                ]);
                    // dd($request->all());

                $product->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'cover' => $request->file('cover')->store('product', 'public'),
                    'price' => $request->price,
                    'disponible' => $request->boolean('disponible'),
                ]);

                return redirect()->route('produits')->with('success', "Produit modifier avec success");  
            }           
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }

    public function update(Request $request, string $id)

    public function update(Request $request, Product $product)

    {
                try {

            if($request->type === 'Boisson'){
                $request->validate([
                    'name' => 'required|string|max:100',
                    'description' => 'required|string|max:255',
                    'type' => 'required|string|max:100',
                    'cover' => 'nullable|image|max:4093',
                    'priceBottle' => 'required|integer',
                    'priceVerre' => 'required|integer',
                    'percentAlcohol' => 'nullable|integer',
                    'volumeBottle' => 'required|integer',
                    'stock' => 'required|integer',
                    'id_verre' => 'required|integer',
                    'disponible' => 'nullable',
                ]);
                $verre = Verre::where('id', $request->id_verre)->first('volumeVerre');
                $nbre = $request->volumeBottle / $verre->volumeVerre;
                Boisson::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'cover' => $request->file('cover')->store('boisson', 'public'),
                    'priceBottle' => $request->priceBottle,
                    'priceVerre' => $request->priceVerre,
                    'percentAlcohol' => $request->percentAlcohol,
                    'nbreVerre' => $nbre,
                    'volumeBottle' => $request->volumeBottle,
                    'stock' => $request->stock,
                    'id_verre' => $request->id_verre,
                    'disponible' => $request->boolean('disponible'),
                ]);

                return back()->with('success', "Boisson ajouter avec success");  

            }else{
                $request->validate([
                    'name' => 'required|string|max:100',
                    'description' => 'required|string|max:255',
                    'type' => 'required|string|max:100',
                    'cover' => 'nullable|image|max:4093',
                    'price' => 'required|numeric',
                    'disponible' => 'nullable',
                    'time' => 'nullable|string|max:100',
                ]);
                    // dd($request->all());

                $product->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'type' => $request->type,
                    'cover' => $request->file('cover')->store('product', 'public'),
                    'price' => $request->price,
                    'disponible' => $request->boolean('disponible'),
                ]);

                return redirect()->route('produits')->with('success', "Produit modifier avec success");  
            }           
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
    }

    /**
     * Remove the specified resource from storage.
     */




    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('produits')->with('success', 'Plat supprimer avec success');


    }

    public function destroyBoisson(Boisson $product)
    {
        $product->delete();
        return redirect()->route('produits')->with('success', 'Boisson supprimer avec success');

    }

    public function destroyBoisson(Boisson $product)
    {
        $product->delete();
        return redirect()->route('produits')->with('success', 'Boisson supprimer avec success');


}
