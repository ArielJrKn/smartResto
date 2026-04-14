@extends('main.layouts.app')
@section('content') 


	        
	        <!-- Main Content -->
	<div class="pt-20 min-h-screen overflow-x-auto  w-full">
                <header class="">
                    <div class="px-6 py-4">
                        <div class="w-full  flex items-center justify-between ">
                            <h2 class="text-white text-xl">Gestion des employés</h2>
                            <div class="flex items-center space-x-6">
                                <button onclick="document.getElementById('modalAjoutEmploye').classList.remove('hidden')" class="bg-primary text-white px-4 py-2 !rounded-xl whitespace-nowrap flex items-center space-x-2 ">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-add-line"></i>
                                    </div>
                                    <span>Nouvel employé</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
        
                <!-- CARTE 1 - MANAGER -->
                @foreach($users as $user)
                <div class="bg-white/10 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <div class="relative">
                        <div class="h-24 bg-gradient-to-r from-primary to-secondary"></div>
                        <div class="absolute -bottom-12 left-4">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white/10 overflow-hidden shadow-md">
                                <img src="{{ $user->photo ? asset('storage/'.$user->photo) : 'https://randomuser.me/api/portraits/men/32.jpg' }}" alt="Photo" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i class="fas fa-circle text-[8px]"></i> Actif
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-14 pb-4 px-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-bold text-lg text-white">{{$user->name}}</h3>
                                <p class="text-secondary text-sm font-medium">{{$user->role->libelle}}</p>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600 transition">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                        
                        <div class="mt-3 space-y-2 text-sm">
                            <div class="flex items-center gap-2 text-gray-400">
                                <i class="ri-send-plane-fill w-4 text-gray-400"></i>
                                <span class="truncate">{{$user->email}}</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-400">
                                <i class="ri-phone-line w-4 text-gray-400"></i>
                                <span>{{$user->telephone}}</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-400">
                                <i class="ri-calendar-line w-4 text-gray-400"></i>
                                <span>Embauche: {{$user->dateApply}}</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-gray-100 flex justify-between items-center">
                            <div class="flex items-center gap-1 text-xs">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full">📊 CA: 45k€</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full">⭐ 4.8</span>
                            </div>
                            <div class="flex gap-1">
                                <a href="{{route('showemployes', $user->id)}}">
                                    <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                        <i class="ri-edit-line text-xs"></i>
                                    </button>
                                </a>
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <!-- CARTE 2 - SERVEUR -->
                <div class="bg-white/10 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="relative">
                        <div class="h-24 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                        <div class="absolute -bottom-12 left-4">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white/10 overflow-hidden shadow-md">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Photo" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i class="fas fa-circle text-[8px]"></i> En service
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-14 pb-4 px-4">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Sophie Martin</h3>
                            <p class="text-emerald-600 text-sm font-medium">Serveuse</p>
                        </div>
                        
                        <div class="mt-3 space-y-2 text-sm">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-envelope w-4 text-gray-400"></i>
                                <span class="truncate">sophie.martin@smartresto.com</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-phone w-4 text-gray-400"></i>
                                <span>+33 6 98 76 54 32</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-clock w-4 text-gray-400"></i>
                                <span>Posté: Table 12, 14, 18</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-gray-100 flex justify-between items-center">
                            <div class="flex items-center gap-1 text-xs">
                                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full">🍽️ 24 commandes</span>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full">💶 320€ pourboires</span>
                            </div>
                            <div class="flex gap-1">
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                    <i class="fas fa-edit text-xs"></i>
                                </button>
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CARTE 3 - CUISINIER -->
                <div class="bg-white/10 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="relative">
                        <div class="h-24 bg-gradient-to-r from-orange-500 to-red-500"></div>
                        <div class="absolute -bottom-12 left-4">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white/10 overflow-hidden shadow-md">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Photo" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i class="fas fa-fire"></i> En cuisine
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-14 pb-4 px-4">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Michel Bernard</h3>
                            <p class="text-orange-600 text-sm font-medium">Chef Cuisinier</p>
                        </div>
                        
                        <div class="mt-3 space-y-2 text-sm">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-envelope w-4 text-gray-400"></i>
                                <span class="truncate">michel.bernard@smartresto.com</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-phone w-4 text-gray-400"></i>
                                <span>+33 6 45 67 89 01</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-utensils w-4 text-gray-400"></i>
                                <span>Spécialité: Cuisine française</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-gray-100 flex justify-between items-center">
                            <div class="flex items-center gap-1 text-xs">
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full">👨‍🍳 18 plats/jour</span>
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded-full">⭐ 4.9 avis</span>
                            </div>
                            <div class="flex gap-1">
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                    <i class="fas fa-edit text-xs"></i>
                                </button>
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CARTE 4 - RÉCEPTIONNISTE -->
                <div class="bg-white/10 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="relative">
                        <div class="h-24 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                        <div class="absolute -bottom-12 left-4">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white/10 overflow-hidden shadow-md">
                                <img src="https://randomuser.me/api/portraits/women/89.jpg" alt="Photo" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i class="fas fa-circle text-[8px]"></i> En ligne
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-14 pb-4 px-4">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Laura Petit</h3>
                            <p class="text-indigo-600 text-sm font-medium">Réceptionniste</p>
                        </div>
                        
                        <div class="mt-3 space-y-2 text-sm">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-envelope w-4 text-gray-400"></i>
                                <span class="truncate">laura.petit@smartresto.com</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-phone w-4 text-gray-400"></i>
                                <span>+33 6 23 45 67 89</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-hotel w-4 text-gray-400"></i>
                                <span>8 check-in, 5 check-out</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-gray-100 flex justify-between items-center">
                            <div class="flex items-center gap-1 text-xs">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full">🏨 12 réservations</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full">📞 34 appels</span>
                            </div>
                            <div class="flex gap-1">
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                    <i class="fas fa-edit text-xs"></i>
                                </button>
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CARTE 5 - BARMAN -->
                <div class="bg-white/10 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="relative">
                        <div class="h-24 bg-gradient-to-r from-purple-500 to-pink-500"></div>
                        <div class="absolute -bottom-12 left-4">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white/10 overflow-hidden shadow-md">
                                <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Photo" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i class="fas fa-circle text-[8px]"></i> Au bar
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-14 pb-4 px-4">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Alexandre Leroy</h3>
                            <p class="text-pink-600 text-sm font-medium">Barman</p>
                        </div>
                        
                        <div class="mt-3 space-y-2 text-sm">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-envelope w-4 text-gray-400"></i>
                                <span class="truncate">alex.leroy@smartresto.com</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-phone w-4 text-gray-400"></i>
                                <span>+33 6 54 32 10 98</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-cocktail w-4 text-gray-400"></i>
                                <span>Spécialité: Cocktails signature</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-gray-100 flex justify-between items-center">
                            <div class="flex items-center gap-1 text-xs">
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full">🍹 86 cocktails</span>
                                <span class="bg-pink-100 text-pink-700 px-2 py-1 rounded-full">💶 156€ pourboires</span>
                            </div>
                            <div class="flex gap-1">
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                    <i class="fas fa-edit text-xs"></i>
                                </button>
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CARTE 6 - CAISSIER -->
                <div class="bg-white/10 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="relative">
                        <div class="h-24 bg-gradient-to-r from-teal-500 to-cyan-600"></div>
                        <div class="absolute -bottom-12 left-4">
                            <div class="w-24 h-24 rounded-full border-4 border-white bg-white/10 overflow-hidden shadow-md">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Photo" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i class="fas fa-circle text-[8px]"></i> En poste
                            </span>
                        </div>
                    </div>
                    
                    <div class="pt-14 pb-4 px-4">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800">Camille Dubois</h3>
                            <p class="text-cyan-600 text-sm font-medium">Caissière</p>
                        </div>
                        
                        <div class="mt-3 space-y-2 text-sm">
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-envelope w-4 text-gray-400"></i>
                                <span class="truncate">camille.dubois@smartresto.com</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-phone w-4 text-gray-400"></i>
                                <span>+33 6 87 65 43 21</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fas fa-cash-register w-4 text-gray-400"></i>
                                <span>Caisse: 3 240€ aujourd'hui</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-gray-100 flex justify-between items-center">
                            <div class="flex items-center gap-1 text-xs">
                                <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded-full">💰 47 transactions</span>
                                <span class="bg-cyan-100 text-cyan-700 px-2 py-1 rounded-full">📊 +12% vs hier</span>
                            </div>
                            <div class="flex gap-1">
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 transition">
                                    <i class="fas fa-edit text-xs"></i>
                                </button>
                                <button class="w-7 h-7 rounded-full bg-gray-100 hover:bg-red-100 text-gray-600 hover:text-red-600 transition">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div id="modalAjoutEmploye" class="fixed hidden inset-0 bg-black/50 backdrop-blur-md bg-opacity-50 z-50 overflow-y-auto">
        <livewire:add-employes/>
    </div>
@endsection       

