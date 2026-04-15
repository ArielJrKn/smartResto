<?php

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Etablissement;
use Livewire\WithFileUploads;

new class extends Component{
    use WithFileUploads;
    
    public $roles;

    public $path;
    public $nom;
    public $email;
    public $tel;
    public $adresse;
    public $dateNais;
    public $lieuNais;
    public $role;
    public $dateEmb;
    public $contrat;
    public $salary;
    public $tauxSalary;
    public $iban;
    public $password;
    public $sendMail;
    public $notes;
    
    public function mount() {
        $this->roles = Role::all(); // Assignez les données dans mount()
    }

    public function store(){

        try {
            // dd($this->all());
            $this->validate([
                'path' => 'nullable|mimes:jpg,png,jpeg|max:51200',
                'nom' => 'required|string|max:50',
                'email' => 'required|string|max:150|unique:users,email',
                'tel' => 'required|string|max:50|unique:users,telephone',
                'adresse' => 'nullable|string|max:255',                
                'dateNais' => 'nullable|date',
                'lieuNais' => 'nullable|string|max:255',
                'role' => 'required|integer|exists:roles,id',
                'dateEmb' => 'required|date',
                'contrat' => 'nullable|string|max:255',
                'salary' => 'nullable|integer',
                'tauxSalary' => 'nullable|integer',
                'iban' => 'nullable|string|max:255',
                'password' => 'required|string|max:255',
                'sendMail' => 'nullable',
                'notes' => 'nullable|string|max:255',                
            ]);

            $user = User::create([
                'photo' => $this->path->store('users', 'public'),
                'name' => $this->nom,
                'email' => $this->email,
                'telephone' => $this->tel,
                'adresse' => $this->adresse,
                'dateAplly' => $this->dateEmb,
                'birthDate' => $this->dateNais,
                'placeBirth' => $this->lieuNais,
                'contrat' => $this->contrat,
                'salary' => $this->salary,
                'tauxSalary' => $this->tauxSalary,
                'iban' => $this->iban,
                'id_role' => $this->role,
                'id_etablissement' => Etablissement::where('id',1)->first()->id,
                'password' => Hash::make($this->password),
                'notes' => $this->notes,
            ]);

            $this->reset();
            $this->roles = Role::all();

            session()->flash('success', "Utilisateur ". ' ' . $this->nom . ' ' ." est ajouté");

        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
        

    }
    
};

?>

<div>

        <div class="min-h-screen flex items-center justify-center p-4">
            
            <!-- Contenu modal -->
            <div class="bg-white/10 rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">
                
                <!-- En-tête -->
                <div class=" top-0 px-6 py-4 rounded-t-2xl flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="bg-primary/10 p-2 rounded-full">
                            <i class="fas fa-user-plus text-primary text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-white">Ajouter un employé</h2>
                            <p class="text-sm text-gray-400">Remplissez tous les champs ci-dessous</p>
                        </div>
                    </div>
                    <button onclick="document.getElementById('modalAjoutEmploye').classList.add('hidden')" 
                            class="text-gray-400 hover:text-gray-600 transition">
                        <i class="ri-close-line text-2xl"></i>
                    </button>
                </div>
                
                <!-- Corps du modal -->
                <div class="p-6">
                    <form id="formAjoutEmploye" wire:submit.prevent="store" enctype="multipart/form-data">
                        @csrf
                        <!-- 2 colonnes -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <!-- INFORMATIONS PERSONNELLES -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-primary border-b pb-2 flex items-center gap-2">
                                    <i class="ri-card-line text-secondary"></i> Informations personnelles
                                </h3>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Photo</label>
                                    <input type="file" wire:model="path" accept="/images" required class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary focus:border-transparent">
                                </div>

                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Nom complet *</label>
                                    <input type="text" wire:model="nom" required class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary focus:border-transparent">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Email *</label>
                                    <input type="email" wire:model="email" required class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Téléphone *</label>
                                    <input type="tel" wire:model="tel" required class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary">
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Adresse</label>
                                    <textarea rows="2" wire:model="adresse" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary"></textarea>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-400 mb-1">Date de naissance</label>
                                        <input type="date" wire:model="dateNais" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-400 mb-1">Lieu de naissance</label>
                                        <input type="text" wire:model="lieuNais" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2">
                                    </div>
                                </div>
                            </div>
                            
                            <!-- INFORMATIONS PROFESSIONNELLES -->
                            <div class="space-y-4">
                                <h3 class="text-lg font-semibold text-primary border-b pb-2 flex items-center gap-2">
                                    <i class="fas fa-briefcase text-secondary"></i> Informations professionnelles
                                </h3>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Poste / Rôle *</label>
                                    <select required wire:model="role" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-400 mb-1">Date d'embauche *</label>
                                        <input type="date" wire:model="dateEmb" required class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-400 mb-1">Type de contrat</label>
                                        <select wire:model="contrat" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2">
                                            <option value="CDI - Temps plein">CDI - Temps plein</option>
                                            <option value="CDI - Temps partiel">CDI - Temps partiel</option>
                                            <option value="CDD">CDD</option>
                                            <option value="Stage">Stage</option>
                                            <option value="Freelance">Freelance</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block4text-sm font-medium text-gray-400 mb-1">Salaire brut mensuel</label>
                                        <div class="relative">
                                            <span class="absolute left-3 top-2 text-gray-500">€</span>
                                            <input type="number" wire:model="salary" placeholder="0.00" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg pl-8 pr-4 py-2">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block4text-sm font-medium text-gray-400 mb-1">Taux horaire</label>
                                        <div class="relative">
                                            <span class="absolute left-3 top-2 text-gray-500">€</span>
                                            <input type="number" wire:model="tauxSalary" placeholder="0.00" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg pl-8 pr-4 py-2">
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-400 mb-1">Coordonnées bancaires (IBAN)</label>
                                    <input type="text" wire:model="iban" placeholder="FR76 XXXX XXXX XXXX XXXX" class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2">
                                </div>
                                
                                <!-- SECTION COMPTE UTILISATEUR -->
                                <div class="mt-6 p-4 bg-white/10 rounded-lg">
                                    <h3 class="text-md font-semibold text-white flex items-center gap-2 mb-3">
                                        <i class="ri-laptop-line text-secondary"></i> Accès utilisateur
                                    </h3>
                                    <div class="grid grid-cols-1 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-400 mb-1">Mot de passe temporaire *</label>
                                            <input type="password" wire:model="password" required class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2">
                                        </div>
                                    </div>
                                    <div class="mt-3 flex items-center gap-2">
                                        <input type="checkbox" wire:model="sendMail" id="sendCredentials" class="rounded border-gray-300 text-secondary focus:ring-secondary">
                                        <label for="sendCredentials" class="text-sm text-gray-400">Envoyer les identifiants par email à l'employé</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        
                        <!-- NOTES INTERNES -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-400 mb-1">Notes internes (optionnel)</label>
                            <textarea rows="3" wire:model="notes" placeholder="Informations complémentaires, allergies, restrictions, etc..." 
                                      class="w-full bg-white/10 text-gray-400 outline-none rounded-lg px-4 py-2 focus:ring-2 focus:ring-secondary"></textarea>
                        </div>
                    </form>
                </div>
                
                <!-- Pied de page avec boutons -->
                <div class="bottom-0 px-6 py-4 rounded-b-2xl flex justify-end gap-3">
                    <button onclick="document.getElementById('modalAjoutEmploye').classList.add('hidden')" 
                            class="px-5 py-2 bg-white/10 hover:bg-white/20 text-gray-400 rounded-lg transition flex items-center gap-2">
                        Fermer
                    </button>
                    <button type="submit" form="formAjoutEmploye" 
                            class="px-5 py-2 bg-primary hover:bg-orange-600 text-white rounded-lg transition flex items-center gap-2 shadow-md">
                        <i class="ri-save-line"></i> Enregistrer l'employé
                    </button>
                </div>
            </div>
        </div>
</div>

    <script id="notifications">
        
        document.addEventListener('DOMContentLoaded', function() {

            function showNotification(message, type = 'success') {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-full ${
                    type === 'success' ? 'bg-green-500/30 backdrop-blur-md text-white' :
                    type === 'warning' ? 'bg-orange-500/30 backdrop-blur-md text-white' :
                    type === 'error' ? 'bg-red-500/30 backdrop-blur-md text-white' :
                    'bg-blue-500/30 backdrop-blur-md text-white'
                }`;
                notification.textContent = message;
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 100);
                
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 300);
                }, 5000);
            }
            @if(session('success'))
                showNotification({{ json_encode(session('success')) }}, 'success');
            @endif

        });
    </script>