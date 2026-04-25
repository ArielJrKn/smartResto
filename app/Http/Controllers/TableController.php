<?php

namespace App\Http\Controllers;
use App\Models\Table;
use App\Models\User;
use App\Models\Product;
use App\Models\Boisson;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TableController extends Controller
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
            $request->validate([
                'number' => 'required|string|max:255',
                'libelle' => 'required|string|max:255',
                'zone' => 'required|string|max:255',
                'places' => 'required|string|max:255',
                'id_serveur' => 'required|integer|exists:users,id',
                'status' => 'nullable',
                'notes' => 'nullable|string|max:255',
            ]);


            $table = Table::create([
                'number' => $request->number,
                'libelle' => $request->libelle,
                'places' => $request->places,
                'id_serveur' => $request->id_serveur,
                'status' => $request->status ? 'Libre' : 'Indisponible',
                'notes' => $request->notes,
                'zone' => $request->zone,
            ]);

            $url = route('showTable', $table->id);

            // 3️⃣ Créer le dossier s'il n'existe pas
                $dossier = public_path('qrcodes');
                if (!file_exists($dossier)) {
                    mkdir($dossier, 0755, true);
                }

                // 4️⃣ Générer et sauvegarder l'image QR code
                $nomFichier = 'table_' . $table->id . '.svg';
                $cheminComplet = $dossier . '/' . $nomFichier;

                QrCode::format('svg')
                      ->size(300)       // taille en pixels
                      ->generate($url, $cheminComplet);

                 // 5️⃣ Enregistrer le chemin du QR code dans la base
        $table->update(['qr_code' => 'qrcodes/' . $nomFichier]);

            return redirect()->route('table')->with('success', "Table ajouter avec success");
        } catch (\Illuminate\Validation\ValidationException $e) {
             // dd($e->errors());
             return back()->with('error', "Erreur enregistrement");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        $entrees = Product::where('type', 'Entrée')->get();
        $plats = Product::where('type', 'Plat')->get();
        $desserts = Product::where('type', 'Dessert')->get();
        $boissons = Boisson::All();
        return view('main.table.showTable', compact('table', 'entrees', 'plats', 'desserts', 'boissons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit($table)
    {
        $table = Table::with('user')->where('id', $table)->first();
         $serveurs = User::with('role')->where('id_role', 3)->get();
         return view('main.table.editTable', compact('table', 'serveurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        try {
            $request->validate([
                'number' => 'required|string|max:255',
                'libelle' => 'required|string|max:255',
                'zone' => 'required|string|max:255',
                'places' => 'required|string|max:255',
                'id_serveur' => 'required|integer|exists:users,id',
                'status' => 'nullable',
                'notes' => 'nullable|string|max:255',
            ]);

            $table->update([
                'number' => $request->number,
                'libelle' => $request->libelle,
                'places' => $request->places,
                'id_serveur' => $request->id_serveur,
                'status' => $request->status ? 'Libre' : 'Indisponible',
                'notes' => $request->notes,
                'zone' => $request->zone,
            ]);
            $url = route('showTable', $table->id);


            // 4️⃣ Générer et sauvegarder l'image QR code
                $nomFichier = 'table_' . $table->id . '.svg';
                $cheminComplet = $dossier . '/' . $nomFichier;

                QrCode::format('svg')
                      ->size(300)       // taille en pixels
                      ->generate($url, $cheminComplet);

                 // 5️⃣ Enregistrer le chemin du QR code dans la base
            $table->update(['qr_code' => 'qrcodes/' . $nomFichier]);

            return redirect()->route('table')->with('success', "Table modifier avec success");
        } catch (\Illuminate\Validation\ValidationException $e) {
             // dd($e->errors());
             return back()->with('error', "Erreur enregistrement");
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $id)
    {
        $id->delete();
        return redirect()->route('table')->with('success', 'Table supprimer avec success');
    }

    public function reset(Table $table){
        $table->update([
            'status' => 'Libre',
        ]);

        return back()->with('success', 'Table libérer avec success');
    }
}
